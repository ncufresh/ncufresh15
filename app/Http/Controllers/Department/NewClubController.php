<?php namespace App\Http\Controllers\Department;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\departments;
use App\department_pictures;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\File;
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
		departments::create(['category'=>$category, 'name'=>$name, 'content'=>$content]);

        $files = Input::file('fileName');
        foreach ($files as $file) {
            $destinationPath = 'uploads\departments';
            $filename = $file->getClientOriginalName();
            while (file_exists($destinationPath."\\".$filename)) {
                $filename = uniqid()."_".$filename;
            }
            $upload_success = $file->move($destinationPath, $filename);
            department_pictures::create(['picName'=>$filename]);
        }
    	
        return redirect('/department/backstage');
	}
}