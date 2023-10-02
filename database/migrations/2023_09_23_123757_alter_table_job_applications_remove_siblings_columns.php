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
        Schema::table('job_applications', function (Blueprint $table) {
            $table->dropColumn(['siblings_name', 'siblings_date_of_birth', 'siblings_email', 'siblings_phone', 'siblings_image']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_applications', function (Blueprint $table) {
            $table->string('siblings_name')->nullable()->after('siblings');
            $table->date('siblings_date_of_birth')->nullable()->after('siblings');
            $table->string('siblings_email')->nullable()->after('siblings');
            $table->string('siblings_phone')->nullable()->after('siblings');
            $table->string('siblings_image')->nullable()->after('siblings');
        });
    }
};
