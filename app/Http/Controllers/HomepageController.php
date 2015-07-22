<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;
use App\Calender;

class HomepageController extends Controller{

	public function index(){
		$anns = Announcement::all();
		return view('index', [
			"announcements" => $anns,
		]);
	}
}
