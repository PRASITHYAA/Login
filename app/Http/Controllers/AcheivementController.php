<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcheivementRequest;
use App\Models\Acheivement;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator; // Import the Validator class

class AcheivementController extends Controller
{
    public function store(AcheivementRequest $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'acheivements' => 'required',
            'open-input' => 'sometimes|nullable|required|in:yes,no',
            'Conference' => 'sometimes|nullable|required_if:open-input,yes',

            'open-input-2' => 'required|in:yes,no',
            'finalyearproject' => 'sometimes|nullable|required_if:open-input-2,yes',
            'projectdocument' => 'sometimes|nullable|required_if:open-input-2,yes|file|mimes:pdf',

            'curricularskills' => 'required',
            'curricularskillsprojectdocument' => 'required|file|mimes:pdf',

            'open-input-3' => 'required|in:yes,no',
            'resumepfdformate' => 'sometimes|nullable|required_if:open-input-3,yes|file|mimes:pdf',

            'open-input-4' => 'required|in:yes,no',
            'exampletextarea' => 'sometimes|nullable|required_unless:open-input-4,no',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $validatedData = $validator->validated(); // Get the validated data

        if ($request->hasFile('projectdocument')) {
            $projectDocumentPath = $request->file('projectdocument')->store('documents', 'public');
            $validatedData['projectdocument'] = $projectDocumentPath;
        }

        if ($request->hasFile('curricularskillsprojectdocument')) {
            $curricularSkillsDocumentPath = $request->file('curricularskillsprojectdocument')->store('documents', 'public');
            $validatedData['curricularskillsprojectdocument'] = $curricularSkillsDocumentPath;
        }

        if ($request->hasFile('resumepfdformate')) {
            $resumeDocumentPath = $request->file('resumepfdformate')->store('documents', 'public');
            $validatedData['resumepfdformate'] = $resumeDocumentPath;
        }

        Acheivement::create($validatedData);

        return redirect()->back()->with('success', 'Achievement submitted successfully!');
    }
}