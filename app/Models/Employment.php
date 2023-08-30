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
        'experiencecompany',
        'experienceemail',
        'experienceaddress',
        'experiencenumber',
        'experiencejobtitle',
        'experiencefromdate',
        'experiencetodate',
        'experienceyear',
        'experienceResponsibilities',
        // REFERENCE
        'referencename',
        'referencecompany',
        'referenceposition',
        'referenceemail',
        'referencephone',
        'referenceaddress',

        // second'',
        'nested-option',
        'crimeexplain',
        'eligiabletowork',
        'sub-nested-option',
        'nested-input-field',
    ];
}