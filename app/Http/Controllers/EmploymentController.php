<?php

namespace App\Http\Controllers;

use App\Models\Employment;

class EmploymentController extends Controller
{
    public function store(Request $request)
    {
        $employment = $request->validate([
            'open-input' => 'required|in:yes,no',
              // experience
            'experiencecompany' => 'required_if:open-input,yes',
            'experienceemail' => 'required_if:open-input,yes|email',
            'experienceaddress' => 'required_if:open-input,yes',
            'experiencenumber' => 'required_if:open-input,yes',
            'experiencejobtitle' => 'required_if:open-input,yes',
            'experiencefromdate' => 'required_if:open-input,yes|date',
            'experiencetodate' => 'required_if:open-input,yes|date',
            'experienceyear' => 'required_if:open-input,yes|year',
            'experienceResponsibilities' => 'required_if:open-input,yes',
            // REFERENCE
            'referencename' => 'required_if:open-input,yes',
            'referencecompany' => 'required_if:open-input,yes',
            'referenceposition' => 'required_if:open-input,yes',
            'referenceemail' => 'required_if:open-input,yes|email',
            'referenceaddress' => 'required_if:open-input,yes',
            'referencephone' => 'required_if:open-input,yes',
// second
            'nested-option' => 'required|in:yes,no',
            'crimeexplain' => 'required_if:nested-option,yes',
            'sub-nested-option' => 'required_if:nested-option,yes',

            'crimeexplain' => 'required_if:sub-nested-option,no',
        ]);

        Employment::create($employment);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}