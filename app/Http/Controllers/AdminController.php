<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;

class AdminController extends Controller{
	public function index(){
		return view('admin.index');
	}

	public function storeAnn(Request $request){
		Announcement::create([
			'title'=>$request->input('title'),
			'url'=>$request->input('url'),
			'category'=>$request->input('category')
		]);
		return redirect('admin/');
	}
}
