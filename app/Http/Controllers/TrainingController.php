<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $request->validate([
            'sector' => 'required',
            'course_level' => 'required',
            'course_title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'passport_size_photo_upload' => 'required',
            'select_your_qualification' => 'required',
            'choice1' => 'required|in:yes,no',
            'job_title' => 'required_if:choice1,yes',
            'gender' => 'required_if:choice1,yes',
            'year_of_experience' => 'required_if:choice1,yes',
            'address_line_1' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'address_line_2' => 'required',
            'state' => 'required',
            'country' => 'required',
            'choice2' => 'required|in:yes,no',
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
            'training_session' => 'required',
        ]);

        // Upload image
        if ($request->hasFile('passport_size_photo_upload')) {
            $passportPhotoPath = $request->file('passport_size_photo_upload')->store('passport_photos', 'public');
            $request->merge(['passport_size_photo_upload' => $passportPhotoPath]);
        }

        Training::create($request->all());

        session()->flash('success', 'Training record added successfully.');

        return redirect()->route('training.create');
    }


    public function edit($id)
    {
        $training = Training::find($id);
        return view('training.edit', compact('trainings'));
    }

    public function update(Request $request, $id)
    {
        // Handle update logic here
    }

    public function destroy(Training $training)
    {
        $training->delete();

        Session::flash('success', 'Training deleted successfully!');

        return redirect()->route('training.index')->with('success', 'Training deleted successfully!');
    }

    public function show($id)
    {
        $training = Training::find($id);
        return view('trainings.show', compact('training'));
    }

}