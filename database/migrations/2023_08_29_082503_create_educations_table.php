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
            $table->unsignedBigInteger('job_application_id');
            // high school
            $table->string('highschoolname')->nullable();
            $table->string('highschoolcity')->nullable();
            $table->string('highschooladdress')->nullable();
            $table->date('highschoolformdate')->nullable();
            $table->date('highschooltodate')->nullable();
            $table->date('highschoolYearofPassing')->nullable();
            $table->decimal('highschoolgpapercentage', 5, 2)->nullable();
            $table->string('highschoolclass')->nullable();
            $table->string('highschoolimagecertificate')->nullable();
            $table->string('highschoolimagemarksheet')->nullable();

            // higer secondary
            $table->string('highersecondaryinstitutionname')->nullable();
            $table->string('highersecondarycity')->nullable();
            $table->string('highersecondaryaddress')->nullable();
            $table->date('highersecondaryformdate')->nullable();
            $table->date('highersecondarytodate')->nullable();
            $table->date('highersecondaryyearofpassing')->nullable();
            $table->decimal('highersecondarygpapercentage', 5, 2)->nullable();
            $table->string('highersecondaryclass')->nullable();
            $table->string('highersecondarystream')->nullable();
            $table->string('highersecondaryfiledofinterest')->nullable();
            $table->string('highersecondaryimagecertificate')->nullable();
            $table->string('highersecondaryimagemarksheet')->nullable();

            // diploma
            $table->string('diplomainstitutionname')->nullable();
            $table->string('diplomacity')->nullable();
            $table->string('diplomaaddress')->nullable();
            $table->date('diplomaformdate')->nullable();
            $table->date('diplomatodate')->nullable();
            $table->date('diplomayearofpassing')->nullable();
            $table->decimal('diplomagpapercentage', 5, 2)->nullable();
            $table->string('diplomadiploma')->nullable();
            $table->string('diplomamajor')->nullable();
            $table->string('diplomafiledofinterest')->nullable();
            $table->string('diplomaimagecertificate')->nullable();
            $table->string('diplomaimagemarksheet')->nullable();

            // bachelors

            $table->string('bachelorsinstitutionname')->nullable();
            $table->string('bachelorscity')->nullable();
            $table->string('bachelorsaddress')->nullable();
            $table->date('bachelorformdate')->nullable();
            $table->date('bachelorstodate')->nullable();
            $table->date('bachelorsyearofpassing')->nullable();
            $table->decimal('bachelorsgpapercentage', 5, 2)->nullable();
            $table->string('bachelorscourse')->nullable();
            $table->string('bachelorsmajor')->nullable();
            $table->string('bachelorsfiledofinterest')->nullable();
            $table->string('bachelorsimagecertificate')->nullable();
            $table->string('bachelorsimagemarksheet')->nullable();

            // master

            $table->string('masterinstitutionname')->nullable();
            $table->string('mastercity')->nullable();
            $table->string('masteraddress')->nullable();
            $table->date('masterfromdate')->nullable();
            $table->date('mastertodate')->nullable();
            $table->date('masteryearsofpassing')->nullable();
            $table->decimal('masterpercentage', 5, 2)->nullable();
            $table->string('masterclass')->nullable();
            $table->string('masterfiledofspecialization')->nullable();
            $table->string('masterfiledofinterest')->nullable();
            $table->string('masterimagecertificate')->nullable();
            $table->string('masterimagemarksheet')->nullable();

            // doctorate

            $table->string('doctoratename')->nullable();
            $table->string('doctoratecity')->nullable();
            $table->string('doctorateaddress')->nullable();
            $table->date('doctoratefromdate')->nullable();
            $table->date('doctoratetodate')->nullable();
            $table->date('doctorateyearofpassing')->nullable();
            $table->decimal('doctoratepercentage', 5, 2)->nullable();
            $table->string('doctorateclass')->nullable();
            $table->string('doctoratefiledofspecialization')->nullable();
            $table->string('doctoratefiledofinterest')->nullable();
            $table->string('doctorateimagecertificate')->nullable();
            $table->string('doctorateimagemarksheet')->nullable();

            $table->timestamps();

            $table->foreign('job_application_id')->references('id')->on('job_applications');
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
