<?php namespace App;

use App\Department_pictures;

use Illuminate\Database\Eloquent\Model;

class Department_pictures extends Model
{
    protected $fillable = ['id', 'rfid', 'picName'];
}
