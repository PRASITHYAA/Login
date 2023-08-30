<?php

namespace App\Http\Controllers;

use App\Models\Disclaimer;
use Illuminate\Http\Request;

class DisclaimerController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());

        $disclaimer = $request->validate([
            'expected_date_to_join' => 'required|date',
            'current_salary' => 'required|numeric',
            'expected_salary' => 'required|numeric',
            'disclaimer_signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'disclaimer_date' => 'required',
            'disclaimer_time' => 'required',
            'disclamer_print_name' => 'required',
            'disclaimer_place' => 'required',


        ]);

        if ($request->hasFile('Signature')) {
            $signatureImagePath = $request->file('Signature')->store('images', 'public');
            $disclaimer['Signature'] = $signatureImagePath;
        }

        Disclaimer::create($disclaimer);

        return redirect()->back()->with('success', 'Disclaimer submitted successfully!');
    }

}
