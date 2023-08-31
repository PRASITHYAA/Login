<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_application_id',
        'radioOption',
        // high school

        'highschoolname',
        'highschoolcity',
        'highschooladdress',
        'highschoolformdate',
        'highschooltodate',
        'highschoolYearofPassing',
        'highschoolgpapercentage',
        'highschoolclass',
        'highschoolcurriculum',
        'highschoolimagecertificate',
        'highschoolimagemarksheet',

        // Higher Secondary

        'highersecondaryinstitutionname',
        'highersecondarycity',
        'highersecondaryaddress',
        'highersecondaryformdate',
        'highersecondarytodate',
        'highersecondaryyearofpassing',
        'highersecondarygpapercentage',
        'highersecondaryclass',
        'highersecondarystream',
        'highersecondaryfiledofinterest',
        'highersecondaryimagecertificate',
        'highersecondaryimagemarksheet',

        // Diploma

        'diplomainstitutionname',
        'diplomacity',
        'diplomaaddress',
        'diplomaformdate',
        'diplomatodate',
        'diplomayearofpassing',
        'diplomagpapercentage',
        'diplomadiploma',
        'diplomamajor',
        'diplomafiledofinterest',
        'diplomaimagecertificatePreview',
        'diplomaimagemarksheet',

        // Bachelors

        'bachelorsinstitutionname',
        'bachelorscity',
        'bachelorsaddress',
        'bachelorformdate',
        'bachelorstodate',
        'bachelorsyearofpassing',
        'bachelorsgpapercentage',
        'bachelorscourse',
        'bachelorsmajor',
        'bachelorsfiledofinterest',
        'bachelorsimagecertificate',
        'bachelorsimagemarksheet',

        // master

        'masterinstitutionname',
        'mastercity',
        'masteraddress',
        'masterfromdate',
        'mastertodate',
        'masteryearsofpassing',
        'masterpercentage',
        'masterclass',
        'masterfiledofspecialization',
        'masterfiledofinterest',
        'masterimagecertificate',
        'masterimagemarksheet',

// doctorate

        'doctoratename',
        'doctoratecity',
        'doctorateaddress',
        'doctoratefromdate',
        'doctoratetodate',
        'doctorateyearofpassing',
        'doctoratepercentage',
        'doctorateclass',
        'doctoratefiledofspecialization',
        'doctoratefiledofinterest',
        'doctorateimagecertificate',
        'doctorateimagemarksheet',
    ];
}
