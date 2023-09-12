<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Card;
use App\Models\Disclaimer;
use App\Models\Education;
use App\Models\Employment;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DisclaimerController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());

        $disclaimer = $request->validate([
            'job_application_id' => 'required',
            'expected_date_to_join' => 'required|date',
            'current_salary' => 'required|numeric',
            'expected_salary' => 'required|numeric',
            'disclaimer_signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'disclaimer_date' => 'required',
            'disclaimer_time' => 'required',
            'disclaimer_print_name' => 'required',
            'disclaimer_place' => 'required',


        ]);

        if ($request->hasFile('Signature')) {
            $signatureImagePath = $request->file('Signature')->store('images', 'public');
            $disclaimer['Signature'] = $signatureImagePath;
        }

        Disclaimer::create($disclaimer);

        return redirect()->route('acknowledgement', ['job_application_id' => $request->job_application_id])->with('success', ' Disclaimer And All The Forms Are created successfully');
    }

    public function acknowledgement(Request $request)
    {
        $data = JobApplication::find($request->job_application_id);
        return view('career.acknowledgement.view', compact('data'));
    }

    public function downloadPdf(Request $request)
     {
     $application = JobApplication::find($request->job_application_id);
        $data = $application->toArray();
     $disclaimer = Disclaimer::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($disclaimer,$data);
        $education = Education::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($education,$data);
        $card = Card::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($card,$data);
        $achievement = Achievement::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($achievement,$data);
        $employment = Employment::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($employment,$data);
        $pdf = Pdf::loadView('pdf.application', $data);
        return $pdf->download('job_application_'.$application->first_name.'.pdf');
    }
}