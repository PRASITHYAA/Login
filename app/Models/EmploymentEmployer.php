<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentEmployer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address', 'phone', 'job_title', 'from_date', 'to_date', 'experience', 'responsibilities'];
}
