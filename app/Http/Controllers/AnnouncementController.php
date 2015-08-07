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
			'content'=>$this->sanitize($request->content),
			'show_at'=>$request->date,
		]);
		return redirect('admin/announcement');
    }

    public function update(Request $request, $id){
		$ann = Announcement::find($id);
		$ann->title = $request->title;
		$ann->content = $this->sanitize($request->content);
		$ann->show_at = $request->date;
		$ann->save();
		return redirect('admin/announcement');
    }

    public function destroy($id){
		$ann = Announcement::find($id);
		$ann->delete();
		return redirect('admin/announcement');
    }

	private function sanitize($dirty) {
		return strip_tags($dirty,
			'<img><table><thead><tbody><tr><td><th><h1><h2><h3><pre><ins><a><p><s><strong><em><span><ul><ol><li><blockquote>'
		);
	}
}
