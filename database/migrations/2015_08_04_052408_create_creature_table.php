<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatures', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->default(0);
            $table->integer('level1')->default(0);
            $table->integer('color1')->default(0);
            $table->integer('size1')->default(0);
            $table->integer('level2')->default(0);
            $table->integer('color2')->default(0);
            $table->integer('size2')->default(0);
            $table->integer('level3')->default(0);
            $table->integer('color3')->default(0);
            $table->integer('size3')->default(0);
            $table->integer('level4')->default(0);
            $table->integer('color4')->default(0);
            $table->integer('size4')->default(0);
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
        Schema::drop('creatures');
    }
}
