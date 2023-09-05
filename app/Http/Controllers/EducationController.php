<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function store(Request $request)
    {
         //dd($request->all());

        $education = $request->validate(
            [
                'job_application_id' => 'required',
                'radio_option' => 'required|in:yes,no',
                'qualification' => 'required|in:high_school,higher_secondary,diploma,bachelor_degree,master_degree,doctorate_degree',
                // high school
                'high_school_name' => 'required_if:qualification,high_school|string',
                'high_school_city' => 'required_if:qualification,high_school|string',
                'high_school_address' => 'required_if:qualification,high_school|string',
                'high_school_form_date' => 'required_if:qualification,high_school|date',
                'high_school_to_date' => 'required_if:qualification,high_school|date',
                'high_school_year_of_passing' => 'required_if:qualification,high_school',
                'high_school_percentage' => 'required_if:qualification,high_school|numeric|between:0,100',
                'high_school_class' => 'required_if:qualification,high_school|string',
                'high_school_image_certificate' => 'required_if:qualification,high_school|image|mimes:jpeg,png,jpg,gif|max:2048',
                'high_school_image_mark_sheet' => 'required_if:qualification,high_school|image|mimes:jpeg,png,jpg,gif|max:2048',

                // Higher
                'higher_secondary_institution_name' => 'required_if:qualification,higher_secondary|string',
                'higher_secondary_city' => 'required_if:qualification,higher_secondary|string',
                'higher_secondary_address' => 'required_if:qualification,higher_secondary|string',
                'higher_secondary_form_date' => 'required_if:qualification,higher_secondary|date',
                'higher_secondary_to_date' => 'required_if:qualification,higher_secondary|date',
                'higher_secondary_year_of_passing' => 'required_if:qualification,higher_secondary|date',
                'higher_secondary_percentage' => 'required_if:qualification,higher_secondary|numeric|between:0,100',
                'higher_secondary_class' => 'required_if:qualification,higher_secondary|string',
                'higher_secondary_stream' => 'required_if:qualification,higher_secondary|string',
                'higher_secondary_filed_of_interest' => 'required_if:qualification,higher_secondary|string',
                'higher_secondary_image_certificate' => 'required_if:qualification,higher_secondary|image|mimes:jpeg,png,jpg,gif|max:2048',
                'higher_secondary_image_mark_sheet' => 'required_if:qualification,higher_secondary_if:qualification,higher_secondary|image|mimes:jpeg,png,jpg,gif|max:2048',

                // diploma
               'diploma_institution_name' => 'required_if:qualification,diploma|string',
                'diploma_city' => 'required_if:qualification,diploma|string',
                'diploma_address' => 'required_if:qualification,diploma|string',
                'diploma_form_date' => 'required_if:qualification,diploma|date',
                'diploma_to_date' => 'required_if:qualification,diploma|date',
                'diploma_year_of_passing' => 'required_if:qualification,diploma|date',
                'diploma_percentage' => 'required_if:qualification,diploma|numeric|between:0,100',
                'diploma_course' => 'required_if:qualification,diploma|string',
                'diploma_major' => 'required_if:qualification,diploma|string',
                'diploma_filed_of_interest' => 'required_if:qualification,diploma|string',
                'diploma_image_certificate' => 'required_if:qualification,diploma|image|mimes:jpeg,png,jpg,gif|max:2048',
                'diploma_image_mark_sheet' => 'required_if:qualification,diploma|image|mimes:jpeg,png,jpg,gif|max:2048',

                // Bachelors
                'bachelors_institution_name' => 'required_if:qualification,bachelor_degree|string',
                'bachelors_city' => 'required_if:qualification,bachelor_degree|string',
                'bachelors_address' => 'required_if:qualification,bachelor_degree|string',
                'bachelors_form_date' => 'required_if:qualification,bachelor_degree',
                'bachelors_to_date' => 'required_if:qualification,bachelor_degree',
                'bachelors_year_of_passing' => 'required_if:qualification,bachelor_degree',
                'bachelors_percentage' => 'required_if:qualification,bachelor_degree|numeric|between:0,100',
                'bachelors_course' => 'required_if:qualification,bachelor_degree|string',
                'bachelors_major' => 'required_if:qualification,bachelor_degree|string',
                'bachelors_filed_of_interest' => 'required_if:qualification,bachelor_degree|string',
                'bachelors_image_certificate' => 'required_if:qualification,bachelor_degree|image|mimes:jpeg,png,jpg,gif|max:2048',
                'bachelors_image_mark_sheet' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

                // // master
               'master_institution_name' => 'required_if:qualification,master_degree|string',
                'master_city' => 'required_if:qualification,master_degree|string',
                'master_address' => 'required_if:qualification,master_degree|string',
                'master_from_date' => 'required_if:qualification,master_degree|date',
                'master_to_date' => 'required_if:qualification,master_degree|date',
                'master_years_of_passing' => 'required_if:qualification,master_degree',
                'master_percentage' => 'required_if:qualification,master_degree|numeric|between:0,100',
                'master_class' => 'required_if:qualification,master_degree|string',
                'master_filed_of_specialization' => 'required_if:qualification,master_degree|string',
                'master_filed_of_interest' => 'required_if:qualification,master_degree|string',
                'master_image_certificate' => 'required_if:qualification,master_degree|image|mimes:jpeg,png,jpg,gif|max:2048',
                'master_image_mark_sheet' => 'required_if:qualification,master_degree|image|mimes:jpeg,png,jpg,gif|max:2048',

                // doctorate
              'doctorate_name' => 'required_if:qualification,doctorate_degree|string',
                'doctorate_city' => 'required_if:qualification,doctorate_degree|string',
                'doctorate_address' => 'required_if:qualification,doctorate_degree|string',
                'doctorate_from_date' => 'required_if:qualification,doctorate_degree|date',
                'doctorate_to_date' => 'required_if:qualification,doctorate_degree|date',
                'doctorate_year_of_passing' => 'required_if:qualification,doctorate_degree|date',
                'doctorate_percentage' => 'required_if:qualification,doctorate_degree|numeric|between:0,100',
                'doctorate_class' => 'required_if:qualification,doctorate_degree|string',
                'doctorate_filed_of_specialization' => 'required_if:qualification,doctorate_degree|string',
                'doctorate_filed_of_interest' => 'required_if:qualification,doctorate_degree|string',
                'doctorate_image_certificate' => 'required_if:qualification,doctorate_degree|image|mimes:jpeg,png,jpg,gif|max:2048',
                'doctorate_image_mark_sheet' => 'required_if:qualification,doctorate_degree|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]
        );
        //dd($request->all());
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