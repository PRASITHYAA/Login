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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();

            $table->string('radio_option');
            // high school

            $table->string('high_school_name')->nullable();
            $table->string('high_school_city')->nullable();
            $table->string('high_school_address')->nullable();
            $table->date('high_school_form_date')->nullable();
            $table->date('high_school_to_date')->nullable();
            $table->date('high_school_year_of_passing')->nullable();
            $table->float('high_school_percentage')->nullable();
            $table->string('high_school_class')->nullable();
            $table->string('high_school_stream')->nullable();
            $table->string('high_school_image_certificate')->nullable();
            $table->string('high_school_image_mark_sheet')->nullable();

            // higher secondary

            $table->string('higher_secondary_institution_name')->nullable();
            $table->string('higher_secondary_city')->nullable();
            $table->string('higher_secondary_address')->nullable();
            $table->date('higher_secondary_form_date')->nullable();
            $table->date('higher_secondary_to_date')->nullable();
            $table->date('higher_secondary_year_of_passing')->nullable();
            $table->decimal('higher_secondary_percentage', 5, 2)->nullable();
            $table->string('higher_secondary_class')->nullable();
            $table->string('higher_secondary_stream')->nullable();
            $table->string('higher_secondary_filed_of_interest')->nullable();
            $table->string('higher_secondary_image_certificate')->nullable();
            $table->string('higher_secondary_image_mark_sheet')->nullable();

            // diploma

            $table->string('diploma_institution_name')->nullable();
            $table->string('diploma_city')->nullable();
            $table->string('diploma_address')->nullable();
            $table->date('diploma_form_date')->nullable();
            $table->date('diploma_to_date')->nullable();
            $table->date('diploma_year_of_passing')->nullable();
            $table->decimal('diploma_percentage', 5, 2)->nullable();
            $table->string('diploma_diploma')->nullable();
            $table->string('diploma_major')->nullable();
            $table->string('diploma_filed_of_interest')->nullable();
            $table->string('diploma_image_certificate')->nullable();
            $table->string('diploma_image_mark_sheet')->nullable();


            // bachelors

            $table->string('bachelors_institution_name')->nullable();
            $table->string('bachelors_city')->nullable();
            $table->string('bachelors_address')->nullable();
            $table->date('bachelors_form_date')->nullable();
            $table->date('bachelors_to_date')->nullable();
            $table->date('bachelors_year_of_passing')->nullable();
            $table->decimal('bachelors_percentage', 5, 2)->nullable();
            $table->string('bachelors_course')->nullable();
            $table->string('bachelors_major')->nullable();
            $table->string('bachelors_filed_of_interest')->nullable();
            $table->string('bachelors_image_certificate')->nullable();
            $table->string('bachelors_image_mark_sheet')->nullable();

            // master

            $table->string('master_institution_name')->nullable();
            $table->string('master_city')->nullable();
            $table->string('master_address')->nullable();
            $table->date('master_from_date')->nullable();
            $table->date('master_to_date')->nullable();
            $table->date('master_years_of_passing')->nullable();
            $table->decimal('master_percentage', 5, 2)->nullable();
            $table->string('master_class')->nullable();
            $table->string('master_filed_of_specialization')->nullable();
            $table->string('master_filed_of_interest')->nullable();
            $table->string('master_image_certificate')->nullable();
            $table->string('master_image_mark_sheet')->nullable();
            // doctorate

            $table->string('doctorate_name')->nullable();
            $table->string('doctorate_city')->nullable();
            $table->string('doctorate_address')->nullable();
            $table->date('doctorate_from_date')->nullable();
            $table->date('doctorate_to_date')->nullable();
            $table->date('doctorate_year_of_passing')->nullable();
            $table->decimal('doctorate_percentage', 5, 2)->nullable();
            $table->string('doctorate_class')->nullable();
            $table->string('doctorate_filed_of_specialization')->nullable();
            $table->string('doctorate_filed_of_interest')->nullable();
            $table->string('doctorate_image_certificate')->nullable();
            $table->string('doctorate_image_mark_sheet')->nullable();
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