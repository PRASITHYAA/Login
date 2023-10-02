<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CourseTitle;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::all();
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
            $passportPhotoPath = $request->file('photo')->store('photos', 'public');
            $request->merge(['photo' => $passportPhotoPath]);
        }
        $training['user_id'] = auth()->user()->id;
        Training::create($training);

        session()->flash('success', 'Training form submitted successfully.');

        return redirect()->route('dashboard');
    }


    public function destroy(Training $training)
    {
        $training->delete();

        \Session::flash('success', 'Training deleted successfully!');

        return redirect()->route('training.index');
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
}
