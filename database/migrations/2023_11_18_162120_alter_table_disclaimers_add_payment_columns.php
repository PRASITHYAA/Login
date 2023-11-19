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
        Schema::table('disclaimers', function (Blueprint $table) {
            $table->string('payment_response')->nullable()->after('disclaimer_place');
            $table->string('payment_id')->nullable()->after('disclaimer_place');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('disclaimers', function (Blueprint $table) {
            $table->dropColumn(['payment_response', 'payment_id']);
        });
    }
};
