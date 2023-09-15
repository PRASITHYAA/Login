<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $fillable = [
        'sector',
        'course_level',
        'course_title',
        'first_name',
        'last_name',
        'passport_size_photo_upload',
        'select_your_qualification',
        'choice1',
        'job_title',
        'gender',
        'year_of_experience',
        'address_line_1',
        'city',
        'zip_code',
        'address_line_2',
        'state',
        'country',
        'choice2',
        'permanent_address_line_1',
        'permanent_City',
        'permanent_zip_code',
        'permanent_address_line_2',
        'permanent_state',
        'permanent_country',
        'primary_mobile_number',
        'primary_email',
        'secondary_mobile_number',
        'secondary_email',
        'job_description',
        'training_session',
        'sector',
        'course_level',
        'course_title',


    ];

}