<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decoration extends Model{
	protected $table = "decorations";

	protected $fillable = [
		"user_id",
		"chest",
		"sg1",
		"sg2",
		"shell",
		"level_food",
		"growth_food"
	];
}
