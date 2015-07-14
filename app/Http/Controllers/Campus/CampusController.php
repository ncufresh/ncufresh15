<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\campus;

class CampusController extends Controller
{
    public function index() {
    	$introductions = campus::select('introduction', 'view_id')->get();
		return view('campus/backstage')->with('introductions', $introductions);
	}
}
