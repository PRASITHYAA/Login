<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class AchievementController extends Controller
{
    public function store(Request $request)
    {
        $achievement = $request->validate([
            'job_application_id' => 'required',
            'achievement' => 'required',
            'open-input' => 'required|in:yes,no',
            'Conference' => 'required_if:open-input,yes',
            'open-input-2' => 'required|in:yes,no',
            'final_year_project' => 'required_if:open-input-2,yes',
            'project_document' => 'required_if:open-input-2,yes|file|mimes:pdf,jpg,jpeg,png',
            'extra_curricular_skills' => 'required',
            'extra_curricular_skills_project_document' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'open-input-3' => 'required|in:yes,no',
            'yes_curriculum_pdf_format' => 'required_if:open-input-3,yes|file|mimes:pdf,jpg,jpeg,png',
            'open-input-4' => 'required|in:yes,no',
            'no_curriculum_explain' =>'required_if:open-input-4,no',
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
        Achievement::create($achievement);

        return redirect()->route('disclaimer.view', ['id' => $request->job_application_id])->with('success', 'Achievement created successfully!');
    }
}
