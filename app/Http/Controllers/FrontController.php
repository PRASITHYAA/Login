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
        $jobApplications = new JobApplication;
        if (auth()->user()->hasRole('User')) {
            $jobApplications = $jobApplications->where('user_id', auth()->user()->id);
        }
        $jobApplications = $jobApplications->orderBy('id', 'desc')->get();
        return view('user_careers_list', compact('jobApplications'));
    }

    public function userTrainings()
    {
        $trainings = new Training;
        if (auth()->user()->hasRole('User')) {
            $trainings = $trainings->where('user_id', auth()->user()->id);
        }
        $trainings = $trainings->orderBy('id', 'desc')->get();
        return view('user_trainings_list', compact('trainings'));
    }
}
