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
        Schema::table('course_levels', function (Blueprint $table) {
            $table->unsignedBigInteger('sector_id')->after('id');
            $table->foreign('sector_id')->references('id')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course_levels', function (Blueprint $table) {
            $table->dropForeign('course_levels_sector_id_foreign');
            $table->dropColumn('sector_id');
        });
    }
};
