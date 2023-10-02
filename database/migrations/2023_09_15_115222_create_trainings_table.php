<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('trainings');

        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('sector');
            $table->string('course_level');
            $table->string('course_title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('passport_size_photo_upload')->nullable();
            $table->string('select_your_qualification');
            $table->string('choice1');
            $table->string('job_title')->nullable();
            $table->string('gender')->nullable();
            $table->integer('year_of_experience')->nullable();
            $table->string('address_line_1');
            $table->string('city');
            $table->string('zip_code');
            $table->string('address_line_2')->nullable();
            $table->string('state');
            $table->string('country');
            $table->string('choice2');
            $table->string('permanent_address_line_1')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_zip_code')->nullable();
            $table->string('permanent_address_line_2')->nullable();
            $table->string('permanent_state')->nullable();
            $table->string('permanent_country')->nullable();
            $table->string('primary_mobile_number');
            $table->string('primary_email');
            $table->string('secondary_mobile_number');
            $table->string('secondary_email')->nullable();
            $table->text('job_description');
            $table->text('training_session');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
