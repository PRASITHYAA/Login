<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sibling extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['job_application_id', 'name', 'dob', 'email', 'phone', 'photo'];
}
