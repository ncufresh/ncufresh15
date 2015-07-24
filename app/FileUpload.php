<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = 'files';
    protected $fillable = ['name', 'ext', 'url', 'is_img'];
}
