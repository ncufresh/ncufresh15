<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model
{
	protected $table = "guestbook";

    protected $fillable = ['name', 'comment'];

}
