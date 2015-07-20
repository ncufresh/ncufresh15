<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Campus;

class CampusController extends Controller
{
    public function index() {
    	$introduction = Campus::where('view_id', 0)->value('introduction');
		return view('campus.campus')->with('introduction', $introduction);
	}

	public function showIntro($view_id) {
    	$introduction = Campus::where('view_id', $view_id)->value('introduction');
		return response()->json(['introduction'=>$introduction]);
	}
}