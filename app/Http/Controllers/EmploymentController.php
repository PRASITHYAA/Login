<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Education;
use App\Models\Employment;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    public function create()
    {
        return view('career.employment.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'job_application_id' => 'required',
            'previous_experience' => 'required|in:yes,no',
            // experience
            'employer_company' => 'required_if:previous_experience,yes',
            'employer_email' => 'required_if:previous_experience,yes',
            'employer_address' => 'required_if:previous_experience,yes',
            'employer_phone' => 'required_if:previous_experience,yes',
            'employer_job_title' => 'required_if:previous_experience,yes',
            'employer_from_date' => 'required_if:previous_experience,yes',
            'employer_to_date' => 'required_if:previous_experience,yes',
            'employer_experience' => 'required_if:previous_experience,yes',
            'employer_responsibilities' => 'required_if:previous_experience,yes',
            // REFERENCE
            'reference_name' => 'required_if:previous_experience,yes',
            'reference_company' => 'required_if:previous_experience,yes',
            'reference_position' => 'required_if:previous_experience,yes',
            'reference_email' => 'required_if:previous_experience,yes',
            'reference_phone' => 'required_if:previous_experience,yes',
            'reference_address' => 'required_if:previous_experience,yes',
            // second
            'eligible_to_work' => 'required_if:previous_experience,yes|in:yes,no',
            'eligible_to_work_text' => 'required_if:eligible_to_work,no',
            'crime_status' => 'required_if:previous_experience,yes|in:yes,no',
            'crime_status_text' => 'required_if:crime_status,yes',
        ]);

        $employment = Employment::create($data);
        $employment->reference_name = $data['reference_name'];
        $employment->save();

        return redirect()->route('achievement.view', ['job_application_id' => $request->job_application_id, 'employment_id' => $employment->id])->with('success', 'Employment created successfully!');
    }

    public function edit($id)
    {
        $employment = Employment::find($id);

        $education = Education::where('job_application_id', $employment->job_application_id)->orderBy('id', 'desc')->first();

        return view('career.employment.create', ['employment' => $employment, 'education_id' => $education->id]);
    }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            'job_application_id' => 'required',
            'previous_experience' => 'required|in:yes,no',
            // experience
            'employer_company' => 'required_if:previous_experience,yes',
            'employer_email' => 'required_if:previous_experience,yes',
            'employer_address' => 'required_if:previous_experience,yes',
            'employer_phone' => 'required_if:previous_experience,yes',
            'employer_job_title' => 'required_if:previous_experience,yes',
            'employer_from_date' => 'required_if:previous_experience,yes',
            'employer_to_date' => 'required_if:previous_experience,yes',
            'employer_experience' => 'required_if:previous_experience,yes',
            'employer_responsibilities' => 'required_if:previous_experience,yes',
            // REFERENCE
            'reference_name' => 'required_if:previous_experience,yes',
            'reference_company' => 'required_if:previous_experience,yes',
            'reference_position' => 'required_if:previous_experience,yes',
            'reference_email' => 'required_if:previous_experience,yes',
            'reference_phone' => 'required_if:previous_experience,yes',
            'reference_address' => 'required_if:previous_experience,yes',
            // second
            'eligible_to_work' => 'required_if:previous_experience,yes|in:yes,no',
            'eligible_to_work_text' => 'required_if:eligible_to_work,no',
            'crime_status' => 'required_if:previous_experience,yes|in:yes,no',
            'crime_status_text' => 'required_if:crime_status,yes',
        ]);

        $employment = Employment::find($id);
        $employment->fill($data);
        $employment->save();

        $jobApplication = JobApplication::find($employment->job_application_id);

        $achievement = Achievement::where('job_application_id', $employment->job_application_id)->orderBy('id', 'desc')->first();

        if (!is_null($achievement)) {
            return redirect()->route('career.achievement.edit', $achievement->id)->with('success', 'Employment updated successfully!');
        }
        else {
            return redirect()->route('achievement.view', ['job_application_id' => $jobApplication->id, 'employment_id' => $employment->id])
                ->with('success', ' Employment updated successfully!');
        }

    }
}
