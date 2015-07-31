<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecorationTable extends Migration{

    public function up(){
		Schema::create('decorations', function(Blueprint $table){
			$table->increments('id');
			$table->integer('user_id');
			$table->boolean('chest')->default(false);
			$table->boolean('sg1')->default(false);
			$table->boolean('sg2')->default(false);
			$table->boolean('shell')->default(false);
			$table->integer('level_food')->default(0);
			$table->integer('growth_food')->default(0);
			$table->timestamps();
		});
    }

    public function down(){
		Schema::drop('decorations');

    }
}
