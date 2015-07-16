<?php namespace App;

use App\department_pictures;

use Illuminate\Database\Eloquent\Model;

class department_pictures extends Model
{
    protected $fillable = ['id', 'rfid', 'picName'];
}
