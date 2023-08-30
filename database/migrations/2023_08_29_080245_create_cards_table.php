<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('aadhar_name');
            $table->string('aadhar_id_number');
            $table->string('aadhar_issued_country');
            $table->string('aadhar_issued_state');
            $table->string('aadhar_issued_place');
            $table->string('aadhar_image')->nullable();
            $table->string('aadhar_image_page')->nullable();
            // passport
            $table->string('passport_name');
            $table->string('passport_id_number');
            $table->date('paasport_issue_date');
            $table->date('passport_expired_date');
            $table->string('passport_issued_country');
            $table->string('passport_issued_state');
            $table->string('passport_issued_place');
            $table->string('passport_image_id')->nullable();
            $table->string('passport_image_id_page')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cards');
    }
}