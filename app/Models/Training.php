<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'sector_id',
        'course_level_id',
        'course_title_id',
        'first_name',
        'last_name',
        'photo',
        'qualification',
        'experience_status',
        'job_title',
        'gender',
        'year_of_experience',
        'address_line_1',
        'city',
        'zip_code',
        'address_line_2',
        'state',
        'country',
        'address_status',
        'permanent_address_line_1',
        'permanent_city',
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
        'expectations'
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function course_level()
    {
        return $this->belongsTo(CourseLevel::class);
    }

    public function course_title()
    {
        return $this->belongsTo(CourseTitle::class);
    }
}
