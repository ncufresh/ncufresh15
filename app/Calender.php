<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calender extends Model{
	protected $table = 'calenders';
	protected $fillable = ['title','content', 'previous_date', 'next_date', 'event_date', 'date_event_number'];
}
