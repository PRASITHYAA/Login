<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;
    protected $fillable = [
        'open-input',
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

        // REFERENCE
        'reference_name ',
        'reference_company',
        'reference_position',
        'reference_email',
        'reference_phone',
        'reference_phone',

        // second'',
        'nested-option',
        'sub-nested-input',

        'sub-nested-option',
        'nested-input-field',

    ];
}
