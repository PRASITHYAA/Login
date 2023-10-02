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
        Schema::table('trainings', function (Blueprint $table) {
            $table->renameColumn('sector', 'sector_id');
            $table->renameColumn('course_level', 'course_level_id');
            $table->renameColumn('course_title', 'course_title_id');
            $table->renameColumn('passport_size_photo_upload', 'photo');
            $table->renameColumn('select_your_qualification', 'qualification');
            $table->renameColumn('choice1', 'experience_status');
            $table->renameColumn('choice2', 'address_status');
            $table->text('training_session')->nullable(true)->change();
        });
        Schema::table('trainings', function (Blueprint $table) {
            $table->unsignedBigInteger('sector_id')->change();
            $table->unsignedBigInteger('course_level_id')->change();
            $table->unsignedBigInteger('course_title_id')->change();
        });
        Schema::table('trainings', function (Blueprint $table) {
            $table->foreign('course_title_id')->references('id')->on('course_titles');
            $table->foreign('course_level_id')->references('id')->on('course_levels');
            $table->foreign('sector_id')->references('id')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->renameColumn('sector', 'sector_id');
            $table->renameColumn('course_level', 'course_level_id');
            $table->renameColumn('course_title', 'course_title_id');
            $table->renameColumn('passport_size_photo_upload', 'photo');
            $table->renameColumn('select_your_qualification', 'qualification');
            $table->renameColumn('choice1', 'experience_status');
            $table->renameColumn('choice2', 'address_status');
            $table->text('training_session')->nullable(true)->change();
        });
    }
};
