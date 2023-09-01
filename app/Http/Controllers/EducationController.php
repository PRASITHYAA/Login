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
                'high_school_name' => 'required|string',
                'high_school_city' => 'required|string',
                'high_school_address' => 'required|string',
                'high_school_form_date' => 'required|date',
                'high_school_to_date' => 'required|date',
                'high_school_year_of_passing' => 'required|date',
                'high_school_percentage' => 'required|numeric|between:0,100',
                'high_school_class' => 'required|string',
                'high_school_image_certificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'high_school_image_mark_sheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

                // Higher
                'higher_secondary_institution_name' => 'required|string',
                'higher_secondary_city' => 'required|string',
                'higher_secondary_address' => 'required|string',
                'higher_secondary_form_date' => 'required|date',
                'higher_secondary_to_date' => 'required|date',
                'higher_secondary_year_of_passing' => 'required|date',
                'higher_secondary_percentage' => 'required|numeric|between:0,100',
                'higher_secondary_class' => 'required|string',
                'higher_secondary_stream' => 'required|string',
                'higher_secondary_filed_of_interest' => 'required|string',
                'higher_secondary_image_certificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'higher_secondary_image_mark_sheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

                // diploma
                'diploma_institution_name' => 'required|string',
                'diploma_city' => 'required|string',
                'diploma_address' => 'required|string',
                'diploma_form_date' => 'required|date',
                'diploma_to_date' => 'required|date',
                'diploma_year_of_passing' => 'required|date',
                'diploma_percentage' => 'required|numeric|between:0,100',
                'diploma_diploma' => 'required|string',
                'diploma_major' => 'required|string',
                'diploma_filed_of_interest' => 'required|string',
                'diploma_image_certificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'diploma_image_mark_sheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

                // Bachelors
                'bachelors_institution_name' => 'required|string',
                'bachelors_city' => 'required|string',
                'bachelors_address' => 'required|string',
                'bachelors_form_date' => 'required|date',
                'bachelors_to_date' => 'required|date',
                'bachelors_year_of_passing' => 'required|date',
                'bachelors_percentage' => 'required|numeric|between:0,100',
                'bachelors_course' => 'required|string',
                'bachelors_major' => 'required|string',
                'bachelors_filed_of_interest' => 'required|string',
                'bachelors_image_certificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'bachelors_image_mark_sheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

                // master
                'master_institution_name' => 'required|string',
                'master_city' => 'required|string',
                'master_address' => 'required|string',
                'master_from_date' => 'required|date',
                'master_to_date' => 'required|date',
                'master_years_of_passing' => 'required|date',
                'master_percentage' => 'required|numeric|between:0,100',
                'master_class' => 'required|string',
                'master_filed_of_specialization' => 'required|string',
                'master_filed_of_interest' => 'required|string',
                'master_image_certificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'master_image_mark_sheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

                // doctorate
                'doctorate_name' => 'required|string',
                'doctorate_city' => 'required|string',
                'doctorate_address' => 'required|string',
                'doctorate_from_date' => 'required|date',
                'doctorate_to_date' => 'required|date',
                'doctorate_year_of_passing' => 'required|date',
                'doctorate_percentage' => 'required|numeric|between:0,100',
                'doctorate_class' => 'required|string',
                'doctorate_filed_of_specialization' => 'required|string',
                'doctorate_filed_of_interest' => 'required|string',
                'doctorate_image_certificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'doctorate_image_mark_sheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]
        );

        // highschool

        if ($request->hasFile('high_school_image_certificate')) {
            $certificatePath = $request->file('high_school_image_certificate')->store('high_school_certificates', 'public');
            $education['high_school_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('high_school_image_mark_sheet')) {
            $markSheetPath = $request->file('high_school_image_mark_sheet')->store('high_school_mark_sheets', 'public');
            $education['high_school_image_mark_sheet'] = $markSheetPath;
        }

        // higher secondary

        if ($request->hasFile('higher_secondary_image_certificate')) {
            $certificatePath = $request->file('higher_secondary_image_certificate')->store('certificates', 'public');
            $education['higher_secondary_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('higher_secondary_image_mark_sheet')) {
            $markSheetPath = $request->file('higher_secondary_image_mark_sheet')->store('mark_sheets', 'public');
            $education['higher_secondary_image_mark_sheet'] = $markSheetPath;
        }

        // diploma
        if ($request->hasFile('diploma_image_certificate')) {
            $certificatePath = $request->file('diploma_image_certificate')->store('certificates', 'public');
            $education['diploma_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('diploma_image_mark_sheet')) {
            $markSheetPath = $request->file('diploma_image_mark_sheet')->store('mark_sheets', 'public');
            $education['diploma_image_mark_sheet'] = $markSheetPath;
        }

        // bachelors

        if ($request->hasFile('bachelors_image_certificate')) {
            $certificatePath = $request->file('bachelors_image_certificate')->store('certificates', 'public');
            $education['bachelors_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('bachelors_image_mark_sheet')) {
            $markSheetPath = $request->file('bachelors_image_mark_sheet')->store('mark_sheets', 'public');
            $education['bachelors_image_mark_sheet'] = $markSheetPath;
        }

        // master
        if ($request->hasFile('master_image_certificate')) {
            $certificatePath = $request->file('master_image_certificate')->store('certificates', 'public');
            $education['master_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('master_image_mark_sheet')) {
            $markSheetPath = $request->file('master_image_mark_sheet')->store('mark_sheets', 'public');
            $education['master_image_mark_sheet'] = $markSheetPath;
        }

        // doctorate

        if ($request->hasFile('doctorate_image_certificate')) {
            $certificatePath = $request->file('doctorate_image_certificate')->store('certificates', 'public');
            $education['doctorate_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('doctorate_image_mark_sheet')) {
            $markSheetPath = $request->file('doctorate_image_mark_sheet')->store('mark_sheets', 'public');
            $education['doctorate_image_mark_sheet'] = $markSheetPath;
        }

        Education::create($education);

        return redirect()->route('employment', ['id' => $request->job_application_id])->with('success', 'Education created successfully!');
    }
}