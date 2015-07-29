<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;
use App\Calender;
use Log;

class AdminController extends Controller{
	public function index(){
		$anns = Announcement::all();
		$cals = Calender::where('event_date','<>', '0000-00-00')
						->where('event_date', '<>', '2016-12-31')
						->get();
		return view('admin.index', [
			'announcements' => $anns,
			'calenders' => $cals
		]);
	}
}
