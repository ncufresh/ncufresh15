<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Calender;

class CalenderController extends Controller{
	public function get(Request $request){
		$now = $next1 = $next2 = NULL;
		$pre = Calender::where('event_date', '<', $request->date)
						->orderBy('event_date', 'desc')
						->first();
		if ($pre->event_date == '0000-00-00'){
			$pre = NULL;
		}

		$now = Calender::whereBetween('event_date', array($request->date, '2016-12-30'))
						->orderBy('event_date', 'asc')
						->first();
		if ($now){
			$next1 = Calender::where('event_date', $now->next_date)
						->where('event_date', '<>', '2016-12-31')
						->first();
			if ($next1) {
				$next2 = Calender::where('event_date', $next1->next_date)
						->where('event_date', '<>', '2016-12-31')
						->first();
			}
		}
		//return "pre:".$pre."\nnow:".$now."\nnext1:".$next1."\nnext2".$next2;
		//return response()->json($now);
	}
	public function store(Request $request){
		$pre_date = $this->getPreviousDate($request->date);
		$next_date = $this->getNextDate($request->date);
		Calender::create([
			'title'=>$request->input('title'),
			'content'=>$request->input('content'),
			'event_date'=>$request->date,
			'previous_date'=>$pre_date,
			'next_date'=>$next_date
		]);
		$this->updateNearDate($request->date, $request->date, $pre_date, $next_date);
		return redirect('admin');
	}

	public function update(Request $request, $id){
		$cal = Calender::find($id);
		$cal->title = $request->title;
		$cal->content = $request->content;
		if ($cal->event_date != $request->date) {
			$pre_date = $this->getPreviousDate($request->date);
			$next_date = $this->getNextDate($request->date);
			$pre_date_ori = $this->getPreviousDate($cal->event_date);
			$next_date_ori = $this->getNextDate($cal->event_date);
			$cal->event_date = $request->date;
			$cal->previous_date = $pre_date;
			$cal->next_date = $next_date;
			$this->updateNearDate($request->date, $request->date, $pre_date, $next_date);
			$this->updateNearDate($next_date_ori, $pre_date_ori, $pre_date_ori, $next_date_ori);
		}
		$cal->save();
		return redirect('admin');
	}

	public function destroy($id){
		$cal = Calender::find($id);
		$date = $cal->event_date;
		$pre_date = $this->getPreviousDate($date);
		$next_date = $this->getNextDate($date);
		$cal->delete();
		$this->updateNearDate($next_date, $pre_date, $pre_date, $next_date);
		return redirect('admin');
	}

	public function getPreviousDate($now){
		$cal = Calender::where('event_date', '<', $now)->orderBy('event_date', 'desc')->first();
		return $cal->event_date;
	}

	public function getNextDate($now){
		$cal = Calender::where('event_date', '>', $now)->orderBy('event_date', 'asc')->first();
		return $cal->event_date;
	}

	public function updateNearDate($pre_new, $next_new, $pre, $next){
		Calender::where('event_date', '=', $pre)->update(['next_date'=>$pre_new]);
		Calender::where('event_date', '=', $next)->update(['previous_date'=>$next_new]);
	}
}
