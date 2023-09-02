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

        'open-input',
        'Conference',

        'open-input-2',
        'final_year_project',
        'project_document',

        'extra_curricular_skills',
        'extra_curricular_skills_project_document',

        'open-input-3',
        'yes_curriculum_pdf_format',

        'open-input-4',
        'no_curriculum_explain',
];

}