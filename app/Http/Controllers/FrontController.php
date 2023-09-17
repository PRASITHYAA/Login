<?php

namespace App\Http\Controllers;

use App\Models\CourseTitle;
use App\Models\JobApplication;
use App\Models\Training;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function userCareers()
    {
        $jobApplications = JobApplication::all();
        return view('user_careers_list',  compact('jobApplications'));
    }

    public function userTrainings()
    {
        $trainings = Training::all();
        return view('user_trainings_list',  compact('trainings'));
    }
}
