<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('studentfees', function (Blueprint $table) {
            $table->increments('s_fee_id')->unsigned();
            $table->integer('fee_id');
            $table->integer('student_id');
            $table->integer('level_id');
            $table->float('amount');
            $table->timestamps();            
            //
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('studentfees');
    }
}
