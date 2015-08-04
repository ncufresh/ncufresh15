<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackgroundTable extends Migration{

    public function up(){
		Schema::create('backgrounds', function(Blueprint $table){
			$table->increments('id');
			$table->integer('user_id');
			$table->boolean('bg1_1')->default(true);
			$table->boolean('bg1_2')->default(true);
			$table->boolean('bg1_3')->default(true);
			$table->boolean('bg1_4')->default(true);
			$table->boolean('bg2_1')->default(false);
			$table->boolean('bg2_2')->default(false);
			$table->boolean('bg2_3')->default(false);
			$table->boolean('bg2_4')->default(false);
			$table->boolean('bg3_1')->default(false);
			$table->boolean('bg3_2')->default(false);
			$table->boolean('bg3_3')->default(false);
			$table->boolean('bg3_4')->default(false);
			$table->boolean('bg4_1')->default(false);
			$table->boolean('bg4_2')->default(false);
			$table->boolean('bg4_3')->default(false);
			$table->boolean('bg4_4')->default(false);
			$table->timestamps();
		});
    }

    public function down(){
		Schema::drop('backgrounds');
    }
}
