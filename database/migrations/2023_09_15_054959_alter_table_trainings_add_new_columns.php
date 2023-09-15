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
            $table->string('eligible_to_work')->after('reference_address');
            $table->string('crime_status')->after('reference_address');
            $table->dropColumn('open-input');
            $table->string('previous_experience')->after('job_application_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employments', function (Blueprint $table) {
            $table->dropColumn('eligible_to_work');
            $table->dropColumn('crime_status');
            $table->dropColumn( 'previous_experience');
            $table->string('open-input')->after('job_application_id');
        });
    }
};
