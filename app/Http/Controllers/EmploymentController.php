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
            'employer_email' => 'required_if:open-input,yes|email',
            'employer_address' => 'required_if:open-input,yes',
            'employer_phone' => 'required_if:open-input,yes',
            'employer_job_title' => 'required_if:open-input,yes',
            'employer_from_date' => 'required_if:open-input,yes|date',
            'employer_to_date' => 'required_if:open-input,yes|date',
            'employer_experience' => 'required_if:open-input,yes',
            'employer_responsibilities' => 'required_if:open-input,yes',

            // REFERENCE
            'reference_name' => 'required_if:open-input,yes',
            'reference_company' => 'required_if:open-input,yes',
            'reference_position' => 'required_if:open-input,yes',
            'reference_email' => 'required_if:open-input,yes|email',
            'reference_phone' => 'required_if:open-input,yes',
            'reference_phone' => 'required_if:open-input,yes',
            // second


            'nested-option' => 'required|in:nested-yes,nested-no',
            'sub-nested-input' => 'required_if:nested-option,nested-yes',
            'sub-nested-option' => 'required_if:nested-option,nested-yes|in:sub-nested-yes,sub-nested-no',
            'nested-input-field' => 'required_if:nested-option,nested-no',
        ]);

        Employment::create($employment);

        return redirect()->route('achievement', ['id' => $request->job_application_id])->with('success', 'Employment created successfully!');
    }
}