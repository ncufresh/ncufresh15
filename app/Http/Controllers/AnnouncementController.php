<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;

class AnnouncementController extends Controller{
	public function get($id = null){
		if ($id){
			$anns = Announcement::find($id);
			$type = "single";
		}else{
			$anns = Announcement::where('category',1)->get();
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
			'url'=>$request->url,
			'category'=>$request->category
		]);
		return redirect('admin');
    }

    public function update(Request $request, $id){
		$ann = Announcement::find($id);
		$ann->title = $request->title;
		$ann->content = $request->content;
		$ann->url = $request->url;
		$ann->category = $request->category;
		$ann->save();
		return redirect('admin');
    }

    public function destroy($id){
		$ann = Announcement::find($id);
		$ann->delete();
		return redirect('admin');
    }
}
