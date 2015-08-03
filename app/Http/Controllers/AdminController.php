<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;
use App\Calender;
use App\AnnQA;
use Log;

class AdminController extends Controller{
	public function index($category = "announcement"){
		switch ($category){
			case "announcement":
				$cat = 1;
				$data = Announcement::all();
				break;
			case "qa":
				$cat = 2;
				$data = AnnQA::all();
				break;
			case "calender":
				$cat = 3;
				$data = Calender::where('event_date','<>','0000-00-00')
								->where('event_date','<>','2016-12-31')
								->get();
				break;
			default:
				abort(404);
		}
		return view('admin.index', [
			'data' => $data,
			'category' => $cat
		]);
	}
}
