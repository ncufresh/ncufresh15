<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveAnnounceTableColumn extends Migration{
    public function up(){
		Schema::create('AnnQA', function(Blueprint $table){
			$table->increments('id');
			$table->string('url');
			$table->string('title');
			$table->timestamps();
		});

		Schema::table('announcements', function($table){
			$table->dropColumn("url");
			$table->dropColumn("category");
			$table->date("show_at");
		});
    }
    public function down(){
		Schema::drop('AnnQA');
		Schema::table('announcements', function($table){
			$table->string("url");
			$table->integer("category");
			$table->dropColumn("show_at");
		});
    }
}
