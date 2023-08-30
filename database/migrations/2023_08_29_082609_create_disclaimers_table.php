<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisclaimersTable extends Migration
{
    public function up()
    {
        Schema::create('disclaimers', function (Blueprint $table) {
            $table->id();
            $table->date('expected_date_to_join');

            $table->string('current_salary')->nullable();

            $table->string('expected_salary')->nullable();

            $table->string('disclaimer_signature')->nullable();

            $table->date('disclaimer_date')->nullable();

            $table->time('disclaimer_time')->nullable();

            $table->string('disclaimer_print_name')->nullable();

            $table->string('disclaimer_place')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('disclaimers');
    }
}