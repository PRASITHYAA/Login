<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Employment;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    public function store(Request $request)
    {
        $employment = $request->validate([
            'job_application_id' => 'required',
            'open-input' => 'required|in:yes,no',
            // experience
            'employer_company' => 'required_if:open-input,yes',
            'employer_email' => 'required_if:open-input,yes',
            'employer_address' => 'required_if:open-input,yes',
            'employer_phone' => 'required_if:open-input,yes',
            'employer_job_title' => 'required_if:open-input,yes',
            'employer_from_date' => 'required_if:open-input,yes',
            'employer_to_date' => 'required_if:open-input,yes',
            'employer_experience' => 'required_if:open-input,yes',
            'employer_responsibilities' => 'required_if:open-input,yes',
            // REFERENCE
            'reference_name' => 'required_if:open-input,yes',
            'reference_company' => 'required_if:open-input,yes',
            'reference_position' => 'required_if:open-input,yes',
            'reference_email' => 'required_if:open-input,yes',
            'reference_phone' => 'required_if:open-input,yes',
            // second
            'open-input1' => 'required_if:open-input,yes|in:yes,no',
            'sub-text-input' => 'required_if:open-input1,no',
            'open-input2' => 'required_if:open-input,yes|in:yes,no',
            'text-input' => 'required_if:open-input2,no',
        ]);

        Employment::create($employment);

        return redirect()->route('achievement.view', ['job_application_id' => $request->job_application_id])->with('success', 'Employment created successfully!');
    }

    public function edit($id)
    {
        $employment = Employment::find($id);

        $education = Education::where('job_application_id', $employment->job_application_id)->orderBy('id', 'desc')->first();

        return view('employment.view', ['employment' => $employment, 'education_id' => $education->id]);
    }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            'job_application_id' => 'required',
            'open-input' => 'required|in:yes,no',
            // experience
            'employer_company' => 'required_if:open-input,yes',
            'employer_email' => 'required_if:open-input,yes',
            'employer_address' => 'required_if:open-input,yes',
            'employer_phone' => 'required_if:open-input,yes',
            'employer_job_title' => 'required_if:open-input,yes',
            'employer_from_date' => 'required_if:open-input,yes',
            'employer_to_date' => 'required_if:open-input,yes',
            'employer_experience' => 'required_if:open-input,yes',
            'employer_responsibilities' => 'required_if:open-input,yes',
            // REFERENCE
            'reference_name' => 'required_if:open-input,yes',
            'reference_company' => 'required_if:open-input,yes',
            'reference_position' => 'required_if:open-input,yes',
            'reference_email' => 'required_if:open-input,yes',
            'reference_phone' => 'required_if:open-input,yes',
            // second
            'open-input1' => 'required_if:open-input,yes|in:yes,no',
            'sub-text-input' => 'required_if:open-input1,no',
            'open-input2' => 'required_if:open-input,yes|in:yes,no',
            'text-input' => 'required_if:open-input2,no',
        ]);

        $employment = Employment::find($id);

        $employment = $employment->fill($data);

        $employment->save();

        $jobApplication = JobApplication::find($employment->job_application_id);

        $achievement = Achievement::where('job_application_id', $employment->job_application_id)->orderBy('id', 'desc')->first();

        if (!is_null($achievement)) {
            return redirect()->route('career.employment.edit', $achievement->id)->with('success', 'Employment updated successfully!');
        }
        else {
            return redirect()->route('employment.view', ['job_application_id' => $jobApplication->id, 'employment_id' => $employment->id])
                ->with('success', ' Employment updated successfully!');
        }

    }
}