<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\TrainingSubmission;
use App\Models\CourseTitle;
use App\Models\Training;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Razorpay\Api\Api;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::orderBy('id', 'desc')->get();
        return view('training.index', compact('trainings'));
    }

    public function create()
    {
        return view('training.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        /*$training = $request->validate([
            'sector_id' => 'required',
            'course_level_id' => 'required',
            'course_title_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'photo' => 'required',
            'qualification' => 'required',
            'experience_status' => 'required|in:yes,no',
            'job_title' => 'required_if:choice1,yes',
            'gender' => 'required_if:choice1,yes',
            'year_of_experience' => 'required_if:choice1,yes',
            'address_line_1' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'address_line_2' => 'required',
            'state' => 'required',
            'country' => 'required',
            'address_status' => 'required|in:yes,no',
            'permanent_address_line_1' => 'required_if:choice2,yes',
            'permanent_city' => 'required_if:choice2,yes',
            'permanent_zip_code' => 'required_if:choice2,yes',
            'permanent_address_line_2' => 'required_if:choice2,yes',
            'permanent_state' => 'required_if:choice2,yes',
            'permanent_country' => 'required_if:choice2,yes',
            'primary_mobile_number' => 'required',
            'primary_email' => 'required|email',
            'secondary_mobile_number' => 'required',
            'secondary_email' => 'required|email',
            'job_description' => 'required',
            'expectations' => 'required',
            //'training_session' => 'required',
        ]);*/
        $training = $request->all();

        // Upload image
        if ($request->hasFile('photo')) {
            $passportPhotoPath = $request->file('photo')->store('training', 'public');
            $training['photo'] = $passportPhotoPath;
        }
        if ($request->hasFile('signature')) {
            $passportSignaturePath = $request->file('signature')->store('training', 'public');
            $training['signature'] = $passportSignaturePath;
        }
        $training['user_id'] = auth()->user()->id;
        $training = Training::create($training);
        $training->allow_edit = 0;
        $training->save();
        $emailData['first_name'] = $training->first_name;
        $emailData['last_name'] = $training->last_name;
        $emailData['sector'] = $training->sector->name;
        $emailData['course_level'] = $training->course_level->name;
        $emailData['course_title'] = $training->course_title->name;
        $emailData['created_at'] = Carbon::parse($training->created_at)->format('d_m_Y_h_i_A');
        $this->savePdf($training);
        Mail::to(env('EMAIL_TO', $training->primary_email))->send(new TrainingSubmission($emailData));
        session()->flash('success', 'Training form submitted successfully.');
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $training = Training::find($id);
        $course = CourseTitle::find($training->course_title_id);
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $res = $api->order->create(array('receipt' => '123', 'amount' => round($course->course_registration_fee) * 100, 'currency' => 'INR', 'notes' => array('key1' => 'value3', 'key2' => 'value2')));
        return view('trainings_apply',  compact('training', 'res', 'course'));
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        $training = Training::find($id);
        // Upload image
        if ($request->hasFile('photo')) {
            $passportPhotoPath = $request->file('photo')->store('training', 'public');
            $data['photo'] = $passportPhotoPath;
        } else {
            $data['photo'] = $training->photo;
        }
        $data['user_id'] = auth()->user()->id;
        $training->fill($data);
        $training->allow_edit = 0;
        $training->save();
        $emailData['first_name'] = $training->first_name;
        $emailData['last_name'] = $training->last_name;
        $emailData['sector'] = $training->sector->name;
        $emailData['course_level'] = $training->course_level->name;
        $emailData['course_title'] = $training->course_title->name;
        $emailData['created_at'] = Carbon::parse($training->created_at)->format('d_m_Y_h_i_A');;
        $this->savePdf($training);
        Mail::to(env('EMAIL_TO', $training->primary_email))->send(new TrainingSubmission($emailData));
        session()->flash('success', 'Training form updated successfully.');
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        Training::destroy($id);
        \Session::flash('success', 'Training form deleted successfully!');
        $route = auth()->user()->hasRole('Admin') ? 'training.index' : 'user.trainings.list';
        return redirect()->route($route);
    }

    public function show(Training $training)
    {
        return view('training.view', compact('training'));
    }

    public function trainingView($id)
    {
        $courseTitle = CourseTitle::find($id);
        return view('trainings_view', compact('courseTitle'));
    }

    public function preparePdf($id)
    {
        $training = Training::find($id);
        $data = $training->toArray();
        //$data = array_merge(['employmentReference' => $employmentReference], $data);
        $pdf = Pdf::loadView('pdf.training_application', $data);
        // Add a custom page footer with the date and time
        $pdf->setOption(['isPhpEnabled', true, 'isHtml5ParserEnabled' => true]);
        return ['pdf' => $pdf, 'training' => $training];
    }

    public function downloadPdf($id)
    {
        $pdfData = $this->preparePdf($id);
        $dateTime = Carbon::parse($pdfData['training']->created_at)->format('d_m_Y_h_i_A');
        return $pdfData['pdf']->download('job_application_' . $pdfData['training']->first_name.'_'.$dateTime . '.pdf');
    }

    public function savePdf($training)
    {
        $pdfData = $this->preparePdf($training->id);
        $dateTime = Carbon::parse($training->created_at)->format('d_m_Y_h_i_A');
        $pdfData['pdf']->save('training_application_' . $training->first_name.'_'.$dateTime. '.pdf', 'public');
    }

    public function giveAccess($id)
    {
        $training = Training::find($id);
        $training->allow_edit = 1;
        $training->save();
        return redirect()->back()->with('success', 'Edit Access given successfully!');
    }

    public function applyTraining(Request $request)
    {
        $course = CourseTitle::find(request()->course_title_id);
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $res = $api->order->create(array('receipt' => '123', 'amount' => round($course->course_registration_fee) * 100, 'currency' => 'INR', 'notes' => array('key1' => 'value3', 'key2' => 'value2')));
        return view('trainings_apply', ['res' => $res, 'course' => $course]);
    }
}
