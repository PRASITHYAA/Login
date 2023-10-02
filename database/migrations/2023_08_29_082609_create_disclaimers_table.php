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
            $table->unsignedBigInteger('job_application_id');
            $table->date('expected_date_to_join');
            $table->string('current_salary')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('disclaimer_signature')->nullable();
            $table->string('disclaimer_date')->nullable();
            $table->string('disclaimer_time')->nullable();
            $table->string('disclaimer_print_name')->nullable();
            $table->string('disclaimer_place')->nullable();
            $table->timestamps();
            $table->foreign('job_application_id')->references('id')->on('job_applications');
        });
    }

    public function down()
    {
        Schema::dropIfExists('disclaimers');
    }
}
