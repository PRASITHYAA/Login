<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTitle;
use App\Models\CourseLevel;


class CourseTitleController extends Controller
{
    public function index()
    {
        $coursetitles = CourseTitle::all();

        return view('course_title.index', compact('coursetitles'));
    }

    public function create()
    {
        $courselevels = CourseLevel::all();
    return view('course_title.create')->with('courselevels', $courselevels);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sector_id' => 'required|integer',
            'course_level' => 'required|string',
            'name' => 'required|string',
            'course_Code' => 'required|string',
            'from_date' => 'required|date',
            'to_date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'duration' => 'required|integer',
            'course_location' => 'required|string',
            'course_registration_fee' => 'required|string',
            'course_description' => 'required|string',
            'course_training_schedule' => 'required|string',
            'eligible_to_participate' => 'required|string',
        ]);

        $courseTitle = CourseTitle::create($validatedData);
        session()->flash('success', 'Course Title created successfully!');
        return redirect()->route('course_title.index');
    }

}