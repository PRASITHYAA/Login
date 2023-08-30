<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentsTable extends Migration
{
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->string('open-input');
            
            $table->string('employer_company')->nullable();
            $table->string('employer_email')->nullable();
            $table->string('employer_address')->nullable();
            $table->string('employer_phone')->nullable();
            $table->string('employer_job_title')->nullable();
            $table->date('employer_from_date')->nullable();
            $table->date('employer_to_date')->nullable();
            $table->text('employer_experience')->nullable();
            $table->text('employer_responsibilities')->nullable();
            $table->string('reference_name')->nullable();
            $table->string('reference_company')->nullable();
            $table->string('reference_position')->nullable();
            $table->string('reference_email')->nullable();
            $table->string('reference_phone')->nullable();
            $table->string('reference_address')->nullable();
            $table->string('nested-option')->nullable();
            $table->string('sub-nested-input')->nullable();
            $table->string('sub-nested-option')->nullable();
            $table->string('nested-input-field')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employments');
    }
}
