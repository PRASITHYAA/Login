<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;
    protected $fillable = [

        'job_application_id',
        'previous_experience',
        // experience
        'employer_company',
        'employer_email',
        'employer_address',
        'employer_phone',
        'employer_job_title',
        'employer_from_date',
        'employer_to_date',
        'employer_experience',
        'employer_responsibilities',
        'reference_name ',
        'reference_company',
        'reference_position',
        'reference_email',
        'reference_phone',
        'reference_phone',
        'reference_address',
        'eligible_to_work',
        'crime_status',
        // second'',
        'eligible_to_work_text',
        'crime_status_text',
    ];

    public function employers()
    {
        return $this->hasMany(EmploymentEmployer::class);
    }

    public function references()
    {
        return $this->hasMany(EmploymentReference::class);
    }
}
