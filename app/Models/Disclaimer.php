<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disclaimer extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'Expectedatetojoin',

        'CurrentSalary',

        'ExpectedSalary',

         'Signature',

         'place',
];
}