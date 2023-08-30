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
            'Expectedatetojoin' => 'required|date',
            'CurrentSalary' => 'required|numeric',
            'ExpectedSalary' => 'required|numeric',
            'Signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'place' => 'required',
        ]);

        if ($request->hasFile('Signature')) {
            $signatureImagePath = $request->file('Signature')->store('images', 'public');
            $disclaimer['Signature'] = $signatureImagePath;
        }

        Disclaimer::create($disclaimer);

        return redirect()->back()->with('success', 'Disclaimer submitted successfully!');
    }

}