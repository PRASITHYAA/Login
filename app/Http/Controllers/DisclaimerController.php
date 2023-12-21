<?php

namespace App\Http\Controllers;

use App\Mail\JobSubmission;
use App\Models\Achievement;
use App\Models\Card;
use App\Models\Disclaimer;
use App\Models\Education;
use App\Models\Employment;
use App\Models\EmploymentEmployer;
use App\Models\EmploymentReference;
use App\Models\JobApplication;
use App\Models\Sibling;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Razorpay\Api\Api;

class DisclaimerController extends Controller
{
    public function create()
    {
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $res = $api->order->create(array('receipt' => '123', 'amount' => round(10) * 100, 'currency' => 'INR', 'notes' => array('key1' => 'value3', 'key2' => 'value2')));

        return view('career.disclaimer.create',  compact('res'));
    }

    public function store(Request $request)
    {
         //dd(1,$request->all());

        $data = $request->validate([
            'job_application_id' => 'required',
            'expected_date_to_join' => 'required|date',
            'current_salary' => 'required|numeric',
            'currency' => 'required',
            'expected_salary' => 'required|numeric',
            'disclaimer_signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'disclaimer_date' => 'required',
            'disclaimer_time' => 'required',
            'disclaimer_print_name' => 'required',
            'disclaimer_place' => 'required',
            'payment_id' => 'required',
            'payment_response' => 'required',
        ]);

        if ($request->hasFile('disclaimer_signature')) {
            $signatureImagePath = $request->file('disclaimer_signature')->store('images', 'public');
            $data['disclaimer_signature'] = $signatureImagePath;
        }

        $disclaimer = Disclaimer::create($data);
        $jobApplication = $disclaimer->jobApplication;
        $emailData['first_name'] = $jobApplication->first_name;
        $emailData['last_name'] = $jobApplication->last_name;
        $emailData['sector'] = $jobApplication->sector->name;
        $emailData['position'] = $jobApplication->position->name;
        $emailData['created_at'] = Carbon::parse($jobApplication->created_at)->format('d_m_Y_h_i_A');
        $jobApplication->allow_edit = 0;
        $jobApplication->save();
        $this->savePdf($jobApplication);
        $emailData['view'] = 'mail.job_submission';
        Mail::to(env('EMAIL_TO', $jobApplication->email))->send(new JobSubmission($emailData));
        $emailData['view'] = 'mail.job_submission_admin';
        Mail::to('info@tisecon.com')->send(new JobSubmission($emailData));

        return redirect()->route('acknowledgement', ['job_application_id' => $disclaimer->job_application_id, 'disclaimer_id' => $disclaimer->id])->with('success', 'Disclaimer created successfully!');
    }

    public function show($id)
    {
        $disclaimer = Disclaimer::find($id);
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $res = $api->order->create(array('receipt' => '123', 'amount' => round(10) * 100, 'currency' => 'INR', 'notes' => array('key1' => 'value3', 'key2' => 'value2')));

        return view('career.disclaimer.show', ['disclaimer' => $disclaimer, 'res' => $res]);
    }

    public function edit($id)
    {
        $disclaimer = Disclaimer::find($id);

        $achievement = Achievement::where('job_application_id', $disclaimer->job_application_id)->orderBy('id', 'desc')->first();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $res = $api->order->create(array('receipt' => '123', 'amount' => round(10) * 100, 'currency' => 'INR', 'notes' => array('key1' => 'value3', 'key2' => 'value2')));

        return view('career.disclaimer.create', ['disclaimer' => $disclaimer, 'achievement_id' => $achievement->id, 'res' => $res]);
    }


    public function update($id, Request $request)
    {
        //dd(2,$request->all());

        $rules = [
            'job_application_id' => 'required',
            'expected_date_to_join' => 'required|date',
            'current_salary' => 'required|numeric',
            'currency' => 'required',
            'expected_salary' => 'required|numeric',
            'disclaimer_date' => 'required',
            'disclaimer_time' => 'required',
            'disclaimer_print_name' => 'required',
            'disclaimer_place' => 'required',
        ];

        if ($request->hasFile('disclaimer_signature')) {
            $rules['disclaimer_signature'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $data = $request->validate($rules);

        if ($request->hasFile('disclaimer_signature')) {
            $signatureImagePath = $request->file('disclaimer_signature')->store('images', 'public');
            $data['disclaimer_signature'] = $signatureImagePath;
        }

        $disclaimer = Disclaimer::find($id);
        $disclaimer->fill($data);
        $disclaimer->save();
        $jobApplication = $disclaimer->jobApplication;
        $jobApplication->allow_edit = 0;
        $jobApplication->save();
        $emailData['first_name'] = $jobApplication->first_name;
        $emailData['last_name'] = $jobApplication->last_name;
        $emailData['sector'] = $jobApplication->sector->name;
        $emailData['position'] = $jobApplication->position->name;
        $emailData['created_at'] = Carbon::parse($jobApplication->created_at)->format('d_m_Y_h_i_A');
        $this->savePdf($jobApplication);
        $emailData['view'] = 'mail.job_submission';
        Mail::to(env('EMAIL_TO', $jobApplication->email))->send(new JobSubmission($emailData));
        $emailData['view'] = 'mail.job_submission_admin';
        Mail::to('info@tisecon.com')->send(new JobSubmission($emailData));
        return redirect()->route('acknowledgement', ['job_application_id' => $disclaimer->job_application_id, 'disclaimer_id' => $disclaimer->id])->with('success', ' Disclaimer updated successfully!');
    }

    public function acknowledgement(Request $request)
    {
        $data = JobApplication::find($request->job_application_id);
        return view('career.acknowledgement.view', compact('data'));
    }

    public function preparePdf($request)
    {
        $application = JobApplication::find($request->id);
        $data = $application->toArray();
        $siblings = Sibling::where('job_application_id', $application->id)->get()->toArray();
        $data = array_merge(['siblingsData' => $siblings], $data);
        $disclaimer = Disclaimer::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($disclaimer, $data);
        $education = Education::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($education, $data);
        $card = Card::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($card, $data);
        $achievement = Achievement::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($achievement, $data);
        $employment = Employment::where('job_application_id', $request->id)->orderBy('id', 'desc')->first()->toArray();
        $data = array_merge($employment, $data);
        $employmentEmployer = EmploymentEmployer::where('employment_id', $employment['id'])->get()->toArray();
        $data = array_merge(['employmentEmployer' => $employmentEmployer], $data);
        $employmentReference = EmploymentReference::where('employment_id', $employment['id'])->get()->toArray();
        $data = array_merge(['employmentReference' => $employmentReference], $data);
        $pdf = Pdf::loadView('pdf.application', $data);
        // Add a custom page footer with the date and time
        $pdf->setOption(['isPhpEnabled', true, 'isHtml5ParserEnabled' => true]);
        return ['pdf' => $pdf, 'application' => $application];
    }

    public function downloadPdf(Request $request)
    {
        $pdfData = $this->preparePdf($request);
        $dateTime = Carbon::parse($pdfData['application']->created_at)->format('d_m_Y_h_i_A');
        return $pdfData['pdf']->download('job_application_' . $pdfData['application']->first_name.'_'.$dateTime . '.pdf');
    }

    public function savePdf($application)
    {
        $request = new Request($application->toArray());
        $pdfData = $this->preparePdf($request);
        $dateTime = Carbon::parse($application->created_at)->format('d_m_Y_h_i_A');
        $pdfData['pdf']->save('job_application_' . $application->first_name.'_'.$dateTime . '.pdf', 'public');
    }
}
