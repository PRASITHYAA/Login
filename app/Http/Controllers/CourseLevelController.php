<?php

namespace App\Http\Controllers;

use App\Models\CourseLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseLevelController extends Controller
{
    public function index()
    {
        $courselevels = CourseLevel::all();
        return view('course_level.index', compact('courselevels'));
    }

    public function create()
    {
        return view('course_level.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sector_id' => 'required',
            'name' => 'required',
        ]);

        CourseLevel::create($validatedData);

        session()->flash('success', 'Course Level created successfully!');

        return redirect()->route('course_level.index');
    }

    public function edit(CourseLevel $courseLevel)  // Update model name
    {
        return view('course_level.edit', compact('courseLevel'));
    }

    public function update(Request $request, CourseLevel $courseLevel)  // Update model name
    {
        $validatedData = $request->validate([
            'sector_id' => 'required',
            'name' => 'required'
        ]);

        $courseLevel->update($validatedData);

        Session::flash('success', 'Course Level updated successfully!');

        return redirect()->route('course_level.index');
    }

    public function destroy(CourseLevel $courseLevel)  // Update model name
    {
        try {
            $courseLevel->delete();
            Session::flash('success', 'Course Level deleted successfully!');
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
        }
        return redirect()->route('course_level.index');
    }

    public function getCourseLevels(Request $request)
    {
        // Retrieve positions based on the selected sector
        $sector = $request->input('sector');

        // Query your database to get positions related to the selected sector
        $courseLevels = CourseLevel::where('sector_id', $sector)->pluck('name', 'id');

        return response()->json($courseLevels);
    }
}
