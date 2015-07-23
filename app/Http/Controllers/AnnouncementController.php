<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;

class AnnouncementController extends Controller{
    public function store(Request $request){
		Announcement::create([
			'title'=>$request->input('title'),
			'url'=>$request->input('url'),
			'category'=>$request->input('category')
		]);
		return redirect('admin');
    }

    public function update(Request $request, $id){
		$ann = Announcement::find($id);
		$ann->title = $request->title;
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
