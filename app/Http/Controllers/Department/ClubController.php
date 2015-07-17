<?php namespace App\Http\Controllers\Department;

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
		return view('department\departments');
	}

	public function store( Request $request) {
		$category = $request->get('cateValue');
		$name = $request->get('clubName');
		$content = $request->get('clubContent');
		Departments::create(['category'=>$category, 'name'=>$name, 'content'=>$content]);

        //Files upload
        $files = Input::file('fileName');
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
        return redirect('/department');
	}

	public function department($cate) {
		switch ($cate) {
			case 1:
				$content = Departments::where('category', 6)->get();
				break;
			case 2:
				$content = Departments::where('category', 7)->get();
				break;
			case 3:
				$content = Departments::where('category', 8)->get();
				break;
			case 4:
				$content = Departments::where('category', 9)->get();
				break;
			case 5:
				$content = Departments::where('category', 10)->get();
				break;
			case 6:
				$content = Departments::where('category', 11)->get();
				break;
			case 7:
				$content = Departments::where('category', 12)->get();
				break;
			case 8:
				$content = Departments::where('category', 13)->get();
				break;
			case 9:
				$content = Departments::where('category', 1)->get();
				break;
			case 10:
				$content = Departments::where('category', 2)->get();
				break;
			case 11:
				$content = Departments::where('category', 3)->get();
				break;
			case 12:
				$content = Departments::where('category', 4)->get();
				break;
			case 13:
				$content = Departments::where('category', 5)->get();
				break;
			default:
				break;
		}
		return view('department\all')->with('list', $content);
	}

	public function update(Request $request) {
		$id = $request->get('id');
		$name = $request->get('name');
		$content = $request->get('content');
		Departments::where('id', $id)->update(['name'=>$name, 'content'=>$content]);
		return "123";
	}

	public function getContent(Request $request) {
		$id = $request->get('id');
		$name = Departments::where('id', $id)->value('name');
		$content = Departments::where('id', $id)->value('content');
		return response()->json(['content'=>$content, 'name'=>$name]);
	}
}