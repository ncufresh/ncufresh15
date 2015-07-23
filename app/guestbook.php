<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guestbook extends Model
{
	protected $table = "guestbook";

    protected $fillable = ['name', 'comment', 'id'];

}
