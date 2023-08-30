<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('acheivements', function (Blueprint $table) {
            $table->id();

            $table->string('acheivements');

            $table->boolean('open-input');

            $table->string('Conference')->nullable();

            $table->boolean('open-input-2');

            $table->string('finalyearproject')->nullable();

            $table->string('projectdocument')->nullable();

            $table->string('curricularskills');

            $table->string('curricularskillsprojectdocument')->nullable();

            $table->boolean('open-input-3');

            $table->string('resumepfdformate')->nullable();

            $table->boolean('open-input-4');

            $table->string('exampletextarea')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acheivements');
    }
};