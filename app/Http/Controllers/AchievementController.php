<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Disclaimer;
use App\Models\Employment;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class AchievementController extends Controller
{
    public function create()
    {
        return view('career.achievement.create');
    }
    public function store(Request $request)
    {
        $achievement = $request->validate([
            'job_application_id' => 'required',
            'achievement.*' => 'required',
            'conference_status' => 'required|in:yes,no',
            'conference.*' => 'required_if:conference_status,yes',
            'final_year_project_status' => 'required|in:yes,no',
            'final_year_project.*' => 'required_if:final_year_project_status,yes',
            'project_document' => 'required_if:final_year_project_status,yes|file|mimes:pdf,jpg,jpeg,png',
            'extra_curricular_skills' => 'required',
            'extra_curricular_skills_project_document' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'curriculum_status' => 'required|in:yes,no',
            'yes_curriculum_pdf_format' => 'required_if:curriculum_status,yes|file|mimes:pdf,jpg,jpeg,png',
            'background_check_status' => 'required|in:yes,no',
            'no_curriculum_explain' =>'required_if:background_check_status,no',
        ]);

        if ($request->hasFile('project_document')) {
            $projectDocumentPath = $request->file('project_document')->store('documents', 'public');
            $achievement['project_document'] = $projectDocumentPath;
        }

        if ($request->hasFile('extra_curricular_skills_project_document')) {
            $curricularSkillsDocumentPath = $request->file('extra_curricular_skills_project_document')->store('documents', 'public');
            $achievement['extra_curricular_skills_project_document'] = $curricularSkillsDocumentPath;
        }

        if ($request->hasFile('yes_curriculum_pdf_format')) {
            $resumeDocumentPath = $request->file('yes_curriculum_pdf_format')->store('documents', 'public');
            $achievement['yes_curriculum_pdf_format'] = $resumeDocumentPath;
        }
        $achievement['achievement'] = json_encode($achievement['achievement']);
        $achievement['conference'] = json_encode($achievement['conference']);
        $achievement['final_year_project'] = json_encode($achievement['final_year_project']);
        $achievement = Achievement::create($achievement);

        return redirect()->route('disclaimer.view', ['job_application_id' => $request->job_application_id, 'achievement_id' => $achievement->id ])->with('success', 'Achievements, Co-curricular, Extra-curricular Details created successfully!');
    }

    public function show($id)
    {
        $achievement = Achievement::find($id);

        return view('career.achievement.show', ['achievement' => $achievement]);
    }
    public function edit($id)
    {
        $achievement = Achievement::find($id);

        $employment = Employment::where('job_application_id', $achievement->job_application_id)->orderBy('id', 'desc')->first();

        return view('career.achievement.create', ['achievement' => $achievement, 'employment_id' => $employment->id]);
    }

    public function update($id, Request $request)
    {
        $rules = [
            'job_application_id' => 'required',
            'achievement.*' => 'required',
            'conference_status' => 'required|in:yes,no',
            'conference.*' => 'required_if:conference_status,yes',
            'final_year_project_status' => 'required|in:yes,no',
            'final_year_project.*' => 'required_if:final_year_project_status,yes',
            'extra_curricular_skills' => 'required',
            'curriculum_status' => 'required|in:yes,no',
            'background_check_status' => 'required|in:yes,no',
            'no_curriculum_explain' =>'required_if:background_check_status,no',
        ];

        if ($request->hasFile('project_document')) {
            $rules['project_document'] = 'required_if:final_year_project_status,yes|file|mimes:pdf,jpg,jpeg,png';
        }
        if ($request->hasFile('extra_curricular_skills_project_document')) {
            $rules['extra_curricular_skills_project_document'] = 'required|file|mimes:pdf,jpg,jpeg,png';
        }
        if ($request->hasFile('yes_curriculum_pdf_format')) {
            $rules['yes_curriculum_pdf_format'] = 'required_if:curriculum_status,yes|file|mimes:pdf,jpg,jpeg,png';
        }

        $data = $request->validate($rules);

        if ($request->hasFile('project_document')) {
            $projectDocumentPath = $request->file('project_document')->store('documents', 'public');
            $data['project_document'] = $projectDocumentPath;
        }

        if ($request->hasFile('extra_curricular_skills_project_document')) {
            $curricularSkillsDocumentPath = $request->file('extra_curricular_skills_project_document')->store('documents', 'public');
            $data['extra_curricular_skills_project_document'] = $curricularSkillsDocumentPath;
        }

        if ($request->hasFile('yes_curriculum_pdf_format')) {
            $resumeDocumentPath = $request->file('yes_curriculum_pdf_format')->store('documents', 'public');
            $data['yes_curriculum_pdf_format'] = $resumeDocumentPath;
        }
        $achievement = Achievement::find($id);
        $achievement->fill($data);
        $achievement->save();

        $disclaimer = Disclaimer::where('job_application_id', $achievement->job_application_id)->orderBy('id', 'desc')->first();

        if (!is_null($disclaimer)) {
            return redirect()->route('career.disclaimer.edit', $disclaimer->id)->with('success', 'Achievements, Co-curricular, Extra-curricular Details updated successfully!');
        }
        else {
            return redirect()->route('disclaimer.view', ['job_application_id' => $achievement->job_application_id, 'achievement_id' => $achievement->id])
                ->with('success', 'Achievements, Co-curricular, Extra-curricular Details updated successfully!');
        }
    }
}
