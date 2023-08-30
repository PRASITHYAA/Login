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
        'firstname',
        'lastname',
        'image',
        'dob',
        'age',
        'country',
        'state',
        'city',
        'address',
        'postalcode',
        'phone',
        'alternativephone',
        'email',
        'fblink',
        'instalink',
        'linkedlink',
// permanantaddress
        'permanantaddress',
        'Permanantcity',
        'Permanantpostalcode',
        // father
        'fathername',
        'fatherdateofbirth',
        'fatherphone',
        'fatherimage',
        // mother
        'mothername',
        'motherdateofbirth',
        'motherphone',
        'motherimage',
        // marital status
        'maritalStatus',
        'spousename',
        'spousedateofbirth',
        'spouseemail',
        'spousephone',
        'spouseimage',
        // Siblings
        'Siblings',
        'siblingsname',
        'siblingsdateofbirth',
        'siblingsemail',
        'siblingsphone',
        'siblingsimage',
    ];
}