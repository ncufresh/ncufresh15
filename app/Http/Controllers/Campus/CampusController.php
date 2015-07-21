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
		$error="";
		$campus = Campus::all();

		$introduction = $request->get('introduction');
		$view_id = $request->get('view_id');
		$title = $request->get('title');

		$file = Input::file('image_name');
		$validator = Validator::make(['file'=>$file], ['file'=>'image']);
		if($validator->fails())
		{
			return view('campus.addView')->with('error', "*請傳圖片檔");
		}

		if($view_id=="" || $title=="")
		{
			$error="*有空白輸入";
		}
		else
		{
			$rows = Campus::where('title', $title)->count();
			if($rows!=0)
			{
				$error="*已有此項目";
			}
			else if($file!=null)
			{
				$destinationPath = "uploads\campus";
				$filename = uniqid()."_".$file->getClientOriginalName();
				while (file_exists($destinationPath."\\".$filename)) {
	        	    $filename = uniqid()."_".$filename;
	        	}
				$file_success=$file->move($destinationPath, $filename);

				Campus::create(['introduction'=>$introduction, 'view_id'=>$view_id,
					'title'=>$title, 'picName'=>$filename]);

				return view('campus.addView')->with(['introduction'=>$introduction, 'view_id'=>$view_id,
					'title'=>$title, 'image'=>$filename]);
			}
			else
			{
				Campus::create(['introduction'=>$introduction, 'view_id'=>$view_id,
					'title'=>$title, 'picName'=>""]);

				return view('campus.addView')->with(['introduction'=>$introduction, 'view_id'=>$view_id,
					'title'=>$title, 'image'=>""]);
			}
		}

		if($error!="")
		{
			return view('campus.addView')->with(['error'=>$error, 'campus'=>$campus]);
		}
	}

	public function showIntro($view_id) {
    	$introduction = Campus::where('view_id', $view_id)->value('introduction');
		return response()->json(['introduction'=>$introduction]);
	}
}