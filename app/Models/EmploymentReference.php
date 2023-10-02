<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentReference extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'company', 'email', 'address', 'phone', 'position'];

}
