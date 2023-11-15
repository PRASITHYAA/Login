<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTitle;
use App\Models\CourseLevel;
use Illuminate\Support\Facades\Session;


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
        //dd($request->all());
        $validatedData = $request->validate([
            'sector_id' => 'required|integer',
            'course_level_id' => 'required|string',
            'name' => 'required|string',
            'course_code' => 'required|string',
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

    public function edit($id)
    {
        $courseTitle = CourseTitle::find($id);
        return view('course_title.edit',  compact('courseTitle'));
    }

    public function update($id, Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'sector_id' => 'required|integer',
            'course_level_id' => 'required|string',
            'name' => 'required|string',
            'course_code' => 'required|string',
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

        $courseTitle = CourseTitle::find($id);
        $courseTitle->fill($validatedData);
        $courseTitle->save();
        session()->flash('success', 'Course Title updated successfully!');
        return redirect()->route('course_title.index');
    }

    public function destroy(CourseTitle $courseTitle)  // Update model name
    {
        $courseTitle->delete();

        Session::flash('success', 'Course Title deleted successfully!');

        return redirect()->route('course_title.index');
    }


    public function getCourseTitles(Request $request)
    {
        // Retrieve positions based on the selected sector
        $course_level_id = $request->input('course_level_id');

        // Query your database to get positions related to the selected sector
        $courseTitles = CourseTitle::where('course_level_id', $course_level_id)->pluck('name', 'id');

        return response()->json($courseTitles);
    }
}
