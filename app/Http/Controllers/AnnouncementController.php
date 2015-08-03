<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;

class AnnouncementController extends Controller{
	public function get($id = null){
		if ($id){
			$anns = Announcement::findOrFail($id);
			$type = "single";
		}else{
			$anns = Announcement::all();
			$type = "all";
		}
		return view('announcement',[
			'type'=>$type,
			'anns'=>$anns
		]);
	}

    public function store(Request $request){
		Announcement::create([
			'title'=>$request->title,
			'content'=>$request->content,
			'show_at'=>$request->date,
		]);
		return redirect('admin/announcement');
    }

    public function update(Request $request, $id){
		$ann = Announcement::find($id);
		$ann->title = $request->title;
		$ann->content = $request->content;
		$ann->show_at = $request->date;
		$ann->save();
		return redirect('admin/announcement');
    }

    public function destroy($id){
		$ann = Announcement::find($id);
		$ann->delete();
		return redirect('admin/announcement');
    }
}
