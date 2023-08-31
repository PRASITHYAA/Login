<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());

        $education = $request->validate(
            [
            'job_application_id' => 'required',
            'highschoolname' => 'required|string',
            'highschoolcity' => 'required|string',
            'highschooladdress' => 'required|string',
            'highschoolformdate' => 'required|date',
            'highschooltodate' => 'required|date',
            'highschoolYearofPassing' => 'required|date',
            'highschoolgpapercentage' => 'required|numeric|between:0,100',
            'highschoolclass' => 'required|string',
            'highschoolimagecertificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'highschoolimagemarksheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            // Higher
            'highersecondaryinstitutionname' => 'required|string',
            'highersecondarycity' => 'required|string',
            'highersecondaryaddress' => 'required|string',
            'highersecondaryformdate' => 'required|date',
            'highersecondarytodate' => 'required|date',
            'highersecondaryyearofpassing' => 'required|date',
            'highersecondarygpapercentage' => 'required|numeric|between:0,100',
            'highersecondaryclass' => 'required|string',
            'highersecondarystream' => 'required|string',
            'highersecondaryfiledofinterest' => 'required|string',
            'highersecondaryimagecertificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'highersecondaryimagemarksheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

          'diplomainstitutionname' => 'required|string',
            'diplomacity' => 'required|string',
            'diplomaaddress' => 'required|string',
            'diplomaformdate' => 'required|date',
            'diplomatodate' => 'required|date',
            'diplomayearofpassing' => 'required|date',
            'diplomagpapercentage' => 'required|numeric|between:0,100',
            'diplomadiploma' => 'required|string',
            'diplomamajor' => 'required|string',
            'diplomafiledofinterest' => 'required|string',
            'diplomaimagecertificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'diplomaimagemarksheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

             // Bachelors

             'bachelorsinstitutionname' => 'required|string',
            'bachelorscity' => 'required|string',
            'bachelorsaddress' => 'required|string',
            'bachelorformdate' => 'required|date',
            'bachelorstodate' => 'required|date',
            'bachelorsyearofpassing' => 'required|date',
            'bachelorsgpapercentage' => 'required|numeric|between:0,100',
            'bachelorscourse' => 'required|string',
            'bachelorsmajor' => 'required|string',
            'bachelorsfiledofinterest' => 'required|string',
            'bachelorsimagecertificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bachelorsimagemarksheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

              // master

              'masterinstitutionname' => 'required|string',
            'mastercity' => 'required|string',
            'masteraddress' => 'required|string',
            'masterfromdate' => 'required|date',
            'mastertodate' => 'required|date',
            'masteryearsofpassing' => 'required|date',
            'masterpercentage' => 'required|numeric|between:0,100',
            'masterclass' => 'required|string',
            'masterfiledofspecialization' => 'required|string',
            'masterfiledofinterest' => 'required|string',
            'masterimagecertificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'masterimagemarksheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

              // doctorate
              'doctoratename' => 'required|string',
              'doctoratecity' => 'required|string',
              'doctorateaddress' => 'required|string',
              'doctoratefromdate' => 'required|date',
              'doctoratetodate' => 'required|date',
              'doctorateyearofpassing' => 'required|date',
              'doctoratepercentage' => 'required|numeric|between:0,100',
              'doctorateclass' => 'required|string',
              'doctoratefiledofspecialization' => 'required|string',
              'doctoratefiledofinterest' => 'required|string',
              'doctorateimagecertificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
              'doctorateimagemarksheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]
        );

        // highschool

        if ($request->hasFile('highschoolimagecertificate')) {
            $certificatePath = $request->file('highschoolimagecertificate')->store('highschool_certificates', 'public');
            $education['highschoolimagecertificate'] = $certificatePath;
        }

        if ($request->hasFile('highschoolimagemarksheet')) {
            $markSheetPath = $request->file('highschoolimagemarksheet')->store('highschool_marksheets', 'public');
            $education['highschoolimagemarksheet'] = $markSheetPath;
        }

        // highersecondary

        if ($request->hasFile('higersecondaryimagecertificate')) {
            $certificatePath = $request->file('higersecondaryimagecertificate')->store('certificates', 'public');
            $education['higersecondaryimagecertificate'] = $certificatePath;
        }

        if ($request->hasFile('higersecondaryimagemarksheet')) {
            $markSheetPath = $request->file('higersecondaryimagemarksheet')->store('marksheets', 'public');
            $education['higersecondaryimagemarksheet'] = $markSheetPath;
        }

        // doctorate

        if ($request->hasFile('doctorateimagecertificate')) {
            $certificatePath = $request->file('doctorateimagecertificate')->store('certificates', 'public');
            $education['doctorateimagecertificate'] = $certificatePath;
        }

        if ($request->hasFile('doctorateimagemarksheet')) {
            $markSheetPath = $request->file('doctorateimagemarksheet')->store('marksheets', 'public');
            $education['doctorateimagemarksheet'] = $markSheetPath;
        }

        // master
        if ($request->hasFile('masterimagecertificate')) {
            $certificatePath = $request->file('masterimagecertificate')->store('certificates', 'public');
            $education['masterimagecertificate'] = $certificatePath;
        }

        if ($request->hasFile('masterimagemarksheet')) {
            $markSheetPath = $request->file('masterimagemarksheet')->store('marksheets', 'public');
            $education['masterimagemarksheet'] = $markSheetPath;
        }
        // bachelors

        if ($request->hasFile('bachelorsimagecertificate')) {
            $certificatePath = $request->file('bachelorsimagecertificate')->store('certificates', 'public');
            $education['bachelorsimagecertificate'] = $certificatePath;
        }

        if ($request->hasFile('bachelorsimagemarksheet')) {
            $markSheetPath = $request->file('bachelorsimagemarksheet')->store('marksheets', 'public');
            $education['bachelorsimagemarksheet'] = $markSheetPath;
        }

        // diploma
        if ($request->hasFile('diplomaimagecertificate')) {
            $certificatePath = $request->file('diplomaimagecertificate')->store('certificates', 'public');
            $education['diplomaimagecertificate'] = $certificatePath;
        }

        if ($request->hasFile('diplomaimagemarksheet')) {
            $markSheetPath = $request->file('diplomaimagemarksheet')->store('marksheets', 'public');
            $education['diplomaimagemarksheet'] = $markSheetPath;
        }

        Education::create($education);

        return redirect()->back()->with('success', ' information has been successfully stored.');
    }
}
