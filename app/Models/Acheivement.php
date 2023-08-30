<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acheivement extends Model
{
    use HasFactory;
    protected $fillable = [
        'acheivements',
        'open-input',
        'Conference',
        'open-input-2',
        'finalyearproject',
        'projectdocument',
        'curricularskills',
        'curricularskillsprojectdocument',
        'open-input-3',
        'resumepfdformate',
        'open-input-4',
        'exampletextarea',
];
}