<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::all();
        return view('sector.index', compact('sectors'));
    }

    public function create()
    {
        return view('sector.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'sector' => 'required',
        ]);

        Sector::create($validatedData);

        Session::flash('success', 'Sector created successfully!');

        return redirect()->route('sector.index');
    }

    public function edit(Sector $sector)
    {
        return view('sector.edit', compact('sector'));
    }

    public function update(Request $request, Sector $sector)
    {
        $validatedData = $request->validate([
            'sector' => 'required',
        ]);

        $sector->update($validatedData);

        Session::flash('success', 'Sector updated successfully!');

        return redirect()->route('sector.index');
    }

    public function destroy(Sector $sector)
    {
        $sector->delete();

        Session::flash('success', 'Sector deleted successfully!');

        return redirect()->route('sector.index');
    }
    public function show()
    {
        $sectors = Sector::all();
        return view('sector.show', ['sectors' => $sectors]);
    }
    }