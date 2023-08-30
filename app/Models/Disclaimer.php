<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disclaimer extends Model
{
    use HasFactory;

    protected $fillable = [

        'expected_date_to_join',

        'current_salary',

        'expected_salary',

         'disclaimer_signature',

         'disclaimer_date',

         'disclaimer_time',

         'disclamer_print_name',

         'disclaimer_place',
];
}
