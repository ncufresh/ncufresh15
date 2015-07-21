<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
	protected $table = 'document';
    protected $fillable = ['content'];
}
