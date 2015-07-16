<?php namespace App;

use App\departments;

use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    protected $fillable = ['id', 'category', 'name', 'content'];
}