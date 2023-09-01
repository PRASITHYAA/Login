<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_application_id',
        'radio_option',
        // high school

        'high_school_name',
        'high_school_city',
        'high_school_address',
        'high_school_form_date',
        'high_school_to_date',
        'high_school_Year_of_Passing',
        'high_school_percentage',
        'high_school_class',
        'high_school_stream',
        'high_school_image_certificate',
        'high_school_image_mark_sheet',

        // Higher Secondary

        'higher_secondary_institution_name',
        'higher_secondary_city',
        'higher_secondary_address',
        'higher_secondary_form_date',
        'higher_secondary_to_date',
        'higher_secondary_year_of_passing',
        'higher_secondary_percentage',
        'higher_secondary_class',
        'higher_secondary_stream',
        'higher_secondary_filed_of_interest',
        'higher_secondary_image_certificate',
        'higher_secondary_image_mark_sheet',

        // Diploma

        'diploma_institution_name',
        'diploma_city',
        'diploma_address',
        'diploma_form_date',
        'diploma_to_date',
        'diploma_year_of_passing',
        'diploma_percentage',
        'diploma_course',
        'diploma_major',
        'diploma_filed_of_interest',
        'diploma_image_certificate',
        'diploma_image_mark_sheet',

        // Bachelors

        'bachelors_institution_name',
        'bachelors_city',
        'bachelors_address',
        'bachelor_form_date',
        'bachelors_to_date',
        'bachelors_year_of_passing',
        'bachelors_percentage',
        'bachelors_course',
        'bachelors_major',
        'bachelors_filed_of_interest',
        'bachelors_image_certificate',
        'bachelors_image_mark_sheet',

        // master

        'master_institution_name',
        'master_city',
        'master_address',
        'master_from_date',
        'master_to_date',
        'master_years_of_passing',
        'master_percentage',
        'master_class',
        'master_filed_of_specialization',
        'master_filed_of_interest',
        'master_image_certificate',
        'master_image_mark_sheet',

// doctorate

        'doctorate_name',
        'doctorate_city',
        'doctorate_address',
        'doctorate_from_date',
        'doctorate_to_date',
        'doctorate_year_of_passing',
        'doctorate_percentage',
        'doctorate_class',
        'doctorate_filed_of_specialization',
        'doctorate_filed_of_interest',
        'doctorate_image_certificate',
        'doctorate_image_mark_sheet',
    ];
}