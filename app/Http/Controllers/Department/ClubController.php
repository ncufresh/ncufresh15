<?php 
namespace App\Http\Controllers\Department;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Departments;
use App\Department_pictures;
use App\Helpers\SitemapHelper;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ClubController extends Controller {
	
	function __construct() {
        SitemapHelper::push('系所社團', 'group');
    }

	public function index() {
		return view('department.departments')->with('page', 1);
	}

	public function store( Request $request) {
		$category = $request->get('cateValue');
		$name = $request->get('clubName');
		$content = $request->get('clubContent');
		$new = Departments::create(['category'=>$category, 'name'=>$name, 'content'=>$content]);
		//Files upload
		$files = Input::file('fileName');
		// var_dump($files);
		if ($files[0] != NULL) {
			foreach ($files as $file) {
				$validator = Validator::make(['fileName'=>$file], ['fileName'=>'image',]);
				if ($validator->fails()) {
				} else {
	       	    	$destinationPath = base_path().'/public/uploads/departments';
	       	    	$filename = uniqid()."_".$file->getClientOriginalName();
	       	    	//Check file name exist or not
	       	    	while (file_exists($destinationPath."/".$filename)) {
	       	    	    $filename = uniqid()."_".$filename;
	       	    	}
	       	    	$upload_success = $file->move($destinationPath, $filename);
	       	    	Department_pictures::create(['picName'=>$filename, 'rfid'=>$name]);
	       	    }
	       	}
		}
		//url
		if ($category < 5 && $category > 0) {
			return redirect('/group/clubs/show/'.$new->id);
		}
		else
			return redirect('/group/departments/show/'.$new->id);
	}

	public function group($group) {
		switch ($group) {
			case 'departments':
				SitemapHelper::push('系所', 'group/departments');
				return view('department.departments')->with('page', 2);
				break;
			case 'clubs':
				SitemapHelper::push('社團', 'group/clubs');
				return view('department.departments')->with('page', 3);
				break;
			case 'add':
				SitemapHelper::push('新增', 'group/add');
				return view('department.departments')->with('page', 4);
				break;
		}
	}

	public function cate($group, $cate) {
		if ($group === 'departments') {
			SitemapHelper::push('系所', 'group/departments');
			switch ($cate) {
				case 1:
					SitemapHelper::push('文學院', 'group/departments/1');
					$content = Departments::where('category', 5)->get();
					break;
				case 2:
					SitemapHelper::push('理學院', 'group/departments/2');
					$content = Departments::where('category', 6)->get();
					break;
				case 3:
					SitemapHelper::push('工學院', 'group/departments/3');
					$content = Departments::where('category', 7)->get();
					break;
				case 4:
					SitemapHelper::push('管理學院', 'group/departments/4');
					$content = Departments::where('category', 8)->get();
					break;
				case 5:
					SitemapHelper::push('資訊電機學院', 'group/departments/5');
					$content = Departments::where('category', 9)->get();
					break;
				case 6:
					SitemapHelper::push('地球科學學院', 'group/departments/6');
					$content = Departments::where('category', 10)->get();
					break;
				case 7:
					SitemapHelper::push('客家學院', 'group/departments/7');
					$content = Departments::where('category', 11)->get();
					break;
				case 8:
					SitemapHelper::push('生醫理工學院', 'group/departments/8');
					$content = Departments::where('category', 12)->get();
					break;
			}
		}
		elseif ($group === 'clubs') {
			SitemapHelper::push('社團', 'group/clubs');
			switch ($cate) {
				case 1:
					SitemapHelper::push('學術性', 'group/clubs/1');
					$content = Departments::where('category', 1)->get();
					break;
				case 2:
					SitemapHelper::push('康樂性', 'group/clubs/2');
					$content = Departments::where('category', 2)->get();
					break;
				case 3:
					SitemapHelper::push('聯誼性', 'group/clubs/3');
					$content = Departments::where('category', 3)->get();
					break;
				case 4:
					SitemapHelper::push('服務性', 'group/clubs/4');
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
			switch ($group) {
				case 'clubs':
					SitemapHelper::push('社團', 'group/clubs');
					break;
				case 'departments':
					SitemapHelper::push('系所', 'group/departments');
					break;
			}
			$category = Departments::where('id', $id)->value('category');
			switch ($category) {
				case 1:
					SitemapHelper::push('學術性', 'group/clubs/1');
					break;
				case 2:
					SitemapHelper::push('康樂性', 'group/clubs/2');
					break;
				case 3:
					SitemapHelper::push('聯誼性', 'group/clubs/3');
					break;
				case 4:
					SitemapHelper::push('服務性', 'group/clubs/4');
					break;
				case 5:
					SitemapHelper::push('文學院', 'group/departments/1');
					break;
				case 6:
					SitemapHelper::push('理學院', 'group/departments/2');
					break;
				case 7:
					SitemapHelper::push('工學院', 'group/departments/3');
					break;
				case 8:
					SitemapHelper::push('管理學院', 'group/departments/4');
					break;
				case 9:
					SitemapHelper::push('資訊電機學院', 'group/departments/5');
					break;
				case 10:
					SitemapHelper::push('地球科學學院', 'group/departments/6');
					break;
				case 11:
					SitemapHelper::push('客家學院', 'group/departments/7');
					break;
				case 12:
					SitemapHelper::push('生醫理工學院', 'group/departments/8');
					break;
			}
			$content = Departments::where('id', $id)->get();
			$name = Departments::where('id', $id)->value('name');
			SitemapHelper::push($name, 'group/'.$group.'/show/'.$id);
			$picture = Department_pictures::where('rfid', $name)->get();
			return view('department.all')->with(['content'=>$content, 'pictures'=>$picture, 'sect'=>1]);
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
				File::delete(base_path().'/public/uploads/departments/'.$deletePic);
			}
		}
		//files upload
		$files = Input::file('fileName');
		var_dump($files);
		if ($files[0] != NULL) {
			foreach ($files as $file) {
				$validator = Validator::make(['fileName'=>$file], ['fileName'=>'image',]);
				if ($validator->fails()) {
				} else {
        	    	$destinationPath = base_path().'/public/uploads/departments';
        	    	$filename = uniqid()."_".$file->getClientOriginalName();
        	    	//Check file name exist or not
        	    	while (file_exists($destinationPath."/".$filename)) {
        	    	    $filename = uniqid()."_".$filename;
        	    	}
        	    	$upload_success = $file->move($destinationPath, $filename);
        	    	Department_pictures::create(['picName'=>$filename, 'rfid'=>$name]);
        	    }
        	}
		}
        //url
		if ($category < 5 && $category > 0) {
			return redirect('/group/clubs/show/'.$id);
		}
		else
			return redirect('/group/departments/show/'.$id);
	}
}