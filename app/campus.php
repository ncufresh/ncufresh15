<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $table = 'campus';
    protected $fillable = ['introduction', 'view_id', 'title', 'picName'];
}
