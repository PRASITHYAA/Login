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
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->string('open-input');

            // experience


            $table->string('experiencecompany');
            $table->string('experienceemail');
            $table->string('experienceaddress');
            $table->string('experiencenumber');
            $table->string('experiencejobtitle');
            $table->date('experiencefromdate');
            $table->date('experiencetodate');
            $table->year('experienceyear');
            $table->string('experienceResponsibilities');

            // REFERENCE
            $table->string('referencename');
            $table->string('referencecompany');
            $table->string('referenceposition');
            $table->string('referenceemail');
            $table->string('referencephone');
            $table->string('referenceaddress');

            $table->string('nested-option')->nullable();
            $table->text('crimeexplain')->nullable();

            $table->string('sub-nested-option')->nullable();
            $table->string('nested-input-field')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employments');
    }
};