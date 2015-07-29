<?php

use Illuminate\Database\Seeder;
use App\Calender;

class CalenderSeeder extends Seeder{
    public function run(){
		Calender::create([
			'title' => 'first',
			'content' => 'first',
			'event_date' => '0000-00-00',
			'previous_date' => '0000-00-00',
			'next_date' => '0000-00-00'
		]);
		Calender::create([
			'title' => 'last',
			'content' => 'last',
			'event_date' => '2016-12-31',
			'previous_date' => '0000-00-00',
			'next_date' => '0000-00-00'
			]);
    }
}
