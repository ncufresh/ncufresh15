<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAnnouncementTable extends Migration{
    public function up(){
		Schema::table('announcements', function($table){
			$table->text('content');
		});
    }

    public function down(){
		Schema::table('announcements', function($table){
			$table->dropColumn('content');
		});
    }
}
