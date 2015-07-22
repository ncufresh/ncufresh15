<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Calender;

class CalenderController extends Controller{
	public function get(Request $request){

	}
	public function store(Request $request){
		$pre_date = Calender::where('event_date','<',$request->date)
					->orderBy('event_date', 'desc')->first()->event_date;
		/*
		Calender::create([
			'title'=>$request->input('title'),
			'content'=>$request->input('content'),
			'event_date'=>$request->date
		]);
		 */
		return redirect('admin');
	}
	public function update(Request $request, $id){
		$cal = Calender::find($id);
		$cal->title = $request->title;
		$cal->content = $request->content;
		$cal->event_date = $request->date;
		$cal->save();
		return redirect('admin');
	}
	public function destroy($id){
		$cal = Calender::find($id);
		$cal->delete();
		return redirect('admin');
	}
}
