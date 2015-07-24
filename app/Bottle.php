<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    protected $table = 'bottles';
    protected $fillabe = ['hp', 'content', 'token', 'answer', 'owner'];
}
