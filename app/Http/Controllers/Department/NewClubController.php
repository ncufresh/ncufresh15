<?php namespace App\Http\Controllers\Department;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\departments;
use App\department_pictures;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class NewClubController extends Controller {
	
	function __construct() {
	}

	public function store( Request $request) {
		$category = $request->get('cateValue');
		$name = $request->get('clubName');
		$content = $request->get('clubContent');
		//$fileName = $request->get('fileName');
		departments::create(['category'=>$category, 'name'=>$name, 'content'=>$content]);

        $file = Input::file('fileName')->getClientOriginalName();
        Input::file('fileName')->move(__DIR__.'..\..\..\..\..\public\uploads\departments', $file);
        department_pictures::create(['picName'=>$file]);
    	
        return redirect('/department/backstage');
	}
}