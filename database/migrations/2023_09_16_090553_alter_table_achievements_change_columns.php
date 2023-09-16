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
            $table->renameColumn('Conference', 'conference');
            $table->renameColumn('`open-input`', 'conference_status');
            $table->renameColumn('`open-input-2`', 'final_year_project_status');
            $table->renameColumn('`open-input-3`', 'curriculum_status');
            $table->renameColumn('`open-input-4`', 'background_check_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('achievements', function (Blueprint $table) {
            $table->renameColumn('conference', 'Conference');
            $table->renameColumn('conference_status', '`open-input`');
            $table->renameColumn('final_year_project_status', '`open-input-2`');
            $table->renameColumn('curriculum_status', '`open-input-3`');
            $table->renameColumn('background_check_status', '`open-input-4`');
        });
    }
};
