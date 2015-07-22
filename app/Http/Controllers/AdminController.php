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
		$cals = Calender::all();
		return view('admin.index', [
			'announcements' => $anns,
			'calenders' => $cals
		]);
	}
}
