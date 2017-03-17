<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');                                   //PK
            $table->integer('category')->unsigned()->unsigned();        //FK
            $table->integer('subcategory')->nullable()->unsigned();     //FK
            $table->integer('location')->unsigned();                    //
            $table->string('person');      
            //$table->integer('code')->nullable()->unsigned();            //FK, check if it should be nullable
            $table->timestamps();                                       //created_at and updated_at
                    
            //FK Constraints:
            //$table->foreign('category')->references('id')->on('cats');
            //$table->foreign('subcategory')->references('id')->on('subcats');
            //$table->foreign('location')->references('id')->on('locations');
            //$table->foreign('code')->references('id')->on('codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
