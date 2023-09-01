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
                'radio_option' => 'required|in:yes,no',
                // high school
                'high_school_name' => 'required_if:radio_option,yes|string',
                'high_school_city' => 'required_if:radio_option,yes|string',
                'high_school_address' => 'required_if:radio_option,yes|string',
                'high_school_form_date' => 'required_if:radio_option,yes|date',
                'high_school_to_date' => 'required_if:radio_option,yes|date',
                'high_school_year_of_passing' => 'required_if:radio_option,yes',
                'high_school_percentage' => 'required_if:radio_option,yes|numeric|between:0,100',
                'high_school_class' => 'required_if:radio_option,yes|string',
                'high_school_image_certificate' => 'required_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',
                'high_school_image_mark_sheet' => 'required_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',

                // Higher
                'higher_secondary_institution_name' => 'required_if:radio_option,yes|string',
                'higher_secondary_city' => 'required_if:radio_option,yes|string',
                'higher_secondary_address' => 'required_if:radio_option,yes|string',
                'higher_secondary_form_date' => 'required_if:radio_option,yes|date',
                'higher_secondary_to_date' => 'required_if:radio_option,yes|date',
                'higher_secondary_year_of_passing' => 'required_if:radio_option,yes|date',
                'higher_secondary_percentage' => 'required_if:radio_option,yes|numeric|between:0,100',
                'higher_secondary_class' => 'required_if:radio_option,yes|string',
                'higher_secondary_stream' => 'required_if:radio_option,yes|string',
                'higher_secondary_filed_of_interest' => 'required_if:radio_option,yes|string',
                'higher_secondary_image_certificate' => 'required_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',
                'higher_secondary_image_mark_sheet' => 'required_if:radio_option,yes_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',

                // diploma
                'diploma_institution_name' => 'required_if:radio_option,yes|string',
                'diploma_city' => 'required_if:radio_option,yes|string',
                'diploma_address' => 'required_if:radio_option,yes|string',
                'diploma_form_date' => 'required_if:radio_option,yes|date',
                'diploma_to_date' => 'required_if:radio_option,yes|date',
                'diploma_year_of_passing' => 'required_if:radio_option,yes|date',
                'diploma_percentage' => 'required_if:radio_option,yes|numeric|between:0,100',
                'diploma_course' => 'required_if:radio_option,yes|string',
                'diploma_major' => 'required_if:radio_option,yes|string',
                'diploma_filed_of_interest' => 'required_if:radio_option,yes|string',
                'diploma_image_certificate' => 'required_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',
                'diploma_image_mark_sheet' => 'required_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',

                // Bachelors
                'bachelors_institution_name' => 'required_if:radio_option,yes|string',
                'bachelors_city' => 'required_if:radio_option,yes|string',
                'bachelors_address' => 'required_if:radio_option,yes|string',
                'bachelors_form_date' => 'required_if:radio_option,yes',
                'bachelors_to_date' => 'required_if:radio_option,yes',
                'bachelors_year_of_passing' => 'required_if:radio_option,yes',
                'bachelors_percentage' => 'required_if:radio_option,yes|numeric|between:0,100',
                'bachelors_course' => 'required_if:radio_option,yes|string',
                'bachelors_major' => 'required_if:radio_option,yes|string',
                'bachelors_filed_of_interest' => 'required_if:radio_option,yes|string',
                'bachelors_image_certificate' => 'required_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',
                'bachelors_image_mark_sheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

                // // master
                'master_institution_name' => 'required_if:radio_option,yes|string',
                'master_city' => 'required_if:radio_option,yes|string',
                'master_address' => 'required_if:radio_option,yes|string',
                'master_from_date' => 'required_if:radio_option,yes|date',
                'master_to_date' => 'required_if:radio_option,yes|date',
                'master_years_of_passing' => 'required_if:radio_option,yes',
                'master_percentage' => 'required_if:radio_option,yes|numeric|between:0,100',
                'master_class' => 'required_if:radio_option,yes|string',
                'master_filed_of_specialization' => 'required_if:radio_option,yes|string',
                'master_filed_of_interest' => 'required_if:radio_option,yes|string',
                'master_image_certificate' => 'required_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',
                'master_image_mark_sheet' => 'required_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',

                // // doctorate
                // 'doctorate_name' => 'required_if:radio_option,yes|string',
                // 'doctorate_city' => 'required_if:radio_option,yes|string',
                // 'doctorate_address' => 'required_if:radio_option,yes|string',
                // 'doctorate_from_date' => 'required_if:radio_option,yes|date',
                // 'doctorate_to_date' => 'required_if:radio_option,yes|date',
                // 'doctorate_year_of_passing' => 'required_if:radio_option,yes|date',
                // 'doctorate_percentage' => 'required_if:radio_option,yes|numeric|between:0,100',
                // 'doctorate_class' => 'required_if:radio_option,yes|string',
                // 'doctorate_filed_of_specialization' => 'required_if:radio_option,yes|string',
                // 'doctorate_filed_of_interest' => 'required_if:radio_option,yes|string',
                // 'doctorate_image_certificate' => 'required_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',
                // 'doctorate_image_mark_sheet' => 'required_if:radio_option,yes|image|mimes:jpeg,png,jpg,gif|max:2048',
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
