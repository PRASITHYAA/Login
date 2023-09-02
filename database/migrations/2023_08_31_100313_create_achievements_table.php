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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('job_application_id');

             $table->string('achievement');

            $table->string('open-input');
             $table->string('Conference')->nullable();

            $table->string('open-input-2');
            $table->string('final_year_project')->nullable();
            $table->string('project_document')->nullable();

            $table->string('extra_curricular_skills');
            $table->string('extra_curricular_skills_project_document')->nullable();

            $table->string('open-input-3');
            $table->string('yes_curriculum_pdf_format')->nullable();

            $table->string('open-input-4');
            $table->string('no_curriculum_explain')->nullable();

            $table->timestamps();
            // $table->foreign('job_application_id')->references('id')->on('job_applications');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
