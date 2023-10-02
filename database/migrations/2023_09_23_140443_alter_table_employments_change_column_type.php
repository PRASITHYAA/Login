<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('employments', function (Blueprint $table) {
            $table->string('crime_status')->nullable(true)->change();
            $table->string('eligible_to_work')->nullable(true)->change();

            $table->dropColumn(['reference_name', 'reference_company', 'reference_position', 'reference_email', 'reference_phone', 'reference_address']);
            $table->dropColumn(['employer_company', 'employer_email', 'employer_address', 'employer_phone', 'employer_job_title', 'employer_from_date', 'employer_to_date', 'employer_experience', 'employer_responsibilities']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employments', function (Blueprint $table) {
            $table->string('crime_status')->nullable(false)->change();
            $table->string('eligible_to_work')->nullable(false)->change();

            $table->string('employer_company')->nullable()->after('previous_experience');
            $table->string('employer_email')->nullable()->after('previous_experience');
            $table->string('employer_address')->nullable()->after('previous_experience');
            $table->string('employer_phone')->nullable()->after('previous_experience');
            $table->string('employer_job_title')->nullable()->after('previous_experience');
            $table->date('employer_from_date')->nullable()->after('previous_experience');
            $table->date('employer_to_date')->nullable()->after('previous_experience');
            $table->text('employer_experience')->nullable()->after('previous_experience');
            $table->text('employer_responsibilities')->nullable()->after('previous_experience');
            $table->string('reference_name')->nullable()->after('previous_experience');
            $table->string('reference_company')->nullable()->after('previous_experience');
            $table->string('reference_position')->nullable()->after('previous_experience');
            $table->string('reference_email')->nullable()->after('previous_experience');
            $table->string('reference_phone')->nullable()->after('previous_experience');
            $table->string('reference_address')->nullable()->after('previous_experience');
        });
    }
};
