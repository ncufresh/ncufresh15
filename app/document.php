<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
	protected $table = 'document';
    protected $fillable = ['page_id','page_id_2','page_id_3','text'];
}
