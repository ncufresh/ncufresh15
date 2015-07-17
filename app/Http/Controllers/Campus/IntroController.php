<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\campus;

class IntroController extends Controller
{
	public function store(Request $request){
		$introduction = $request->get('introduction');
		$view_id = $request->get('view_id');

		$error = "";
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
	}
}
