<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnQA extends Model{
	protected $table = "AnnQA";

	protected $fillable = [
		"url",
		"title"
	];
}
