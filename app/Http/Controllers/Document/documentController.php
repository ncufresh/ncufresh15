<?php

namespace App\Http\Controllers\Document;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\document;

class DocumentController extends Controller
{
    public function index() {
    	$cat_1 = document::where('catagory', 1)->get();
    	$cat_2 = document::where('catagory', 2)->get();
    	$cat_3 = document::where('catagory', 3)->get();
    	$cat_4 = document::where('catagory', 4)->get();
    	$cat_5 = document::where('catagory', 5)->get();
    	$cat_6 = document::where('catagory', 6)->get();
    	$cat_7 = document::where('catagory', 7)->get();
    	$cat_8 = document::where('catagory', 8)->get();
    	$cat_9 = document::where('catagory', 9)->get();
    	$cat_10 = document::where('catagory', 10)->get();
    	$cat_11 = document::where('catagory', 11)->get();
    	$cat_12 = document::where('catagory', 12)->get();
    	$cat_13 = document::where('catagory', 13)->get();
    	$cat_14 = document::where('catagory', 14)->get();
    	$cat_15 = document::where('catagory', 15)->get();
    	$cat_16 = document::where('catagory', 16)->get();


    	//點"新生必讀"必定到104校曆
		return view('document.document_layout')->with([
			'cat_1'=>$cat_1, 'cat_2'=>$cat_2, 'cat_3'=>$cat_3, 'cat_4'=>$cat_4, 'cat_5'=>$cat_5, 
			'cat_6'=>$cat_6, 'cat_7'=>$cat_7, 'cat_8'=>$cat_8, 'cat_9'=>$cat_9, 'cat_10'=>$cat_10, 
			'cat_11'=>$cat_11, 'cat_12'=>$cat_12, 'cat_13'=>$cat_13, 'cat_14'=>$cat_14, 'cat_15'=>$cat_15,'cat_16'=>$cat_16]);
	}

	public function editor() {
		$cat_1 = document::where('catagory', 1)->get();
    	$cat_2 = document::where('catagory', 2)->get();
    	$cat_3 = document::where('catagory', 3)->get();
    	$cat_4 = document::where('catagory', 4)->get();
    	$cat_5 = document::where('catagory', 5)->get();
    	$cat_6 = document::where('catagory', 6)->get();
    	$cat_7 = document::where('catagory', 7)->get();
    	$cat_8 = document::where('catagory', 8)->get();
    	$cat_9 = document::where('catagory', 9)->get();
    	$cat_10 = document::where('catagory', 10)->get();
    	$cat_11 = document::where('catagory', 11)->get();
    	$cat_12 = document::where('catagory', 12)->get();
    	$cat_13 = document::where('catagory', 13)->get();
    	$cat_14 = document::where('catagory', 14)->get();
    	$cat_15 = document::where('catagory', 15)->get();
    	$cat_16 = document::where('catagory', 16)->get();

    	$cate_1 = document::where('catagory', 1)->get();
    	$cate_2 = document::where('catagory', 2)->get();
    	$cate_3 = document::where('catagory', 3)->get();
    	$cate_4 = document::where('catagory', 4)->get();
    	$cate_5 = document::where('catagory', 5)->get();
    	$cate_6 = document::where('catagory', 6)->get();
    	$cate_7 = document::where('catagory', 7)->get();
    	$cate_8 = document::where('catagory', 8)->get();
    	$cate_9 = document::where('catagory', 9)->get();
    	$cate_10 = document::where('catagory', 10)->get();
    	$cate_11 = document::where('catagory', 11)->get();
    	$cate_12 = document::where('catagory', 12)->get();
    	$cate_13 = document::where('catagory', 13)->get();
    	$cate_14 = document::where('catagory', 14)->get();
    	$cate_15 = document::where('catagory', 15)->get();
    	$cate_16 = document::where('catagory', 16)->get();

		return view('document.editor')->with([
			'cat_1'=>$cat_1, 'cat_2'=>$cat_2, 'cat_3'=>$cat_3, 'cat_4'=>$cat_4, 'cat_5'=>$cat_5, 
			'cat_6'=>$cat_6, 'cat_7'=>$cat_7, 'cat_8'=>$cat_8, 'cat_9'=>$cat_9, 'cat_10'=>$cat_10, 
			'cat_11'=>$cat_11, 'cat_12'=>$cat_12, 'cat_13'=>$cat_13, 'cat_14'=>$cat_14, 'cat_15'=>$cat_15,'cat_16'=>$cat_16,
			'cate_1'=>$cate_1, 'cate_2'=>$cate_2, 'cate_3'=>$cate_3, 'cate_4'=>$cate_4, 'cate_5'=>$cate_5, 
			'cate_6'=>$cate_6, 'cate_7'=>$cate_7, 'cate_8'=>$cate_8, 'cate_9'=>$cate_9, 'cate_10'=>$cate_10, 
			'cate_11'=>$cate_11, 'cate_12'=>$cate_12, 'cate_13'=>$cate_13, 'cate_14'=>$cate_14, 'cate_15'=>$cate_15,'cate_16'=>$cate_16
			]);
	}

	public function store(Request $request) {
		$selected = $request->get('selected');
		$content = $request->get('text');

		document::where('id', '=', $selected)->update(['content'=>$content]);
		return response()->json(['content'=>$content]);
	}

	public function get_content($page_id, $page_id_2, $id){
		$title = document::where('id', $id)->value('title');
		$content = document::where('id', $id)->value('content');
		var_dump($content);

		$cat_1 = document::where('catagory', 1)->get();
    	$cat_2 = document::where('catagory', 2)->get();
    	$cat_3 = document::where('catagory', 3)->get();
    	$cat_4 = document::where('catagory', 4)->get();
    	$cat_5 = document::where('catagory', 5)->get();
    	$cat_6 = document::where('catagory', 6)->get();
    	$cat_7 = document::where('catagory', 7)->get();
    	$cat_8 = document::where('catagory', 8)->get();
    	$cat_9 = document::where('catagory', 9)->get();
    	$cat_10 = document::where('catagory', 10)->get();
    	$cat_11 = document::where('catagory', 11)->get();
    	$cat_12 = document::where('catagory', 12)->get();
    	$cat_13 = document::where('catagory', 13)->get();
    	$cat_14 = document::where('catagory', 14)->get();
    	$cat_15 = document::where('catagory', 15)->get();
    	$cat_16 = document::where('catagory', 16)->get();

		return view('document.page')->with([
			'title'=>$title, 'content'=>$content,
			'cat_1'=>$cat_1, 'cat_2'=>$cat_2, 'cat_3'=>$cat_3, 'cat_4'=>$cat_4, 'cat_5'=>$cat_5, 
			'cat_6'=>$cat_6, 'cat_7'=>$cat_7, 'cat_8'=>$cat_8, 'cat_9'=>$cat_9, 'cat_10'=>$cat_10, 
			'cat_11'=>$cat_11, 'cat_12'=>$cat_12, 'cat_13'=>$cat_13, 'cat_14'=>$cat_14, 'cat_15'=>$cat_15,'cat_16'=>$cat_16
			]);
	}
}
