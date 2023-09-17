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
            $table->unsignedBigInteger('sector_id');
            $table->string('course_level');
            $table->string('name');
            $table->string('course_Code');
            $table->date('from_date');
            $table->date('to_date');
            $table->time('time');
            $table->integer('duration');
            $table->string('course_location');
            $table->string('course_registration_fee');
            $table->text('course_description');
            $table->text('course_training_schedule');
            $table->text('eligible_to_participate');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course_titles', function (Blueprint $table) {
            $table->dropColumn('sector_id');
            $table->dropColumn('course_level');
            $table->dropColumn('name');
            $table->dropColumn('course_Code');
            $table->dropColumn('from_date');
            $table->dropColumn('to_date');
            $table->dropColumn('time');
            $table->dropColumn('duration');
            $table->dropColumn('course_location');
            $table->dropColumn('course_registration_fee');
            $table->dropColumn('course_description');
            $table->dropColumn('course_training_schedule');
            $table->dropColumn('eligible_to_participate');
        });
    }
};