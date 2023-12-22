<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Education;
use App\Models\Employment;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function create()
    {
        return view('career.education.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate(
            [
                'job_application_id' => 'required',
                'radio_option' => 'required|in:yes,no',
                'qualification' => 'required_if:radio_option,yes',//|in:high_school,higher_secondary,diploma,bachelor_degree,master_degree,doctorate_degree',
                // high school
                'high_school_name' => 'required_if:qualification.*,in:high_school',
                'high_school_city' => 'required_if:qualification.*,in:high_school',
                'high_school_address' => 'required_if:qualification.*,in:high_school',
                'high_school_form_date' => 'required_if:qualification.*,in:high_school',
                'high_school_to_date' => 'required_if:qualification.*,in:high_school',
                'high_school_year_of_passing' => 'required_if:qualification.*,in:high_school',
                'high_school_percentage' => 'required_if:qualification.*,in:high_school',
                'high_school_class' => 'required_if:qualification.*,in:high_school',
                'high_school_stream' => 'required_if:qualification.*,in:high_school',
                'high_school_image_certificate' => $this->fileValidation('high_school'),
                'high_school_image_mark_sheet' => $this->fileValidation('high_school'),
                // Higher
                'higher_secondary_institution_name' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_city' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_address' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_form_date' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_to_date' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_year_of_passing' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_percentage' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_class' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_stream' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_filed_of_interest' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_image_certificate' => $this->fileValidation('higher_secondary'),
                'higher_secondary_image_mark_sheet' => $this->fileValidation('higher_secondary'),
                // diploma
                'diploma_institution_name' => 'required_if:qualification.*,in:diploma',
                'diploma_city' => 'required_if:qualification.*,in:diploma',
                'diploma_address' => 'required_if:qualification.*,in:diploma',
                'diploma_form_date' => 'required_if:qualification.*,in:diploma',
                'diploma_to_date' => 'required_if:qualification.*,in:diploma',
                'diploma_year_of_passing' => 'required_if:qualification.*,in:diploma',
                'diploma_percentage' => 'required_if:qualification.*,in:diploma',
                'diploma_course' => 'required_if:qualification.*,in:diploma',
                'diploma_major' => 'required_if:qualification.*,in:diploma',
                'diploma_filed_of_interest' => 'required_if:qualification.*,in:diploma',
                'diploma_image_certificate' => $this->fileValidation('diploma'),
                'diploma_image_mark_sheet' => $this->fileValidation('diploma'),
                // Bachelors
                'bachelors_institution_name' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_city' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_address' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_form_date' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_to_date' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_year_of_passing' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_percentage' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_class' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_course' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_major' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_filed_of_interest' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_image_certificate' => $this->fileValidation('bachelor_degree'),
                'bachelors_image_mark_sheet' => $this->fileValidation('bachelor_degree'),
                // // master
                'master_institution_name' => 'required_if:qualification.*,in:master_degree',
                'master_city' => 'required_if:qualification.*,in:master_degree',
                'master_address' => 'required_if:qualification.*,in:master_degree',
                'master_from_date' => 'required_if:qualification.*,in:master_degree',
                'master_to_date' => 'required_if:qualification.*,in:master_degree',
                'master_years_of_passing' => 'required_if:qualification.*,in:master_degree',
                'master_percentage' => 'required_if:qualification.*,in:master_degree',
                'master_class' => 'required_if:qualification.*,in:master_degree',
                'master_filed_of_specialization' => 'required_if:qualification.*,in:master_degree',
                'master_filed_of_interest' => 'required_if:qualification.*,in:master_degree',
                'master_image_certificate' => $this->fileValidation('master_degree'),
                'master_image_mark_sheet' => $this->fileValidation('master_degree'),
                // doctorate
                'doctorate_name' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_city' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_address' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_from_date' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_to_date' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_year_of_passing' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_percentage' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_class' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_filed_of_specialization' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_filed_of_interest' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_image_certificate' => $this->fileValidation('doctorate_degree'),
                'doctorate_image_mark_sheet' => $this->fileValidation('doctorate_degree'),
            ]
        );
        $education = $request->all();
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
        if(!is_null($request->qualification)) {
            $education['qualification'] = implode(',', $request->qualification);
        }
        $education = Education::create($education);

        return redirect()->route('employment.view', ['job_application_id' => $request->job_application_id, 'education_id' => $education->id])->with('success', 'Education created successfully!');
    }

    public function show($id)
    {
        $education = Education::find($id);

        return view('career.education.show', ['education' => $education, ]);
    }



    public function edit($id)
    {
        $education = Education::find($id);
        $card = Card::where('job_application_id', $education->job_application_id)->orderBy('id', 'desc')->first();
        return view('career.education.create', ['education' => $education, 'card_id' => $card->id]);
    }

    public function update($id, Request $request)
    {
        //dd($request->all());
        $rules =
            [
                'job_application_id' => 'required',
                'radio_option' => 'required|in:yes,no',
                'qualification' => 'required_if:radio_option,yes',//|in:high_school,higher_secondary,diploma,bachelor_degree,master_degree,doctorate_degree',
                // high school
                'high_school_name' => 'required_if:qualification.*,in:high_school',
                'high_school_city' => 'required_if:qualification.*,in:high_school',
                'high_school_address' => 'required_if:qualification.*,in:high_school',
                'high_school_form_date' => 'required_if:qualification.*,in:high_school',
                'high_school_to_date' => 'required_if:qualification.*,in:high_school',
                'high_school_year_of_passing' => 'required_if:qualification.*,in:high_school',
                'high_school_percentage' => 'required_if:qualification.*,in:high_school',
                'high_school_class' => 'required_if:qualification.*,in:high_school',
                'high_school_stream' => 'required_if:qualification.*,in:high_school',
                // Higher
                'higher_secondary_institution_name' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_city' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_address' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_form_date' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_to_date' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_year_of_passing' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_percentage' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_class' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_stream' => 'required_if:qualification.*,in:higher_secondary',
                'higher_secondary_filed_of_interest' => 'required_if:qualification.*,in:higher_secondary',
                // diploma
                'diploma_institution_name' => 'required_if:qualification.*,in:diploma',
                'diploma_city' => 'required_if:qualification.*,in:diploma',
                'diploma_address' => 'required_if:qualification.*,in:diploma',
                'diploma_form_date' => 'required_if:qualification.*,in:diploma',
                'diploma_to_date' => 'required_if:qualification.*,in:diploma',
                'diploma_year_of_passing' => 'required_if:qualification.*,in:diploma',
                'diploma_percentage' => 'required_if:qualification.*,in:diploma',
                'diploma_course' => 'required_if:qualification.*,in:diploma',
                'diploma_major' => 'required_if:qualification.*,in:diploma',
                'diploma_filed_of_interest' => 'required_if:qualification.*,in:diploma',
                // Bachelors
                'bachelors_institution_name' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_city' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_address' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_form_date' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_to_date' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_year_of_passing' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_percentage' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_class' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_course' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_major' => 'required_if:qualification.*,in:bachelor_degree',
                'bachelors_filed_of_interest' => 'required_if:qualification.*,in:bachelor_degree',
                // // master
                'master_institution_name' => 'required_if:qualification.*,in:master_degree',
                'master_city' => 'required_if:qualification.*,in:master_degree',
                'master_address' => 'required_if:qualification.*,in:master_degree',
                'master_from_date' => 'required_if:qualification.*,in:master_degree',
                'master_to_date' => 'required_if:qualification.*,in:master_degree',
                'master_years_of_passing' => 'required_if:qualification.*,in:master_degree',
                'master_percentage' => 'required_if:qualification.*,in:master_degree',
                'master_class' => 'required_if:qualification.*,in:master_degree',
                'master_filed_of_specialization' => 'required_if:qualification.*,in:master_degree',
                'master_filed_of_interest' => 'required_if:qualification.*,in:master_degree',
                // doctorate
                'doctorate_name' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_city' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_address' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_from_date' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_to_date' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_year_of_passing' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_percentage' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_class' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_filed_of_specialization' => 'required_if:qualification.*,in:doctorate_degree',
                'doctorate_filed_of_interest' => 'required_if:qualification.*,in:doctorate_degree',
            ];
        if ($request->hasFile('high_school_image_certificate')) {
            $rules['high_school_image_certificate'] = $this->fileValidation('high_school');
        }
        if ($request->hasFile('high_school_image_mark_sheet')) {
            $rules['high_school_image_mark_sheet'] = $this->fileValidation('high_school');
        }
        if ($request->hasFile('higher_secondary_image_certificate')) {
            $rules['higher_secondary_image_certificate'] = $this->fileValidation('higher_secondary');
        }
        if ($request->hasFile('higher_secondary_image_mark_sheet')) {
            $rules['higher_secondary_image_mark_sheet'] = $this->fileValidation('higher_secondary');
        }
        if ($request->hasFile('diploma_image_certificate')) {
            $rules['diploma_image_certificate'] = $this->fileValidation('diploma');
        }
        if ($request->hasFile('diploma_image_mark_sheet')) {
            $rules['diploma_image_mark_sheet'] = $this->fileValidation('diploma');
        }
        if ($request->hasFile('bachelors_image_certificate')) {
            $rules['bachelors_image_certificate'] = $this->fileValidation('bachelor_degree');
        }
        if ($request->hasFile('bachelors_image_mark_sheet')) {
            $rules['bachelors_image_mark_sheet'] = $this->fileValidation('bachelor_degree');
        }
        if ($request->hasFile('master_image_certificate')) {
            $rules['master_image_certificate'] = $this->fileValidation('master_degree');
        }
        if ($request->hasFile('master_image_mark_sheet')) {
            $rules['master_image_mark_sheet'] = $this->fileValidation('master_degree');
        }
        if ($request->hasFile('doctorate_image_certificate')) {
            $rules['doctorate_image_certificate'] = $this->fileValidation('doctorate_degree');
        }
        if ($request->hasFile('doctorate_image_mark_sheet')) {
            $rules['doctorate_image_mark_sheet'] = $this->fileValidation('doctorate_degree');
        }

        $request->validate($rules);

        $data = $request->all();

        if ($request->hasFile('high_school_image_certificate')) {
            $certificatePath = $request->file('high_school_image_certificate')->store('high_school_certificates', 'public');
            $data['high_school_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('high_school_image_mark_sheet')) {
            $markSheetPath = $request->file('high_school_image_mark_sheet')->store('high_school_mark_sheets', 'public');
            $data['high_school_image_mark_sheet'] = $markSheetPath;
        }

        // higher secondary

        if ($request->hasFile('higher_secondary_image_certificate')) {
            $certificatePath = $request->file('higher_secondary_image_certificate')->store('certificates', 'public');
            $data['higher_secondary_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('higher_secondary_image_mark_sheet')) {
            $markSheetPath = $request->file('higher_secondary_image_mark_sheet')->store('mark_sheets', 'public');
            $data['higher_secondary_image_mark_sheet'] = $markSheetPath;
        }

        // diploma
        if ($request->hasFile('diploma_image_certificate')) {
            $certificatePath = $request->file('diploma_image_certificate')->store('certificates', 'public');
            $data['diploma_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('diploma_image_mark_sheet')) {
            $markSheetPath = $request->file('diploma_image_mark_sheet')->store('mark_sheets', 'public');
            $data['diploma_image_mark_sheet'] = $markSheetPath;
        }

        // bachelors

        if ($request->hasFile('bachelors_image_certificate')) {
            $certificatePath = $request->file('bachelors_image_certificate')->store('certificates', 'public');
            $data['bachelors_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('bachelors_image_mark_sheet')) {
            $markSheetPath = $request->file('bachelors_image_mark_sheet')->store('mark_sheets', 'public');
            $data['bachelors_image_mark_sheet'] = $markSheetPath;
        }

        // master
        if ($request->hasFile('master_image_certificate')) {
            $certificatePath = $request->file('master_image_certificate')->store('certificates', 'public');
            $data['master_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('master_image_mark_sheet')) {
            $markSheetPath = $request->file('master_image_mark_sheet')->store('mark_sheets', 'public');
            $data['master_image_mark_sheet'] = $markSheetPath;
        }

        // doctorate

        if ($request->hasFile('doctorate_image_certificate')) {
            $certificatePath = $request->file('doctorate_image_certificate')->store('certificates', 'public');
            $data['doctorate_image_certificate'] = $certificatePath;
        }

        if ($request->hasFile('doctorate_image_mark_sheet')) {
            $markSheetPath = $request->file('doctorate_image_mark_sheet')->store('mark_sheets', 'public');
            $data['doctorate_image_mark_sheet'] = $markSheetPath;
        }
        if(!is_null($request->qualification)) {
            $data['qualification'] = implode(',', $request->qualification);
        }
        $qualificationArray = ['high_school', 'higher_secondary', 'diploma', 'bachelor_degree', 'master_degree', 'doctorate_degree'];
        foreach ($qualificationArray as $value) {
            if(is_null($request->qualification) || (!in_array($value, $request->qualification) && $value == 'high_school')) {
                $data['high_school_name'] = null;
                $data['high_school_city'] = null;
                $data['high_school_address'] = null;
                $data['high_school_form_date'] = null;
                $data['high_school_to_date'] = null;
                $data['high_school_year_of_passing'] = null;
                $data['high_school_percentage'] = null;
                $data['high_school_class'] = null;
                $data['high_school_stream'] = null;
            } else if(is_null($request->qualification) || (!in_array($value, $request->qualification) && $value == 'higher_secondary')) {
               $data['higher_secondary_institution_name'] = null;
               $data['higher_secondary_city'] = null;
               $data['higher_secondary_address'] = null;
               $data['higher_secondary_form_date'] = null;
               $data['higher_secondary_to_date'] = null;
               $data['higher_secondary_year_of_passing'] = null;
               $data['higher_secondary_percentage'] = null;
               $data['higher_secondary_class'] = null;
               $data['higher_secondary_stream'] = null;
               $data['higher_secondary_filed_of_interest'] = null;
               $data['higher_secondary_image_certificate'] = null;
               $data['higher_secondary_image_mark_sheet'] = null;
            } else if(is_null($request->qualification) || (!in_array($value, $request->qualification) && $value == 'bachelor_degree')) {
                $data['bachelors_institution_name'] = null;
                $data['bachelors_city'] = null;
                $data['bachelors_address'] = null;
                $data['bachelors_form_date'] = null;
                $data['bachelors_to_date'] = null;
                $data['bachelors_year_of_passing'] = null;
                $data['bachelors_percentage'] = null;
                $data['bachelors_class'] = null;
                $data['bachelors_course'] = null;
                $data['bachelors_major'] = null;
                $data['bachelors_filed_of_interest'] = null;
            } else if(is_null($request->qualification) || (!in_array($value, $request->qualification) && $value == 'diploma')) {
               $data['diploma_institution_name'] = null;
               $data['diploma_city'] = null;
               $data['diploma_address'] = null;
               $data['diploma_form_date'] = null;
               $data['diploma_to_date'] = null;
               $data['diploma_year_of_passing'] = null;
               $data['diploma_percentage'] = null;
               $data['diploma_course'] = null;
               $data['diploma_major'] = null;
               $data['diploma_filed_of_interest'] = null;
            } else if(is_null($request->qualification) || (!in_array($value, $request->qualification) && $value == 'master_degree')) {
               $data['master_institution_name'] = null;
               $data['master_city'] = null;
               $data['master_address'] = null;
               $data['master_from_date'] = null;
               $data['master_to_date'] = null;
               $data['master_years_of_passing'] = null;
               $data['master_percentage'] = null;
               $data['master_class'] = null;
               $data['master_filed_of_specialization'] = null;
               $data['master_filed_of_interest'] = null;
               $data['master_image_certificate'] = null;
               $data['master_image_mark_sheet'] = null;
            } else if(is_null($request->qualification) || (!in_array($value, $request->qualification) && $value == 'doctorate_degree')) {
               $data['doctorate_name'] = null;
               $data['doctorate_city'] = null;
               $data['doctorate_address'] = null;
               $data['doctorate_from_date'] = null;
               $data['doctorate_to_date'] = null;
               $data['doctorate_year_of_passing'] = null;
               $data['doctorate_percentage'] = null;
               $data['doctorate_class'] = null;
               $data['doctorate_filed_of_specialization'] = null;
               $data['doctorate_filed_of_interest'] = null;
               $data['doctorate_image_certificate'] = null;
               $data['doctorate_image_mark_sheet'] = null;
            }
        }
        $education = Education::find($id);

        $education = $education->fill($data);

        $education->save();

        $jobApplication = JobApplication::find($education->job_application_id);

        $employment = Employment::where('job_application_id', $education->job_application_id)->orderBy('id', 'desc')->first();

        if (!is_null($employment)) {
            return redirect()->route('career.employment.edit', $employment->id)->with('success', 'Education updated successfully!');
        } else {
            return redirect()->route('employment.view', ['job_application_id' => $jobApplication->id, 'education_id' => $education->id])
                ->with('success', 'Education updated successfully!');
        }
    }

    public function fileValidation($field)
    {
        return ["required_if:qualification.*,in:$field", 'mimes:jpeg,png,jpg,gif,pdf',
            function ($attribute, $value, $fail) {
                $allowedExtensions = ['jpeg', 'png', 'jpg', 'gif', 'pdf'];
                $maxPdfSize = 1024; // 1MB
                $maxImageSize = 1024; // 1MB

                // Check if the uploaded file is a PDF
                if ($value->getClientOriginalExtension() === 'pdf') {
                    if ($value->getSize() > $maxPdfSize * 1024) {
                        $fail('The ' . $attribute . ' must be a PDF file with a maximum size of ' . $maxPdfSize . 'MB.');
                    }
                } else {
                    // Check if the uploaded file is an image
                    if (in_array($value->getClientOriginalExtension(), $allowedExtensions)) {
                        if ($value->getSize() > $maxImageSize * 1024) {
                            $fail('The ' . $attribute . ' must be an image with a maximum size of ' . $maxImageSize . 'MB.');
                        }
                    } else {
                        $fail('The ' . $attribute . ' must be either a PDF file or an image.');
                    }
                }
            }
        ];
    }
}
