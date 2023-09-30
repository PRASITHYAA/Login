<?php

namespace App\Http\Controllers;

use App\Mail\JobSubmission;
use App\Models\Card;
use App\Models\City;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class JobApplicationController extends Controller
{
    public function index()
    {
        $jobApplications = JobApplication::all();  // Fetch all job applications

        return view('Career.job_application.index', ['jobApplications' => $jobApplications]);
    }

    public function create()
    {
        return view('career.job_application.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validations = Validator::make($request->all(), [
            'sector_id' => 'required',
            'position_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:100 ',
            'dob' => 'required|date',
            'age' => 'required|integer|min:18|max:99',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'alternative_phone' => ['nullable', 'regex:/^[0-9\s]+$/'],
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
            'father_image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:100',
            // mother name
            'mother_name' => 'required',
            'mother_date_of_birth' => 'required|date',
            'mother_phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'mother_image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:100',
            // maritalStatus
            'marital_status' => 'required|in:married,single',
            'spouse_name' => 'required_if:marital_status,married',
            'spouse_date_of_birth' => 'required_if:marital_status,married',
            'spouse_email' => 'required_if:marital_status,married',
            'spouse_phone' => 'required_if:marital_status,married',
            'spouse_image' => 'required_if:marital_status,married|image|mimes:jpg,jpeg,png,gif,bmp|max:100',
            'siblings' => 'required|in:yes,no',
            'siblings_name.*' => 'required_if:siblings,yes',
            'siblings_date_of_birth.*' => 'required_if:siblings,yes',
            'siblings_email.*' => 'required_if:siblings,yes',
            'siblings_phone.*' => 'required_if:siblings,yes',
            'siblings_image.*' => 'required_if:siblings,yes|image|mimes:jpg,jpeg,png,gif,bmp|max:100',
        ]);
        $data = $request->all();
        //dd($validations->errors(),$data);
        // Upload and store father image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }
        if ($request->hasFile('father_image')) {
            $fatherImagePath = $request->file('father_image')->store('images', 'public');
            $data['father_image'] = $fatherImagePath;
        }

        if ($request->hasFile('mother_image')) {
            $motherImagepath = $request->file('mother_image')->store('images', 'public');
            $data['mother_image'] = $motherImagepath;
        }

        if ($request->hasFile('spouse_image')) {
            $spouseImagepath = $request->file('spouse_image')->store('images', 'public');
            $data['spouse_image'] = $spouseImagepath;
        }
        $data['user_id'] =  auth()->user()->id;
        $jobApplication = JobApplication::create($data);

        if($request->has('siblings_name')) {
            foreach ($request->siblings_name as $key => $sibling) {
                if(!is_null($sibling)) {
                    if (isset($request->file('siblings_image')[$key])) {
                        $siblingsImagepath = $request->file('siblings_image')[$key]->store('images', 'public');
                        $siblingImage = $siblingsImagepath;
                    }
                    $jobApplication->siblingsList()->create([
                        'name' => $request->siblings_name[$key],
                        'dob' => $request->siblings_date_of_birth[$key],
                        'email' => $request->siblings_email[$key],
                        'phone' => $request->siblings_phone[$key],
                        'photo' => $siblingImage ?? null,
                    ]);
                }
            }
        }

        return redirect()->route('card.view', ['job_application_id' => $jobApplication->id])->with('success', '  Job Application submitted successfully!');
    }

    // show

    public function edit($id)
    {
        $jobApplication = JobApplication::find($id);
        $emailData['first_name'] = $jobApplication->first_name;
        $emailData['last_name'] = $jobApplication->last_name;
        $emailData['sector'] = $jobApplication->sector->name;
        $emailData['position'] = $jobApplication->position->name;
        Mail::to(env('EMAIL_TO', $jobApplication->email))->send(new JobSubmission($emailData));
        return view('career.job_application.create', compact('jobApplication'));
    }

    public function update($id, Request $request)
    {
        //dd($request->all());
        $rules = [
            'sector_id' => 'required',
            'position_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|date',
            'age' => 'required|integer|min:18|max:99',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'alternative_phone' => ['nullable', 'regex:/^[0-9\s]+$/'],
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
            // mother name
            'mother_name' => 'required',
            'mother_date_of_birth' => 'required|date',
            'mother_phone' => ['required', 'regex:/^[0-9\s]+$/'],
            // maritalStatus
            'marital_status' => 'required|in:married,single',
            'spouse_name' => 'required_if:marital_status,married',
            'spouse_date_of_birth' => 'required_if:marital_status,married',
            'spouse_email' => 'required_if:marital_status,married',
            'spouse_phone' => 'required_if:marital_status,married',
            'siblings' => 'required|in:yes,no',
            'siblings_name.*' => 'required_if:siblings,yes',
            'siblings_date_of_birth.*' => 'required_if:siblings,yes',
            'siblings_email.*' => 'required_if:siblings,yes',
            'siblings_phone.*' => 'required_if:siblings,yes',
        ];
        if ($request->hasFile('image')) {
            $rules['image'] = 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:100';
        }
        if ($request->hasFile('father_image')) {
            $rules['father_image'] = 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:100';
        }
        if ($request->hasFile('mother_image')) {
            $rules['mother_image'] = 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:100';
        }
        if ($request->hasFile('spouse_image')) {
            $rules['spouse_image'] = 'required_if:marital_status,married|image|mimes:jpg,jpeg,png,gif,bmp|max:100';
        }
        if ($request->hasFile('siblings_image')) {
            $rules['siblings_image.*'] = 'required_if:siblings,yes|image|mimes:jpg,jpeg,png,gif,bmp|max:100';
        }
        $data = $request->validate($rules);

        // Upload and store father image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }
        if ($request->hasFile('father_image')) {
            $fatherImagePath = $request->file('father_image')->store('images', 'public');
            $data['father_image'] = $fatherImagePath;
        }

        if ($request->hasFile('mother_image')) {
            $motherImagepath = $request->file('mother_image')->store('images', 'public');
            $data['mother_image'] = $motherImagepath;
        }

        if ($request->hasFile('spouse_image')) {
            $spouseImagePath = $request->file('spouse_image')->store('images', 'public');
            $data['spouse_image'] = $spouseImagePath;
        }

        if($request->marital_status == 'single') {
            $data['spouse_name'] = null;
            $data['spouse_date_of_birth'] = null;
            $data['spouse_email'] = null;
            $data['spouse_phone'] = null;
            $data['spouse_image'] = null;
        }

        $jobApplication = JobApplication::find($id);
        $jobApplication = $jobApplication->fill($data);
        $jobApplication->save();
        if($request->has('siblings_name') && $request->siblings == 'yes') {
            foreach ($request->siblings_name as $key => $sibling) {
                if(!is_null($sibling)) {
                    if (isset($request->file('siblings_image')[$key])) {
                        $siblingsImagepath = $request->file('siblings_image')[$key]->store('images', 'public');
                        $siblingImage = $siblingsImagepath;
                    }
                    $jobApplication->siblingsList()->create([
                        'name' => $request->siblings_name[$key],
                        'dob' => $request->siblings_date_of_birth[$key],
                        'email' => $request->siblings_email[$key],
                        'phone' => $request->siblings_phone[$key],
                        'photo' => $siblingImage ?? $request->siblings_image_old[$key],
                    ]);
                }
            }
        } else if($request->siblings == 'no') {
            $jobApplication->siblingsList()->delete();
        }

        $card = Card::where('job_application_id', $id)->orderBy('id', 'desc')->first();

        if (!is_null($card)) {
            return redirect()->route('career.card.edit', $card->id)->with('success', 'Card updated successfully!');
        } else {
            return redirect()->route('card.view', ['job_application_id' => $jobApplication->id])
                ->with('success', 'Job Application updated successfully!');
        }
    }

    // show

    public function show($id)
    {
        $jobApplication = JobApplication::find($id);
        return view('Career.job_application.show', compact('jobApplication'));
    }

    public function getCities(Request $request)
    {
        // Retrieve positions based on the selected sector
        $state_id = $request->input('state_id');

        // Query your database to get positions related to the selected sector
        $cities = City::where('state_id', $state_id)->pluck('name', 'id');

        return response()->json($cities);
    }
    public function destroy($id)
    {
        $jobApplication = JobApplication::find($id);

        if (!$jobApplication) {
            return redirect()->route('Career.job_application.index')->with('error', 'Form not found.');
        }

        $jobApplication->delete();

        return redirect()->route('Career.job_application.index')->with('success', 'Form deleted successfully!');
    }
}
