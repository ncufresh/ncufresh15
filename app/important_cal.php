<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class important_cal extends Model
{
    protected $fillable = ['shortDate', 'longDate', 'context', 'office'];
}
