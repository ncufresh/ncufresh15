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
		departments::create(['category'=>$category, 'name'=>$name, 'content'=>$content]);

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
            department_pictures::create(['picName'=>$filename]);
        }
        return redirect('/department');
	}

	public function department($cate) {
		switch ($cate) {
			case 1:
				$content = departments::where('category', 6)->get();
				break;
			case 2:
				$content = departments::where('category', 7)->get();
				break;
			case 3:
				$content = departments::where('category', 8)->get();
				break;
			case 4:
				$content = departments::where('category', 9)->get();
				break;
			case 5:
				$content = departments::where('category', 10)->get();
				break;
			case 6:
				$content = departments::where('category', 11)->get();
				break;
			case 7:
				$content = departments::where('category', 12)->get();
				break;
			case 8:
				$content = departments::where('category', 13)->get();
				break;
			case 9:
				$content = departments::where('category', 1)->get();
				break;
			case 10:
				$content = departments::where('category', 2)->get();
				break;
			case 11:
				$content = departments::where('category', 3)->get();
				break;
			case 12:
				$content = departments::where('category', 4)->get();
				break;
			case 13:
				$content = departments::where('category', 5)->get();
				break;
			default:
				break;
		}
		return view('department\all')->with('content', $content);
	}
}