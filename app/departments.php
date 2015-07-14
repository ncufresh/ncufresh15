<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    protected $fillable = ['id', 'category', 'name', 'content'];
}
