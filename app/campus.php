<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class campus extends Model
{
	protected $table = 'campus';
    protected $fillable = ['introduction', 'view_id'];
}
