<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LifePictures extends Model
{
    //
    protected $table = 'lifes_pictures';
    protected $fillable = ['lifes_id','url'];
}
