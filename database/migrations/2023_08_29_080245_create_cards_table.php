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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('aadharname');
            $table->string('aadharidnumber');
            $table->string('aadharissuedplace');
            $table->string('aadharissuedstate');
            $table->string('aadharissuedcountry');
            $table->string('aadharimage')->nullable();
            $table->string('aadharimagepage')->nullable();
            // passport
            $table->string('passportname');
            $table->string('passportidnumber');
            $table->date('passportexpireddate');
            $table->date('paasportissueddate');
            $table->string('passportissuedplace');
            $table->string('passportissuedstate');
            $table->string('passportissuedcountry');
            $table->string('passportimageid')->nullable();
            $table->string('passportimageidpage')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};