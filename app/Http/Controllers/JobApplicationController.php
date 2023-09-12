<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function index()
    {
        $jobApplications = JobApplication::all(); // Fetch all job applications

        return view('career.job_application.index', ['jobApplications' => $jobApplications]);
    }

    public function create()
    {
        return view('career.job_application.create');
    }


    public function store(Request $request)
    {
        //dd($request->all());
        $jobApplication = $request->validate([
            'sector_id' => 'required',
            'position_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            'dob' => 'required|date',
            'age' => 'required|integer|min:18|max:99',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'alternative_phone' => ['regex:/^[0-9\s]+$/'],
            'email' => 'required|email',
            'fb_link' => 'required',
            'linked_link' => 'required',
            'instagram_link' => 'required',
            // permanent address
            'permanent_address_input' => 'required|in:yes,no',
            'permanent_city' => 'required_if:permanent_address_input,yes',
            'permanent_postal_code' => 'required_if:permanent_address_input,yes',
            'permanent_phone' => 'required_if:permanent_address_input,yes',
            'permanent_country' => 'required_if:permanent_address_input,yes',
            'permanent_address' => 'required_if:permanent_address_input,yes',
            'permanent_state' => 'required_if:permanent_address_input,yes',

            // father name
            'father_name' => 'required',
            'father_date_of_birth' => 'required|date',
            'father_phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'father_image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            // mother name
            'mother_name' => 'required',
            'mother_date_of_birth' => 'required|date',
            'mother_phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'mother_image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            // maritalStatus
            'marital_status' => 'required|in:married,single',
            'spouse_name' => 'required_if:marital_status,married',
            'spouse_date_of_birth' => 'required_if:marital_status,married',
            'spouse_email' => 'required_if:marital_status,married',
            'spouse_phone' => 'required_if:marital_status,married',
            'spouse_image' => 'required_if:marital_status,married|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            'siblings' => 'required|in:yes,no',
            'siblings_name' => 'required_if:siblings,yes',
            'siblings_date_of_birth' => 'required_if:siblings,yes',
            'siblings_email' => 'required_if:siblings,yes',
            'siblings_phone' => 'required_if:siblings,yes',
            'siblings_image' => 'required_if:siblings,yes|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
        ]);

        // Upload and store father image

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }
        if ($request->hasFile('father_image')) {
            $fatherImagePath = $request->file('father_image')->store('images', 'public');
            $jobApplication['father_image'] = $fatherImagePath;
        }

        if ($request->hasFile('mother_image')) {
            $motherImagepath = $request->file('mother_image')->store('images', 'public');
            $jobApplication['mother_image'] = $motherImagepath;
        }

        if ($request->hasFile('spouse_image ')) {
            $spouseImagepath = $request->file('spouse_image')->store('images', 'public');
            $jobApplication['spouse_image'] = $spouseImagepath;
        }
        if ($request->hasFile('siblings_image ')) {
            $siblingsImagepath = $request->file('siblings_image')->store('images', 'public');
            $jobApplication['siblings_image'] = $siblingsImagepath;
        }

        $jobApplication = JobApplication::create($jobApplication);

        return redirect()->route('card.view', ['job_application_id' => $jobApplication->id])->with('success', '  Job Application submitted successfully!');

    }

    // show

    public function edit($id)
    {
        $jobApplication = JobApplication::find($id);
        return view('career.job_application.create', compact('jobApplication'));
    }

    public function update($id, Request $request)
    {
        //dd($request->all());
        $data = $request->validate([
            'sector_id' => 'required',
            'position_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            'dob' => 'required|date',
            'age' => 'required|integer|min:18|max:99',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'alternative_phone' => [ 'regex:/^[0-9\s]+$/'],
            'email' => 'required|email',
            'fb_link' => 'required',
            'linked_link' => 'required',
            'instagram_link' => 'required',
            // permanent address
            'permanent_address_input' => 'required|in:yes,no',
            'permanent_city' => 'required_if:permanent_address_input,yes',
            'permanent_postal_code' => 'required_if:permanent_address_input,yes',
            'permanent_phone' => 'required_if:permanent_address_input,yes',
            'permanent_country' => 'required_if:permanent_address_input,yes',
            'permanent_address' => 'required_if:permanent_address_input,yes',
            // father name
            'father_name' => 'required',
            'father_date_of_birth' => 'required|date',
            'father_phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'father_image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            // mother name
            'mother_name' => 'required',
            'mother_date_of_birth' => 'required|date',
            'mother_phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'mother_image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            // maritalStatus
            'marital_status' => 'required|in:married,single',
            'spouse_name' => 'required_if:marital_status,married',
            'spouse_date_of_birth' => 'required_if:marital_status,married',
            'spouse_email' => 'required_if:marital_status,married',
            'spouse_phone' => 'required_if:marital_status,married',
            'spouse_image' => 'required_if:marital_status,married|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            'siblings' => 'required|in:yes,no',
            'siblings_name' => 'required_if:siblings,yes',
            'siblings_date_of_birth' => 'required_if:siblings,yes',
            'siblings_email' => 'required_if:siblings,yes',
            'siblings_phone' => 'required_if:siblings,yes',
            'siblings_image' => 'required_if:siblings,yes|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
        ]);

        // Upload and store father image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }
        if ($request->hasFile('father_image')) {
            $fatherImagePath = $request->file('father_image')->store('images', 'public');
            $data['father_image'] = $fatherImagePath;
        }

        if ($request->hasFile('mother_image')) {
            $motherImagepath = $request->file('mother_image')->store('images', 'public');
            $data['mother_image'] = $motherImagepath;
        }

        if ($request->hasFile('spouse_image ')) {
            $spouseImagepath = $request->file('spouse_image')->store('images', 'public');
            $data['spouse_image'] = $spouseImagepath;
        }
        if ($request->hasFile('siblings_image ')) {
            $siblingsImagepath = $request->file('siblings_image')->store('images', 'public');
            $data['siblings_image'] = $siblingsImagepath;
        }

        $jobApplication = JobApplication::find($id);
        $jobApplication = $jobApplication->fill($data);
        $jobApplication->save();

        return redirect()->route('card.view', ['job_application_id' => $jobApplication->id])->with('success', '  Job Application updated successfully!');
    }

    // show

    public function show($id)
    {
        $jobApplication = JobApplication::find($id);
        return view('career.job_application.show', compact('jobApplication'));
    }

    public function getCities(Request $request)
    {
        // Retrieve positions based on the selected sector
        $state_id = $request->input('state_id');

        // Query your database to get positions related to the selected sector
        $cities = City::where('state_id', $state_id)->pluck('name', 'id');

        return response()->json($cities);
    }

    public function showImagePreview($id)
{
    $jobApplication = JobApplication::find($id);

    return view('image-preview', ['jobApplication' => $jobApplication]);
}

}