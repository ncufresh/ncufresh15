<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use Log;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Campus;
use Illuminate\Support\Facades\Input;

class CampusController extends Controller
{
    public function index() {
    	//$introduction = Campus::where('view_id', 0)->value('introduction');
		return view('campus.campus')->with('introduction', "kk");
	}

	public function store(Request $request){
		$introduction = $request->get('introduction');
		$view_id = $request->get('view_id');
		$title = $request->get('title');
		$fileExist = $request->get('image_name');

		if ($fileExist!=null)
		{
			$file = Input::file('image_name');
			$destinationPath = base_path()."public\img\campus";
			$filename = $file->getClientOriginalName();
			$file_success=$file->move($destinationPath, $filename);
			Campus::create(['introduction'=>$introduction, 'view_id'=>$view_id,
			'title'=>$title, 'picName'=>$filename]);
		}
		
		return view('campus.addView')->with(['introduction'=>$introduction, 'view_id'=>$view_id,
			'title'=>$title, 'file'=>$fileExist]);

		/*$error = "";
		$rows = Campus::where('view_id', $view_id)->count();
		if ($introduction=="")
		{
			$error = "*請輸入文字";
		}
		else if($rows==0)
		{
			Campus::create(['introduction'=>$introduction, 'view_id'=>$view_id]);
		}
		else
		{
			Campus::where('view_id', $view_id)
					->update(['introduction'=>$introduction]);
		}

		return response()->json(['introduction'=>$introduction, 'view_id'=>$view_id, 'error'=>$error]);
		*/
	}

	public function showIntro($view_id) {
    	$introduction = Campus::where('view_id', $view_id)->value('introduction');
		return response()->json(['introduction'=>$introduction]);
	}
}