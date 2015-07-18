<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Life extends Model
{
    //
    protected $table = 'lifes';
    protected $fillable = ['category','content','video'];
}
