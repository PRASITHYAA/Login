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
            $table->string('sector');
            $table->string('postion');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('image')->nullable();
            $table->date('dob');
            $table->integer('age');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->string('postalcode');
            $table->string('phone');
            $table->string('alternativephone');
            $table->string('email');
            $table->string('fblink');
            $table->string('instalink');
            $table->string('linkedlink');
            $table->string('permanantaddress');
            $table->string('Permanantcity')->nullable();
            $table->string('Permanantpostalcode')->nullable();
            $table->string('fathername');
            $table->date('fatherdateofbirth');
            $table->string('fatherphone');
            $table->string('fatherimage')->nullable();
            $table->string('mothername');
            $table->date('motherdateofbirth');
            $table->string('motherphone');
            $table->string('motherimage')->nullable();
            $table->string('maritalStatus');
            $table->string('spousename')->nullable();
            $table->date('spousedateofbirth')->nullable();
            $table->string('spouseemail')->nullable();
            $table->string('spousephone')->nullable();
            $table->string('spouseimage')->nullable();
            $table->string('Siblings');
            $table->string('siblingsname')->nullable();
            $table->date('siblingsdateofbirth')->nullable();
            $table->string('siblingsemail')->nullable();
            $table->string('siblingsphone')->nullable();
            $table->string('siblingsimage')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}