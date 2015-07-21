<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;

class AdminController extends Controller{
	public function index(){
		$anns = Announcement::all();
		return view('admin.index', [
			'announcements' => $anns
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
}
