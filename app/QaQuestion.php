<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QaQuestion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'qa_question';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category', 'title', 'content', 'solved', 'author_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
}
