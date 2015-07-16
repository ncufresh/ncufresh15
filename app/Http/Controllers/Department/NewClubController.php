<?php namespace App\Http\Controllers\Department;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\departments;
use App\department_pictures;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class NewClubController extends Controller {
	
	function __construct()
	{
		$this -> middleware('guest');
	}

	public function store( Request $request) {
		$category = $request->get('cateValue');
		$name = $request->get('clubName');
		$content = $request->get('clubContent');
		//$fileName = $request->get('fileName');
		departments::create(['category'=>$category, 'name'=>$name, 'content'=>$content]);

		// getting all of the post data
    	$files = Input::file('fileName');
    	// Making counting of uploaded images
    	$file_count = count($files);
    	// start count how many uploaded
    	$uploadcount = 0;
    	Log::info("============file data fileName==========:".$files."====================file data fileCount=================".$file_count);
    	foreach($files as $files) {
    	  	$rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
    	  	$validator = Validator::make(array('file'=> $files), $rules);
    	  	if($validator->passes()){
    	    	$destinationPath = 'uploads';
    	    	$filename = $files->getClientOriginalName();
    	    	$upload_success = $files->move($destinationPath, $filename);
    	    	department_pictures::create(['picName'=>$filename]);
    	    	$uploadcount ++;
    	  	}
    	}
    	if($uploadcount == $file_count){
    	  	Session::flash('success', 'Upload successfully'); 
    	  	return redirect('department/backstage');
    	} 
    	else {
    		return "123";
    	  	//return Redirect::to('department/backstage')->withInput()->withErrors($validator);
    	}
	}
}