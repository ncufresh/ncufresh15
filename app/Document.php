<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	protected $table = 'document';
    protected $fillable = ['page_id','page_id_2','catagory','title','content'];
}
