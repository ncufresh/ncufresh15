<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementTable extends Migration{
    public function up(){
		Schema::create('announcements', function(Blueprint $table){
			$table->increments('id');
			$table->string('title');
			$table->string('url');
			$table->integer('category');
			$table->timestamps();
		});
    }

    public function down(){
		Schema::drop('announcements');
    }
}
