<?php namespace App\Http\Controllers\Department;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\department_pictures;

class ClubUpFileController extends Controller {
	
	function __construct()
	{
		$this -> middleware('guest');
	}

	public function upfile( Request $request) {
		$fileName = Input::file('fileName');
		$destinationPath = 'uploadsImage';
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		//$filename = str_random(12);
		$filename = $fileName->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); 
		$upload_success = Input::file('fileName')->move($destinationPath, $filename);
		
		if( $upload_success ) {
		   return Response::json('success', 200);
		} else {
		   return Response::json('error', 400);
		}
	}
}