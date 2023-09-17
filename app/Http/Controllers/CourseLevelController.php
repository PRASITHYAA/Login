<?php

namespace App\Http\Controllers;

use App\Models\CourseLevel;
use Illuminate\Http\Request;

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
            'name' => 'required',
        ]);

        CourseLevel::create($validatedData);

        session()->flash('success', 'Course Level created successfully!');

        return redirect()->route('course_level.index');
    }

}
