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
        // dd($request->all());

        $card = $request->validate([
            // aadhar
            'aadhar_name' => 'required',
            'aadhar_id_number' => 'required',
            'aadhar_issued_country' => 'required',
            'aadhar_issued_state' => 'required',
            'aadhar_issued_place' => 'required',
            'aadhar_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'aadhar_image_page' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // passport
            'passport_name' => 'required',
            'passport_id_number' => 'required',
            'paasport_issue_date' => 'required',
            'passport_expired_date' => 'required',
            'passport_issued_country' => 'required',
            'passport_issued_state' => 'required',
            'passport_issued_place' => 'required',
            'passport_image_id' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'passport_image_id_page' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('aadharimage')) {
            $aadharImagePath = $request->file('aadharimage')->store('images', 'public');
            $card->aadharImage = $aadharImagePath;
        }

        if ($request->hasFile('aadharimagepage')) {
            $aadharImagePagePath = $request->file('aadharimagepage')->store('images', 'public');
            $card->aadharimagepage = $aadharImagePagePath;
        }

        if ($request->hasFile('passportimageid')) {
            $passportImageIdPath = $request->file('passportimageid')->store('images', 'public');
            $card->passportimageid = $passportImageIdPath;
        }

        if ($request->hasFile('passportimageidpage')) {
            $passportImageIdPagePath = $request->file('passportimageidpage')->store('images', 'public');
            $card->passportimageidpage = $passportImageIdPagePath;
        }

        Card::create($card);

        return redirect()->route('cards.create')->with('success', 'Card created successfully!');
    }
}
