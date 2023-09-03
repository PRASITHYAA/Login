<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::all(); // Update variable name
        return view('position.index', compact('positions')); // Update view name
    }

    public function create()
    {
        $sectors = Sector::all();
        return view('position.create', compact('sectors')); // Update view name
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sector_id' => 'required',
            'name' => 'required',
        ]);

        Position::create($validatedData);

        Session::flash('success', 'Position created successfully!');

        return redirect()->route('position.index');
    }

    public function edit(Position $position) // Update model name
    {
        return view('position.edit', compact('position'));
    }

    public function update(Request $request, Position $position) // Update model name
    {
        $validatedData = $request->validate([
            'sector_id' => 'required',
            'name' => 'required',
        ]);

        $position->update($validatedData);

        Session::flash('success', 'Position updated successfully!');

        return redirect()->route('position.index');
    }

    public function destroy(Position $position) // Update model name
    {
        $position->delete();

        Session::flash('success', 'Position deleted successfully!');

        return redirect()->route('position.index');
    }

    public function getPositions(Request $request) {
        // Retrieve positions based on the selected sector
        $sector = $request->input('sector');

        // Query your database to get positions related to the selected sector
        $positions = Position::where('sector_id', $sector)->pluck('name', 'id');

        return response()->json($positions);
    }

}
