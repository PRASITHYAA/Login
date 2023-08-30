<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'sector',
        'postion',
        'first_name',
        'last_name',
        'image',
        'dob',
        'age',
        'country',
        'state',
        'city',
        'address',
        'postal_code',
        'phone',
        'alternative_phone',
        'email',
        'fb_link',
        'instagram_link',
        'linked_link',
// permanantaddress
        'permanant_address_input',
        'Permanant_city',
        'Permanant_postal_code',
        'permanant_phone',
        'permanant_country',
        'permanant_address',

        // father
        'father_name',
        'father_date_of_birth',
        'father_phone',
        'father_image',
        // mother
        'mother_name',
        'mother_date_of_birth',
        'mother_phone',
        'mother_image',
        // marital status
        'marital_Status',
        'spouse_name',
        'spouse_date_of_birth',
        'spouse_email',
        'spouse_phone',
        'spouse_image',
        // Siblings
        'siblings',
        'siblings_name',
        'siblings_date_of_birth',
        'siblings_email',
        'siblings_phone',
        'siblings_image',
    ];
}