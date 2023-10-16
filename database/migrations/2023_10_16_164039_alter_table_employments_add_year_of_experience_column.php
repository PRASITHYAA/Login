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
        Schema::table('employments', function (Blueprint $table) {
            $table->integer('year_of_experience')->default(0)->after('previous_experience');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employments', function (Blueprint $table) {
            $table->dropColumn('year_of_experience');
        });
    }
};
