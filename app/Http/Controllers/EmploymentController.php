<?php

namespace App\Http\Controllers;

use App\Models\Employment;
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

        return view('career.employment.create', ['employment' => $employment]);
    }
    public function update($id, Request $request){

    }

    }
