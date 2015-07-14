<?php namespace App\Http\Controllers\Department;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/**
* 
*/
class ClubController extends Controller {
	
	public function __construct()
	{
		$this -> middleware('guest');
	}

	public function index() {
		return view('department.backstage');
	}
}