<?php 
namespace App\Http\Controllers\Department;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Departments;
use App\Department_pictures;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ClubController extends Controller {
	
	public function __construct() { 
	}

	public function index() {
		return view('department.departments')->with('page', 1);
	}

	public function store( Request $request) {
		$category = $request->get('cateValue');
		$name = $request->get('clubName');
		$content = $request->get('clubContent');
		Departments::create(['category'=>$category, 'name'=>$name, 'content'=>$content]);
		
		

		//Files upload
        $files = Input::file('fileName');
        $rules = array('image' => 'required', );
		$validator = Validator::make($files, $rules);
		if ($validator->fails()) {
			return "fails";
		}
		else {
        	foreach ($files as $file) {
        	    $destinationPath = 'uploads\departments';
        	    $filename = uniqid()."_".$file->getClientOriginalName();
        	    //Check file name exist or not
        	    while (file_exists($destinationPath."\\".$filename)) {
        	        $filename = uniqid()."_".$filename;
        	    }
        	    $upload_success = $file->move($destinationPath, $filename);
        	    Department_pictures::create(['picName'=>$filename, 'rfid'=>$name]);
        	}
        }
        return redirect('/group');
	}

	public function group($group) {
		switch ($group) {
			case 'departments':
				return view('department.departments')->with('page', 2);
				break;
			
			case 'clubs':
				return view('department.departments')->with('page', 3);
				break;
			case 'add':
				return view('department.departments')->with('page', 4);
				break;
		}
	}

	public function cate($group, $cate) {
		if ($group === 'departments') {
			switch ($cate) {
				case 1:
					$content = Departments::where('category', 5)->get();
					break;
				case 2:
					$content = Departments::where('category', 6)->get();
					break;
				case 3:
					$content = Departments::where('category', 7)->get();
					break;
				case 4:
					$content = Departments::where('category', 8)->get();
					break;
				case 5:
					$content = Departments::where('category', 9)->get();
					break;
				case 6:
					$content = Departments::where('category', 10)->get();
					break;
				case 7:
					$content = Departments::where('category', 11)->get();
					break;
				case 8:
					$content = Departments::where('category', 12)->get();
					break;
			}
		}
		elseif ($group === 'clubs') {
			switch ($cate) {
				case 1:
					$content = Departments::where('category', 1)->get();
					break;
				case 2:
					$content = Departments::where('category', 2)->get();
					break;
				case 3:
					$content = Departments::where('category', 3)->get();
					break;
				case 4:
					$content = Departments::where('category', 4)->get();
					break;
			}
		}
		elseif ($group === 'edit') {
			$content = Departments::where('id', $cate)->get();
			$name = Departments::where('id', $cate)->value('name');
			$picture = Department_pictures::where('rfid', $name)->get();
			return view('department.all')->with(['content'=>$content, 'picture'=>$picture, 'sect'=>2]);
		}
		return view('department.departments')->with(['list'=>$content, 'page'=>5]);
	}

	public function show($group, $id) {
		if($group == "clubs" || $group == "departments") {
			$content = Departments::where('id', $id)->get();
			$name = Departments::where('id', $id)->value('name');
			$picture = Department_pictures::where('rfid', $name)->get();
			return view('department.all')->with(['content'=>$content, 'picture'=>$picture, 'sect'=>1]);
		}
		else
			return "error link";
	}

	public function update(Request $request) {
		$id = $request->get('id');
		$name = $request->get('name');
		$originName = $request->get('originName');
		$content = $request->get('content');
		Departments::where('id', $id)->update(['name'=>$name, 'content'=>$content]);
		Department_pictures::where('rfid', $originName)->update(['rfid'=>$name]);
		$category = Departments::where('id', $id)->value('category');
		//Delete Image
		$deletePics = $request->get('deleteImage');
		if ($deletePics != null) {
			foreach ($deletePics as $deletePic) {
				Department_pictures::where('picName', $deletePic)->delete();
			}
		}
		$files = Input::file('fileName');
		if ($files != null) {
			foreach ($files as $file) {
        	    $destinationPath = 'uploads\departments';
        	    $filename = uniqid()."_".$file->getClientOriginalName();
        	    //Check file name exist or not
        	    while (file_exists($destinationPath."\\".$filename)) {
        	        $filename = uniqid()."_".$filename;
        	    }
        	    $upload_success = $file->move($destinationPath, $filename);
        	    Department_pictures::create(['picName'=>$filename, 'rfid'=>$name]);
        	}
		}
        //url
		if ($category < 5 && $category > 0) {
			return redirect('/group/clubs/show/'.$id);
		}
		else
			return redirect('/group/departments/show/'.$id);
	}

	public function getContent(Request $request) {
		$id = $request->get('id');
		$name = Departments::where('id', $id)->value('name');
		$content = Departments::where('id', $id)->value('content');
		return response()->json(['content'=>$content, 'name'=>$name]);
	}
}