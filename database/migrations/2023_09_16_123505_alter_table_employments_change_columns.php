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
            $table->renameColumn('`nested-option`', 'eligible_to_work_text');
            $table->renameColumn('`sub-nested-input`', 'crime_status_text');
            $table->dropColumn('sub-nested-option');
            $table->dropColumn('nested-input-field');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employments', function (Blueprint $table) {
            $table->renameColumn('eligible_to_work_text', '`nested-option`');
            $table->renameColumn('crime_status_text', '`sub-nested-input`');
            $table->string('sub-nested-option')->nullable();
            $table->string('nested-input-field')->nullable();
        });
    }
};
