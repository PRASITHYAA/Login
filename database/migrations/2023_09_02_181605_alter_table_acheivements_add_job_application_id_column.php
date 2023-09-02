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
        Schema::table('achievements', function (Blueprint $table) {
            $table->unsignedBigInteger('job_application_id')->nullable()->after('id');
            $table->foreign('job_application_id')->references('id')->on('job_applications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('achievements', function (Blueprint $table) {
            $table->dropForeign('achievements_job_application_id_foreign');
            $table->dropColumn('job_application_id');
        });
    }
};
