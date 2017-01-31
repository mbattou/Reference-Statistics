<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentations', function (Blueprint $table) {
            $table->increments('id');                       //PK
            $table->time('length');
            $table->string('presenter');
            $table->integer('tot_participant');
            $table->date('date');
            $table->integer('location')->unsigned();        //FK
            $table->timestamps();                           //cteated_at and updated_at

            //FK Constraints:
            //$table->foreign('location')->references('id')->on('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentations');
    }
}
