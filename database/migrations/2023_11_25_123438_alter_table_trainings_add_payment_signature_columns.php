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
        Schema::table('trainings', function (Blueprint $table) {
            $table->string('signature')->nullable()->after('allow_edit');
            $table->string('date')->nullable()->after('allow_edit');
            $table->string('time')->nullable()->after('allow_edit');
            $table->string('print_name')->nullable()->after('allow_edit');
            $table->string('place')->nullable()->after('allow_edit');
            $table->string('payment_response')->nullable()->after('allow_edit');
            $table->string('payment_id')->nullable()->after('allow_edit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->dropColumn(['payment_response', 'payment_id', 'signature', 'date', 'time', 'print_name', 'place']);
        });
    }
};
