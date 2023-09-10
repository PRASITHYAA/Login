<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_application_id',
        'aadhar_name',
        'aadhar_id_number',
        'aadhar_issued_country',
        'aadhar_issued_state',
        'aadhar_issued_place',
        'aadhar_image',
        'aadhar_image_page',
        //passport
        'passport_name',
        'passport_id_number',
        'passport_issue_date',
        'passport_expired_date',
        'passport_issued_country',
        'passport_issued_state',
        'passport_issued_place',
        'passport_image_id',
        'passport_image_id_page',
    ];
    
    public function jobApplication()
    {
        return $this->belongsTo(JobApplication::class);
    }
}