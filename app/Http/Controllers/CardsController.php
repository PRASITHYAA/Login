<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
        $card = Card::all();
    }

    public function store(Request $request)
    {
         //dd($request->all());

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
            $cardData['aadhar_image'] = $aadharImagePath;
        }

        if ($request->hasFile('aadhar_image_page')) {
            $aadharImagePagePath = $request->file('aadhar_image_page')->store('images', 'public');
            $cardData['aadhar_image_page'] = $aadharImagePagePath;
        }

        if ($request->hasFile('passport_image_id')) {
            $passportImageIdPath = $request->file('passport_image_id')->store('images', 'public');
            $cardData['passport_image_id'] = $passportImageIdPath;
        }

        if ($request->hasFile('passport_image_id_page')) {
            $passportImageIdPagePath = $request->file('passport_image_id_page')->store('images', 'public');
            $cardData['passport_image_id_page'] = $passportImageIdPagePath;
        }

        Card::create($card);

        return redirect()->route('education.view', ['id' => $request->job_application_id])->with('success', 'Card created successfully!');
    }
}