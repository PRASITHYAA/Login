<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sector_id');
            $table->unsignedBigInteger('position_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image')->nullable();
            $table->date('dob');
            $table->integer('age');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('alternative_phone')->nullable();
            $table->string('email');
            $table->string('fb_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('linked_link')->nullable();
            // permanent address
            $table->string('permanent_address_input');
            $table->string('permanent_city')->nullable();
            $table->string('permanent_postal_code')->nullable();
            $table->string('permanent_phone')->nullable();
            $table->string('permanent_country')->nullable();
            $table->string('permanent_address')->nullable();

            // father
            $table->string('father_name');
            $table->date('father_date_of_birth');
            $table->string('father_phone');
            $table->string('father_image')->nullable();
            // mother
            $table->string('mother_name');
            $table->date('mother_date_of_birth');
            $table->string('mother_phone');
            $table->string('mother_image')->nullable();
            // marital status
            $table->string('marital_status');
            $table->string('spouse_name')->nullable();
            $table->date('spouse_date_of_birth')->nullable();
            $table->string('spouse_email')->nullable();
            $table->string('spouse_phone')->nullable();
            $table->string('spouse_image')->nullable();
            //Siblings
            $table->string('siblings')->nullable();
            $table->string('siblings_name')->nullable();
            $table->date('siblings_date_of_birth')->nullable();
            $table->string('siblings_email')->nullable();
            $table->string('siblings_phone')->nullable();
            $table->string('siblings_image')->nullable();
            $table->timestamps();

            $table->foreign('sector_id')->references('id')->on('sectors');
            $table->foreign('position_id')->references('id')->on('positions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
