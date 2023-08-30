<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = ['aadharname',
     'aadharidnumber',
      'aadharissuedplace',
      'aadharissuedstate',
      'aadharissuedcountry',
      'aadharimage',
      'aadharimagepage',
    //   passport
      'passportname',
      'passportidnumber',
      'passportexpireddate',
      'paasportissueddate',
      'passportissuedplace',
      'passportissuedstate',
      'passportissuedcountry',
      'passportimageid',
       'passportimageidpage',
];
}