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

            $table->string('radio_option');
            // high school

            $table->string('high_school_name');
            $table->string('high_school_city');
            $table->string('high_school_address');
            $table->date('high_school_form_date');
            $table->date('high_school_to_date');
            $table->date('high_school_year_of_passing');
            $table->float('high_school_percentage');
            $table->string('high_school_class');
            $table->string('high_school_stream');
            $table->string('high_school_image_certificate');
            $table->string('high_school_image_mark_sheet');

            // higher secondary

            $table->string('higher_secondary_institution_name');
            $table->string('higher_secondary_city');
            $table->string('higher_secondary_address');
            $table->date('higher_secondary_form_date');
            $table->date('higher_secondary_to_date');
            $table->date('higher_secondary_year_of_passing');
            $table->decimal('higher_secondary_percentage', 5, 2);
            $table->string('higher_secondary_class');
            $table->string('higher_secondary_stream');
            $table->string('higher_secondary_filed_of_interest');
            $table->string('higher_secondary_image_certificate');
            $table->string('higher_secondary_image_mark_sheet');

            // diploma

            $table->string('diploma_institution_name');
            $table->string('diploma_city');
            $table->string('diploma_address');
            $table->date('diploma_form_date');
            $table->date('diploma_to_date');
            $table->date('diploma_year_of_passing');
            $table->decimal('diploma_percentage', 5, 2);
            $table->string('diploma_diploma');
            $table->string('diploma_major');
            $table->string('diploma_filed_of_interest');
            $table->string('diploma_image_certificate')->nullable();
            $table->string('diploma_image_mark_sheet')->nullable();


            // bachelors

            $table->string('bachelors_institution_name');
            $table->string('bachelors_city');
            $table->string('bachelors_address');
            $table->date('bachelors_form_date');
            $table->date('bachelors_to_date');
            $table->date('bachelors_year_of_passing');
            $table->decimal('bachelors_percentage', 5, 2);
            $table->string('bachelors_course');
            $table->string('bachelors_major');
            $table->string('bachelors_filed_of_interest');
            $table->string('bachelors_image_certificate');
            $table->string('bachelors_image_mark_sheet');

            // master

            $table->string('master_institution_name');
            $table->string('master_city');
            $table->string('master_address');
            $table->date('master_from_date');
            $table->date('master_to_date');
            $table->date('master_years_of_passing');
            $table->decimal('master_percentage', 5, 2);
            $table->string('master_class');
            $table->string('master_filed_of_specialization');
            $table->string('master_filed_of_interest');
            $table->string('master_image_certificate');
            $table->string('master_image_mark_sheet');
            // doctorate

            $table->string('doctorate_name');
            $table->string('doctorate_city');
            $table->string('doctorate_address');
            $table->date('doctorate_from_date');
            $table->date('doctorate_to_date');
            $table->date('doctorate_year_of_passing');
            $table->decimal('doctorate_percentage', 5, 2);
            $table->string('doctorate_class');
            $table->string('doctorate_filed_of_specialization');
            $table->string('doctorate_filed_of_interest');
            $table->string('doctorate_image_certificate');
            $table->string('doctorate_image_mark_sheet');
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