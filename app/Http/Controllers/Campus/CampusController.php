<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use Log;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Campus;
use Illuminate\Support\Facades\Input;
use Validator;

class CampusController extends Controller
{
    public function index(){
    	$campus = Campus::all();
		return view('campus.campus')->with('campus', $campus);
	}

	public function addView(){
		$campus = Campus::all();
		return view('campus.addView')->with('campus', $campus);
	}

	public function store(Request $request){
		$campus = Campus::all();
		$validator = Validator::make($request->all(),[
			'image_name' => 'required|image',
			'view_id' => 'required|integer',
			'region_id' => 'required|integer',
			'title' => 'required|string',
			'introduction' => 'required|string'
		]);
		if($validator->fails())
		{
			return view('campus.addView')->with(['error'=>"*輸入有錯誤", 'campus'=>$campus]);
		}

		$view_id = $request->view_id;
		$region_id = $request->region_id;
		$title = $request->title;
		$introduction = $request->introduction;
		$file = Input::file('image_name');
		$rows = Campus::where('title', $title)->count();
		if($rows!=0)
		{
			return view('campus.addView')->with(['error'=>"*已有此項目", 'campus'=>$campus]);
		}
		else if($file!=null)
		{
			$destinationPath = "uploads\campus";
			$filename = uniqid()."_".$file->getClientOriginalName();
			while (file_exists($destinationPath."\\".$filename))
			{
	       	    $filename = uniqid()."_".$filename;
	       	}
			$file_success=$file->move($destinationPath, $filename);

			Campus::create(['introduction'=>$introduction, 'view_id'=>$view_id,
				'title'=>$title, 'picName'=>$filename, 'region_id'=>$region_id]);
		}
		else
		{
			Campus::create(['introduction'=>$introduction, 'view_id'=>$view_id,
				'title'=>$title, 'picName'=>"", 'region_id'=>$region_id]);
		}

		$id = Campus::where('title', $title)->value('id');
		return redirect('/campus/'.$id);
	}

	public function showView($id){
		$campus = Campus::all();
    	$view = Campus::where('id', $id)->first();
		return view('campus.showView')->with(['campus'=>$campus, 'view'=>$view]);
	}

	public function editView($id){
		$campus = Campus::all();
		$view = Campus::where('id', $id)->first();
		return view('campus.editView')->with(['campus'=>$campus, 'view'=>$view]);
	}

	public function update(Request $request, $id){
		$campus = Campus::all();
		$validator = Validator::make($request->all(),[
			'image_name' => 'image',
			'region_id' => 'required|integer',
			'view_id' => 'required|integer',
			'title' => 'required|string',
			'introduction' => 'required|string'
		]);
		if($validator->fails())
		{
			return view('campus.editView')->with(['error'=>"*輸入有錯誤", 'campus'=>$campus]);
		}

		$view_id = $request->view_id;
		$region_id = $request->region_id;
		$title = $request->title;
		$introduction = $request->introduction;
		$file = Input::file('image_name');
		$id_title = Campus::where('id', $id)->value('title');
		$rows = Campus::where('title', $title)->count();
		if($id_title!=$title && $rows!=0)
		{
			return view('campus.editView')->with(['error'=>"*已有此項目", 'campus'=>$campus]);
		}
		else if($file!=null)
		{
			$destinationPath = "uploads\campus";
			$filename = uniqid()."_".$file->getClientOriginalName();
			while (file_exists($destinationPath."\\".$filename)) {
	       	    $filename = uniqid()."_".$filename;
	       	}
			$file_success=$file->move($destinationPath, $filename);

			Campus::where('id', $id)
				->update(['introduction'=>$introduction, 'view_id'=>$view_id,
					'title'=>$title, 'picName'=>$filename, 'region_id'=>$region_id]);
		}
		else
		{
			Campus::where('id', $id)
				->update(['introduction'=>$introduction, 'view_id'=>$view_id,
					'title'=>$title, 'region_id'=>$region_id]);
		}

		return redirect('/campus/'.$id);
	}

	public function deleteView($id){
		Campus::where('id', $id)->delete();
		return redirect('/campus');;
	}
}