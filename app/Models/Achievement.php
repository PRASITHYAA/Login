<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_application_id',
        'achievement',
        'conference_status',
        'conference',
        'final_year_project_status',
        'final_year_project',
        'project_document',
        'extra_curricular_skills',
        'extra_curricular_skills_project_document',
        'curriculum_status',
        'yes_curriculum_pdf_format',
        'background_check_status',
        'no_curriculum_explain',
    ];

}
