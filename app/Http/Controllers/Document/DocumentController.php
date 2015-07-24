<?php

namespace App\Http\Controllers\Document;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\document;

class DocumentController extends Controller
{
    public function index() {
    	//點"新生必讀"必定到104校曆
		return view('document.document_layout');
	}

	public function editor() {
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
        $cate_17 = document::where('catagory', 17)->get();
        $cate_18 = document::where('catagory', 18)->get();
        $cate_19 = document::where('catagory', 19)->get();

		return view('document.editor')->with([
			'cate_1'=>$cate_1, 'cate_2'=>$cate_2, 'cate_3'=>$cate_3, 'cate_4'=>$cate_4, 'cate_5'=>$cate_5, 
			'cate_6'=>$cate_6, 'cate_7'=>$cate_7, 'cate_8'=>$cate_8, 'cate_9'=>$cate_9, 'cate_10'=>$cate_10, 
			'cate_11'=>$cate_11, 'cate_12'=>$cate_12, 'cate_13'=>$cate_13, 'cate_14'=>$cate_14, 'cate_15'=>$cate_15,
            'cate_16'=>$cate_16, 'cate_17'=>$cate_17, 'cate_18'=>$cate_18, 'cate_19'=>$cate_19
			]);
	}

	public function store(Request $request) {
		$selected = $request->get('selected');
		$content = $request->get('text');

		document::where('id', '=', $selected)->update(['content'=>$content]);
		return response()->json(['content'=>$content]);
	}

    public function get_content_1($page_id) {
        if($page_id === "contact"){
            $title = document::where('page_id', $page_id)->value('title');
            $content = document::where('page_id', $page_id)->value('content');
            return view('document.page')->with(['title'=>$title, 'content'=>$content]);
        }else{
            $id_1 = document::where(['page_id'=>$page_id, 'page_id_2'=>0])->value('page_id');
            $id_2 = document::where(['page_id'=>$page_id, 'page_id_2'=>0])->value('page_id_2');
            $all = document::where(['page_id'=>$page_id, 'page_id_2'=>0])->get();

            return view('document.list2')->with(['type'=>1, 'page_id'=>$id_1, 'page_id_2'=>$id_2, 'all'=>$all]);
        }
    }

    public function get_content_2($page_id, $page_id_2){
        $id_1 = document::where(['page_id'=>$page_id, 'page_id_2'=>$page_id_2])->value('page_id');
        $id_2 = document::where(['page_id'=>$page_id, 'page_id_2'=>$page_id_2])->value('page_id_2');
        $all = document::where(['page_id'=>$page_id, 'page_id_2'=>$page_id_2])->get();

        return view('document.list2')->with(['type'=>2, 'page_id'=>$id_1, 'page_id_2'=>$id_2, 'all'=>$all]);
    }

	public function get_content_3($page_id, $page_id_2, $id){
		$title = document::where('id', $id)->value('title');
		$content = document::where('id', $id)->value('content');

		return view('document.page')->with(['title'=>$title, 'content'=>$content]);
	}
}
