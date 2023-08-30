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
           'aadharname' => 'required',
           'aadharidnumber' => 'required',
           'aadharissuedplace' => 'required',
           'aadharissuedstate' => 'required',
           'aadharissuedcountry' => 'required',
           'aadharimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           'aadharimagepage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //    passport
        'passportname' => 'required',
            'passportidnumber' => 'required',
            'passportexpireddate' => 'required',
            'paasportissueddate' => 'required',
            'passportissuedplace' => 'required',
            'passportissuedstate' => 'required',
            'passportissuedcountry' => 'required',
            'passportimageid' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'passportimageidpage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('aadharImage')) {
            $aadharImagePath = $request->file('aadharImage')->store('images', 'public');
            $card['aadharImage'] = $aadharImagePath;
        }
        if ($request->hasFile('aadharimagepage')) {
            $aadharImagePagePath = $request->file('aadharimagepage')->store('images', 'public');
            $card['aadharimagepage'] = $aadharImagePagePath;
        }
        if ($request->hasFile('passportimageid')) {
            $passportImageIdPath = $request->file('passportimageid')->store('images', 'public');
            $card['passportimageid'] = $passportImageIdPath;
        }

        if ($request->hasFile('passportimageidpage')) {
            $passportImageIdPagePath = $request->file('passportimageidpage')->store('images', 'public');
            $card['passportimageidpage'] = $passportImageIdPagePath;
        }

        Card::create($card);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function edit(Card $card)
    {
        $card = Card::all();

        return view('Career.card.edit', compact('card'));
    }

    public function update(Request $request, Card $card)
    {
        $updatedValidation = $request->validate([
            'aadharname' => 'required',
            'aadharidnumber' => 'required',
            'aadharissuedplace' => 'required',
            'aadharissuedstate' => 'required',
            'aadharissuedcountry' => 'required',
            'aadharimage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'aadharimagepage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'passportname' => 'required',
            'passportidnumber' => 'required',
            'passportexpireddate' => 'required',
            'paasportissueddate' => 'required',
            'passportissuedplace' => 'required',
            'passportissuedstate' => 'required',
            'passportissuedcountry' => 'required',
            'passportimageid' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'passportimageidpage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update images if provided
        if ($request->hasFile('aadharimage')) {
            if ($card->aadharImage) {
                Storage::disk('public')->delete($card->aadharImage);
            }
            $aadharImagePath = $request->file('aadharimage')->store('images', 'public');
            $card->aadharImage = $aadharImagePath;
        }

        if ($request->hasFile('aadharimagepage')) {
            if ($card->aadharimagepage) {
                Storage::disk('public')->delete($card->aadharimagepage);
            }
            $aadharImagePagePath = $request->file('aadharimagepage')->store('images', 'public');
            $card->aadharimagepage = $aadharImagePagePath;
        }

        if ($request->hasFile('passportimageid')) {
            if ($card->passportimageid) {
                Storage::disk('public')->delete($card->passportimageid);
            }
            $passportImageIdPath = $request->file('passportimageid')->store('images', 'public');
            $card->passportimageid = $passportImageIdPath;
        }

        if ($request->hasFile('passportimageidpage')) {
            if ($card->passportimageidpage) {
                Storage::disk('public')->delete($card->passportimageidpage);
            }
            $passportImageIdPagePath = $request->file('passportimageidpage')->store('images', 'public');
            $card->passportimageidpage = $passportImageIdPagePath;
        }
        $card->update($validatedData);

        return redirect()->route('cards.create')->with('success', 'Card updated successfully!');
    }
}