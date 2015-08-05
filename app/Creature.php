<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    protected $table = 'creatures';
    protected $fillable = ['user_id', 
      'level1', 'color1', 'size1',
      'level2', 'color2', 'size2',
      'level3', 'color3', 'size3',
      'level4', 'color4', 'size4'
    ];
}
