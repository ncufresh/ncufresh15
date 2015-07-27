<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    protected $table = 'knowledges';
    protected $fillable = ['question', 'option1', 'option2', 'option3', 'option4', 'answer'];
    protected $hidden = ['answer'];
}
