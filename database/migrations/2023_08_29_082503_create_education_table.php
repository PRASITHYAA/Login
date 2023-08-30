<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            // high school
            $table->string('highschoolname');
            $table->string('highschoolcity');
            $table->string('highschooladdress');
            $table->date('highschoolformdate');
            $table->date('highschooltodate');
            $table->date('highschoolYearofPassing');
            $table->decimal('highschoolgpapercentage', 5, 2);
            $table->string('highschoolclass');
            $table->string('highschoolimagecertificate');
            $table->string('highschoolimagemarksheet');

            // higer secondary
            $table->string('highersecondaryinstitutionname');
            $table->string('highersecondarycity');
            $table->string('highersecondaryaddress');
            $table->date('highersecondaryformdate');
            $table->date('highersecondarytodate');
            $table->date('highersecondaryyearofpassing');
            $table->decimal('highersecondarygpapercentage', 5, 2);
            $table->string('highersecondaryclass');
            $table->string('highersecondarystream');
            $table->string('highersecondaryfiledofinterest');
            $table->string('highersecondaryimagecertificate');
            $table->string('highersecondaryimagemarksheet');

            // diploma
            $table->string('diplomainstitutionname');
            $table->string('diplomacity');
            $table->string('diplomaaddress');
            $table->date('diplomaformdate');
            $table->date('diplomatodate');
            $table->date('diplomayearofpassing');
            $table->decimal('diplomagpapercentage', 5, 2);
            $table->string('diplomadiploma');
            $table->string('diplomamajor');
            $table->string('diplomafiledofinterest');
            $table->string('diplomaimagecertificate')->nullable();
            $table->string('diplomaimagemarksheet')->nullable();

            // bachelors

            $table->string('bachelorsinstitutionname');
            $table->string('bachelorscity');
            $table->string('bachelorsaddress');
            $table->date('bachelorformdate');
            $table->date('bachelorstodate');
            $table->date('bachelorsyearofpassing');
            $table->decimal('bachelorsgpapercentage', 5, 2);
            $table->string('bachelorscourse');
            $table->string('bachelorsmajor');
            $table->string('bachelorsfiledofinterest');
            $table->string('bachelorsimagecertificate');
            $table->string('bachelorsimagemarksheet');

            // master

            $table->string('masterinstitutionname');
            $table->string('mastercity');
            $table->string('masteraddress');
            $table->date('masterfromdate');
            $table->date('mastertodate');
            $table->date('masteryearsofpassing');
            $table->decimal('masterpercentage', 5, 2);
            $table->string('masterclass');
            $table->string('masterfiledofspecialization');
            $table->string('masterfiledofinterest');
            $table->string('masterimagecertificate');
            $table->string('masterimagemarksheet');

            // doctorate

            $table->string('doctoratename');
            $table->string('doctoratecity');
            $table->string('doctorateaddress');
            $table->date('doctoratefromdate');
            $table->date('doctoratetodate');
            $table->date('doctorateyearofpassing');
            $table->decimal('doctoratepercentage', 5, 2);
            $table->string('doctorateclass');
            $table->string('doctoratefiledofspecialization');
            $table->string('doctoratefiledofinterest');
            $table->string('doctorateimagecertificate');
            $table->string('doctorateimagemarksheet');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};