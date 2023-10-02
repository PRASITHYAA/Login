<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTitle extends Model
{
    use HasFactory;
    protected $fillable = [
        'sector_id',
        'course_level_id',
        'name',
        'course_code',
        'from_date',
        'to_date',
        'time',
        'duration',
        'course_location',
        'course_registration_fee',
        'course_description',
        'course_training_schedule',
        'eligible_to_participate',
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function course_level()
    {
        return $this->belongsTo(CourseLevel::class);
    }
}
