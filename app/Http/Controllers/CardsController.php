<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CardsController extends Controller
{
    public function index()
    {
        $card = Card::all();
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $jobApplication = JobApplication::find($request->input('job_application_id'));
        $card = $request->validate([
            'job_application_id' => 'required',
            'identity_type' => 'required|in:aadhar,passport',
            // aadhar
            'aadhar_name' => 'required_if:identity_type,aadhar',
            'aadhar_id_number' => 'required_if:identity_type,aadhar',
            'aadhar_issued_country' => 'required_if:identity_type,aadhar',
            'aadhar_issued_state' => 'required_if:identity_type,aadhar',
            'aadhar_issued_place' => 'required_if:identity_type,aadhar',
            'aadhar_image' => 'required_if:identity_type,aadhar|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'aadhar_image_page' => 'required_if:identity_type,aadhar|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // passport
            'passport_name' => 'required_if:identity_type,passport',
            'passport_id_number' => 'required_if:identity_type,passport',
            'passport_issue_date' => 'required_if:identity_type,passport',
            'passport_expired_date' => 'required_if:identity_type,passport',
            'passport_issued_country' => 'required_if:identity_type,passport',
            'passport_issued_state' => 'required_if:identity_type,passport',
            'passport_issued_place' => 'required_if:identity_type,passport',
            'passport_image_id' => 'required_if:identity_type,passport|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'passport_image_id_page' => 'required_if:identity_type,passport|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('aadhar_image')) {
            $aadharImagePath = $request->file('aadhar_image')->store('images', 'public');
            $card['aadhar_image'] = $aadharImagePath;
        }

        if ($request->hasFile('aadhar_image_page')) {
            $aadharImagePagePath = $request->file('aadhar_image_page')->store('images', 'public');
            $card['aadhar_image_page'] = $aadharImagePagePath;
        }

        if ($request->hasFile('passport_image_id')) {
            $passportImageIdPath = $request->file('passport_image_id')->store('images', 'public');
            $card['passport_image_id'] = $passportImageIdPath;
        }

        if ($request->hasFile('passport_image_id_page')) {
            $passportImageIdPagePath = $request->file('passport_image_id_page')->store('images', 'public');
            $card['passport_image_id_page'] = $passportImageIdPagePath;
        }

        Card::create($card);
        return redirect()->route('education.view', ['job_application_id' => $jobApplication->id])->with('success', ' Card submitted successfully!');
    }

    public function show($id)
    {
        $jobApplication = JobApplication::find($id);

        return view('career.card.show', ['jobApplication' => $jobApplication]);
    }

    public function edit($id)
    {
        $jobApplication = JobApplication::find($id);
        $card = Card::where('job_application_id', $id)->first();

        return view('career.card.create', [
            'jobApplication' => $jobApplication,
            'card' => $card,
        ]);
    }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            'job_application_id' => 'required',
            'identity_type' => 'required|in:aadhar,passport',
            // aadhar
            'aadhar_name' => 'required_if:identity_type,aadhar',
            'aadhar_id_number' => 'required_if:identity_type,aadhar',
            'aadhar_issued_country' => 'required_if:identity_type,aadhar',
            'aadhar_issued_state' => 'required_if:identity_type,aadhar',
            'aadhar_issued_place' => 'required_if:identity_type,aadhar',
            'aadhar_image' => 'required_if:identity_type,aadhar|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'aadhar_image_page' => 'required_if:identity_type,aadhar|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // passport
            'passport_name' => 'required_if:identity_type,passport',
            'passport_id_number' => 'required_if:identity_type,passport',
            'passport_issue_date' => 'required_if:identity_type,passport',
            'passport_expired_date' => 'required_if:identity_type,passport',
            'passport_issued_country' => 'required_if:identity_type,passport',
            'passport_issued_state' => 'required_if:identity_type,passport',
            'passport_issued_place' => 'required_if:identity_type,passport',
            'passport_image_id' => 'required_if:identity_type,passport|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'passport_image_id_page' => 'required_if:identity_type,passport|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('aadhar_image')) {
            $aadharImagePath = $request->file('aadhar_image')->store('images', 'public');
            $card->aadhar_image = $aadharImagePath;
        }

        if ($request->hasFile('aadhar_image_page')) {
            $aadharImagePagePath = $request->file('aadhar_image_page')->store('images', 'public');
            $card->aadhar_image_page = $aadharImagePagePath;
        }

        if ($request->hasFile('passport_image_id')) {
            $passportImageIdPath = $request->file('passport_image_id')->store('images', 'public');
            $card->passport_image_id = $passportImageIdPath;
        }

        if ($request->hasFile('passport_image_id_page')) {
            $passportImageIdPagePath = $request->file('passport_image_id_page')->store('images', 'public');
            $card->passport_image_id_page = $passportImageIdPagePath;
        }

        $card = Card::find($id);
        $card = $card->fill($data);
        $card->save();

        return Redirect::route('education.view', ['job_application_id' => $jobApplication->id])
            ->with('success', 'Card created successfully!');
    }
}