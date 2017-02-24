<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('fees', function (Blueprint $table) {
            $table->increments('fee_id')->unsigned();
            $table->integer('level_id');
            $table->integer('academic_id');
            $table->string('fee_heading');
            $table->integer('fee_type_id');
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
        Schema::dropIfExists('fees');
    }
}
