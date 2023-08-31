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
            $table->string('aadhar_name')->nullable();
            $table->string('aadhar_id_number')->nullable();
            $table->string('aadhar_issued_country')->nullable();
            $table->string('aadhar_issued_state')->nullable();
            $table->string('aadhar_issued_place')->nullable();
            $table->string('aadhar_image')->nullable();
            $table->string('aadhar_image_page')->nullable();
            // passport
            $table->string('passport_name')->nullable();
            $table->string('passport_id_number')->nullable();
            $table->date('paasport_issue_date')->nullable();
            $table->date('passport_expired_date')->nullable();
            $table->string('passport_issued_country')->nullable();
            $table->string('passport_issued_state')->nullable();
            $table->string('passport_issued_place')->nullable();
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
