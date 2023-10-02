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
        Schema::table('course_titles', function (Blueprint $table) {
            $table->renameColumn('course_Code', 'course_code');
            $table->renameColumn('course_level', 'course_level_id');
        });
        Schema::table('course_titles', function (Blueprint $table) {
            $table->unsignedBigInteger('course_level_id')->change();
            $table->foreign('course_level_id')->references('id')->on('course_levels');
            $table->foreign('sector_id')->references('id')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course_titles', function (Blueprint $table) {
            $table->dropForeign('course_titles_sector_id_foreign');
            $table->dropForeign('course_titles_course_level_id_foreign');
        });
        Schema::table('course_titles', function (Blueprint $table) {
            $table->renameColumn('course_code', 'course_Code');
            $table->renameColumn('course_level_id', 'course_level');
        });
    }
};
