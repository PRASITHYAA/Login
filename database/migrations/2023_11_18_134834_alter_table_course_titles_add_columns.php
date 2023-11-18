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
            $table->text('who_should_attend')->after('course_description');
            $table->text('course_fee')->after('course_registration_fee');
            $table->time('end_time')->after('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course_titles', function (Blueprint $table) {
            $table->dropColumn(['who_should_attend', 'course_fee', 'end_time']);
        });
    }
};
