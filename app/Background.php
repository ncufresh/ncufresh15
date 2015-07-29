<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model{
	protected $table = "backgrounds";

	protected $fillable = ["user_id",
		"bg1_1", "bg1_2", "bg1_3", "bg1_4",
		"bg2_1", "bg2_2", "bg2_3", "bg2_4",
		"bg3_1", "bg3_2", "bg3_3", "bg3_4",
		"bg4_1", "bg4_2", "bg4_3", "bg4_4",
	];
}
