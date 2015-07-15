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
		return view('department.backstage');
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
            $filename = $file->getClientOriginalName();
            //Check file name exist or not
            while (file_exists($destinationPath."\\".$filename)) {
                $filename = uniqid()."_".$filename;
            }
            $upload_success = $file->move($destinationPath, $filename);
            department_pictures::create(['picName'=>$filename]);
        }
    	
        return redirect('/department/backstage');
	}

	public function department1() {
		$content = departments::where('category', 6)->get();
		return view('department\all')->with('content', $content);
	}

	public function department2() {
		$content = departments::where('category', 7)->get();
		return view('department\all')->with('content', $content);
	}

	public function department3() {
		$content = departments::where('category', 8)->get();
		return view('department\all')->with('content', $content);
	}

	public function department4() {
		$content = departments::where('category', 9)->get();
		return view('department\all')->with('content', $content);
	}

	public function department5() {
		$content = departments::where('category', 10)->get();
		return view('department\all')->with('content', $content);
	}

	public function department6() {
		$content = departments::where('category', 11)->get();
		return view('department\all')->with('content', $content);
	}

	public function department7() {
		$content = departments::where('category', 12)->get();
		return view('department\all')->with('content', $content);
	}

	public function department8() {
		$content = departments::where('category', 13)->get();
		return view('department\all')->with('content', $content);
	}

	public function club1() {
		$content = departments::where('category', 1)->get();
		return view('department\all')->with('content', $content);
	}

	public function club2() {
		$content = departments::where('category', 2)->get();
		return view('department\all')->with('content', $content);
	}

	public function club3() {
		$content = departments::where('category', 3)->get();
		return view('department\all')->with('content', $content);
	}

	public function club4() {
		$content = departments::where('category', 4)->get();
		return view('department\all')->with('content', $content);
	}

	public function club5() {
		$content = departments::where('category', 5)->get();
		return view('department\all')->with('content', $content);
	}
}