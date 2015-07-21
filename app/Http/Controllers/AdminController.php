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

	public function storeAnn(Request $request){
		Announcement::create([
			'title'=>$request->input('title'),
			'url'=>$request->input('url'),
			'category'=>$request->input('category')
		]);
		return redirect('admin');
	}

	public function updateAnn(Request $request, $id){
		$ann = Announcement::find($id);
		$ann->title = $request->title;
		$ann->url = $request->url;
		$ann->category = $request->category;
		$ann->save();
		return redirect('admin');
	}

	public function deleteAnn(Request $request, $id){
		$ann = Announcement::find($id);
		$ann->delete();
		return redirect('admin');
	}

	public function storeCal(Request $request){
		//Log::info("date:".$request->date.".");
		Calender::create([
			'title'=>$request->input('title'),
			'content'=>$request->input('content'),
			'event_date'=>$request->date
		]);
		return redirect('admin');
	}

	public function updateCal(Request $request, $id){
		$cal = Calender::find($id);
		$cal->title = $request->title;
		$cal->content = $request->content;
		$cal->event_date = $request->date;
		$cal->save();
		return redirect('admin');
	}

	public function deleteCal(Request $request, $id){
		$cal = Calender::find($id);
		$cal->delete();
		return redirect('admin');
	}
}
