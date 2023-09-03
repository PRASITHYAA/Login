<?php

namespace App\Http\Controllers;

use App\Models\Position;
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
        return view('position.create'); // Update view name
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'position' => 'required',
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
            'position' => 'required',
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
}
