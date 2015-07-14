<?php namespace App\Http\Controllers\Department;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\departments;

class NewClubController extends Controller {
	
	function __construct()
	{
		$this -> middleware('guest');
	}

	public function store( Request $request) {
		$category = $request->get('cateValue');
		$name = $request->get('clubName');
		$content = $request->get('clubContent');
		departments::create(['category'=>$category, 'name'=>$name, 'content'=>$content]);
		return redirect('department/backstage');
	}
}