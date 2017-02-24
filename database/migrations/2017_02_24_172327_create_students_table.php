<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('sex');
            $table->date('dob');   
            $table->string('email'); 
            $table->string('rac');
            $table->boolean('status');
            $table->string('natinality');
            $table->string('national_card');   
            $table->string('passport');               
            $table->integer('phone');   
            $table->string('village'); 
            $table->string('cummune');
            $table->string('district');
            $table->string('province');
            $table->string('current_address');   
            $table->date('dateregistered');
            $table->string('photo');
            $table->integer('user_id');               
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
        Schema::dropIfExists('students');
    }
}
