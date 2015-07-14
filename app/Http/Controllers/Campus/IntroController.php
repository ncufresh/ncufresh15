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
		campus::create(['introduction'=>$introduction, 'view_id'=>$view_id]);
		return response()->json(['introduction'=>$introduction, 'view_id'=>$view_id]);
	}
}
