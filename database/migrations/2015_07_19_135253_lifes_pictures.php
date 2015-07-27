<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LifesPictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::drop('pictures');
        Schema::create('lifes_pictures',function(Blueprint $table) {
            $table->increments('id');
            $table->integer('lifes_id');
            $table->text('url');
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
       Schema::create('pictures',function(Blueprint $table) {
            $table->increments('id');
            $table->integer('ref_id');
            $table->string('name');
            $table->timestamps();
        });       
       Schema::drop('life_pictures');
    }
}
