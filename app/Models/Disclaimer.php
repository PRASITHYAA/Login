<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disclaimer extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_application_id',
        'expected_date_to_join',
        'current_salary',
        'expected_salary',
        'disclaimer_signature',
        'disclaimer_date',
        'disclaimer_time',
        'disclaimer_print_name',
        'disclaimer_place',
    ];
    public function jobApplication()
    {
        return $this->belongsTo(JobApplication::class);
    }

}