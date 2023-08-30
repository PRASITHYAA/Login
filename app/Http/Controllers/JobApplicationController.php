<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $jobApplication = $request->validate([
            'sector' => 'required',
            'postion' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            'dob' => 'required|date',
            'age' => 'required|integer|min:18|max:99',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postalcode' => 'required',
            'phone' => 'required|numeric',
            'alternativephone' => 'required|numeric',
            'email' => 'required|email',
            'fblink' => 'required',
            'instalink' => 'required',
            'linkedlink' => 'required',
            // permanantaddress
            'permanantaddress' => 'required|in:yes,no',
            'Permanantcity' => 'required_if:permanantaddress,yes',
            'Permanantpostalcode' => 'required_if:permanantaddress,yes',
            // fathername
            'fathername' => 'required',
            'fatherdateofbirth' => 'required|date',
            'fatherphone' => 'required|numeric',
            'fatherimage' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            // mothername
            'mothername' => 'required',
            'motherdateofbirth' => 'required|date',
            'motherphone' => 'required|numeric',
            'motherimage' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            // maritalStatus
            'maritalStatus' => 'required|in:married,single',
            'spousename' => 'required_if:maritalStatus,married',
            'spousedateofbirth' => 'required_if:maritalStatus,married|date',
            'spouseemail' => 'required_if:maritalStatus,married|email',
            'spousephone' => 'required_if:maritalStatus,married|numeric',
            'spouseimage' => 'required_if:maritalStatus,married|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',  // Adjust max size if needed
            // Siblings
            'Siblings' => 'required|in:yes,no',
            'siblingsname' => 'required_if:Siblings,yes',
            'siblingsdateofbirth' => 'required_if:Siblings,yes|date',
            'siblingsemail' => 'required_if:Siblings,yes|email',
            'siblingsphone' => 'required_if:Siblings,yes|numeric',
            'siblingsimage' => 'required_if:Siblings,yes|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',  // Adjust max size if needed
        ]);

        // Upload and store father image
        if ($request->hasFile('fatherimage')) {
            $fatherImagePath = $request->file('fatherimage')->store('images', 'public');
            $jobApplication['fatherimage'] = $fatherImagePath;
        }

        if ($request->hasFile('motherimage')) {
            $motherImagepath = $request->file('motherimage')->store('images', 'public');
            $jobApplication['motherimage'] = $motherImagepath;
        }

        if ($request->hasFile('spouseimage ')) {
            $spouseImagepath = $request->file('spouseimage')->store('images', 'public');
            $jobApplication['spouseimage'] = $spouseImagepath;
        }
        if ($request->hasFile('siblingsimage ')) {
            $siblingsImagepath = $request->file('siblingsimage')->store('images', 'public');
            $jobApplication['siblingsimage'] = $siblingsImagepath;
        }

        JobApplication::create($jobApplication);

        return redirect()->back()->with('success', 'Form submitted successfully!');

        // return redirect()->route('job_application.show', $jobApplication->id)
        //     ->with('success', 'Job application submitted successfully!');
    }


}