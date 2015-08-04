<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;
use App\Calender;
use App\AnnQA;

class HomepageController extends Controller{

	public function index(){
		$now = date('y-m-d', time());
		$anns = Announcement::where('show_at', '<=', $now)
							->orderBy('show_at', 'desc')
							->get();
		$annqas = AnnQA::all();
		return view('index', [
			"announcements" => $anns,
			"annqas" => $annqas
		]);
	}
}
