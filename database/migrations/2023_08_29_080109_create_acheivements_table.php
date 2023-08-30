<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('achievement');

            $table->string('open_input');

            $table->string('conference')->nullable();

            $table->string('open_input_2');

            $table->string('final_year_project')->nullable();

            $table->string('project_document')->nullable();

            $table->string('extra_curricular_skills');

            $table->string('extra_curricular_skills_project_document')->nullable();

            $table->string('open_input_3');

            $table->string('yes_curriculum_pdf_format')->nullable();

            $table->string('open_input_4');

            $table->string('no_curriculum_explain')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
