<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all(); // Update variable name
        return view('job.index', compact('jobs')); // Update view name
    }

    public function create()
    {
        return view('job.create'); // Update view name
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'job' => 'required',
        ]);

        Job::create($validatedData);

        Session::flash('success', 'Job created successfully!');

        return redirect()->route('job.index');
    }

    public function edit(Job $job) // Update model name
    {
        return view('job.edit', compact('job'));
    }

    public function update(Request $request, Job $job) // Update model name
    {
        $validatedData = $request->validate([
            'job' => 'required',
        ]);

        $job->update($validatedData);

        Session::flash('success', 'Job updated successfully!');

        return redirect()->route('job.index');
    }

    public function destroy(Job $job) // Update model name
    {
        $job->delete();

        Session::flash('success', 'Job deleted successfully!');

        return redirect()->route('job.index');
    }
}