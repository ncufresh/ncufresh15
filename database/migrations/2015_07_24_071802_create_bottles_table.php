<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBottlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bottles', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('sent')->default(false);
            $table->integer('hp')->default(3);
            $table->string('content');
            $table->string('token')->default(bin2hex(openssl_random_pseudo_bytes(16)));
            $table->integer('answer')->default(-1);
            $table->integer('owner')->default(0);
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
        Schema::drop('bottles');
    }
}
