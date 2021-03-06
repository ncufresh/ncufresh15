<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use Log;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Campus;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Helpers\SitemapHelper;
use Validator;

class CampusController extends Controller
{
	function __construct() {
		SitemapHelper::push('校園導覽', 'campus');
	}

    public function index(){
    	$campus = Campus::all();
		return view('campus.campus')->with(['campus'=>$campus, 'index'=>'all']);
	}

	public function cate($cate){
    	$campus = Campus::all();
		return view('campus.campus')->with(['campus'=>$campus, 'cate'=>$cate]);
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
			'region' => 'required|string',
			'title' => 'required|string',
			'introduction' => 'required|string'
		]);
		if($validator->fails())
		{
			return view('campus.addView')->with(['error'=>"*輸入有錯誤", 'campus'=>$campus]);
		}

		$view_id = $request->view_id;
		$region = $request->region;
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
			$destinationPath = base_path().'/public/uploads/campus';
			$filename = uniqid()."_".$file->getClientOriginalName();
			while (file_exists($destinationPath."/".$filename))
			{
	       	    $filename = uniqid()."_".$filename;
	       	}
			$file_success=$file->move($destinationPath, $filename);

			Campus::create(['introduction'=>$introduction, 'view_id'=>$view_id,
				'title'=>$title, 'picName'=>$filename, 'region'=>$region]);
		}
		else
		{
			Campus::create(['introduction'=>$introduction, 'view_id'=>$view_id,
				'title'=>$title, 'picName'=>"", 'region'=>$region]);
		}

		$id = Campus::where('title', $title)->value('id');
		return redirect('/campus/view/'.$id);
	}

	public function showView($id){
		$campus = Campus::all();
    	$view = Campus::where('id', $id)->first();
    	SitemapHelper::push($view->title, 'campus/view/'.$id);
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
			'region' => 'required|string',
			'view_id' => 'required|integer',
			'title' => 'required|string',
			'introduction' => 'required|string'
		]);
		if($validator->fails())
		{
			return view('campus.editView')->with(['error'=>"*輸入有錯誤", 'campus'=>$campus]);
		}

		$view_id = $request->view_id;
		$region = $request->region;
		$title = $request->title;
		$introduction = $request->introduction;
		$file = Input::file('image_name');
		$id_title = Campus::where('id', $id)->value('title');
		$picName = Campus::where('id', $id)->value('picName');
		$rows = Campus::where('title', $title)->count();
		if($id_title!=$title && $rows!=0)
		{
			return view('campus.editView')->with(['error'=>"*已有此項目", 'campus'=>$campus]);
		}
		else if($file!=null)
		{
			$destinationPath = base_path().'/public/uploads/campus';
			$filename = uniqid()."_".$file->getClientOriginalName();
			while (file_exists($destinationPath."/".$filename)) {
	       	    $filename = uniqid()."_".$filename;
	       	}
			$file_success=$file->move($destinationPath, $filename);

			File::delete(base_path().'/public/uploads/campus/'.$picName);
			Campus::where('id', $id)
				->update(['introduction'=>$introduction, 'view_id'=>$view_id,
					'title'=>$title, 'picName'=>$filename, 'region'=>$region]);
		}
		else
		{
			Campus::where('id', $id)
				->update(['introduction'=>$introduction, 'view_id'=>$view_id,
					'title'=>$title, 'region'=>$region]);
		}

		return redirect('/campus/view/'.$id);
	}

	public function deleteView($id){
		$picName = Campus::where('id', $id)->value('picName');
		Campus::where('id', $id)->delete();
		File::delete(base_path().'/public/uploads/campus/'.$picName);
		return redirect('/campus');;
	}
}