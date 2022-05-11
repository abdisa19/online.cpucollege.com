<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOnlineApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_online_application', function (Blueprint $table) {
            $table->id();
            //Personall Information
            $table->string('firstName'); //1
            $table->string('secondName'); //1
            $table->string('lastName'); //1
            $table->date('dateOfBirth'); //1
            $table->string('sex'); //1
            $table->string('nationality'); //1


            $table->string('city'); //3
            $table->string('country'); //3
            $table->string('email')->unique(); //3
            $table->string('mobile'); //3
            //Enrollment Information
            $table->string('current_education_level');
            $table->string('current_education_department');
            $table->string('applying_program');
            $table->string('applying_department');
            $table->string('applying_enrollment');
            //Credentiall's
            $table->string('profile_ud_degree_file_path', 2048)->nullable();//4
            $table->string('profile_ud_transcript_file_path', 2048)->nullable();//4
            $table->string('profile_hs_transcript_file_path', 2048)->nullable();//4
            $table->string('profile_id_card_file_path', 2048)->nullable();//4
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_online_application');
    }
}
