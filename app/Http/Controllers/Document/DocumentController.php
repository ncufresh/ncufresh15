<?php

namespace App\Http\Controllers\Document;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Document;
use App\Helpers\SitemapHelper;

class DocumentController extends Controller
{
    function __construct() {
        SitemapHelper::push('新生必讀', 'document');
    }
    public function index() {
		return view('document.calendar');
	}

	public function editor() {
    	$cate_1 = Document::where('catagory', 1)->get();
    	$cate_2 = Document::where('catagory', 2)->get();
    	$cate_3 = Document::where('catagory', 3)->get();
    	$cate_4 = Document::where('catagory', 4)->get();
    	$cate_5 = Document::where('catagory', 5)->get();
    	$cate_6 = Document::where('catagory', 6)->get();
    	$cate_7 = Document::where('catagory', 7)->get();
    	$cate_8 = Document::where('catagory', 8)->get();
    	$cate_9 = Document::where('catagory', 9)->get();
    	$cate_10 = Document::where('catagory', 10)->get();
    	$cate_11 = Document::where('catagory', 11)->get();
    	$cate_12 = Document::where('catagory', 12)->get();
    	$cate_13 = Document::where('catagory', 13)->get();
    	$cate_14 = Document::where('catagory', 14)->get();
    	$cate_15 = Document::where('catagory', 15)->get();
    	$cate_16 = Document::where('catagory', 16)->get();
        $cate_17 = Document::where('catagory', 17)->get();
        $cate_18 = Document::where('catagory', 18)->get();
        $cate_19 = Document::where('catagory', 19)->get();

        SitemapHelper::push('編輯', 'document/ckeditor');
		return view('document.editor')->with([
			'cate_1'=>$cate_1, 'cate_2'=>$cate_2, 'cate_3'=>$cate_3, 'cate_4'=>$cate_4, 'cate_5'=>$cate_5, 
			'cate_6'=>$cate_6, 'cate_7'=>$cate_7, 'cate_8'=>$cate_8, 'cate_9'=>$cate_9, 'cate_10'=>$cate_10, 
			'cate_11'=>$cate_11, 'cate_12'=>$cate_12, 'cate_13'=>$cate_13, 'cate_14'=>$cate_14, 'cate_15'=>$cate_15,
            'cate_16'=>$cate_16, 'cate_17'=>$cate_17, 'cate_18'=>$cate_18, 'cate_19'=>$cate_19
			]);
	}

    public function edit($id_) {
        $id = Document::where('id', $id_)->value('id');
        $title = Document::where('id', $id_)->value('title');
        $content = Document::where('id', $id_)->value('content');
        $cate_1 = Document::where('catagory', 1)->get();
        $cate_2 = Document::where('catagory', 2)->get();
        $cate_3 = Document::where('catagory', 3)->get();
        $cate_4 = Document::where('catagory', 4)->get();
        $cate_5 = Document::where('catagory', 5)->get();
        $cate_6 = Document::where('catagory', 6)->get();
        $cate_7 = Document::where('catagory', 7)->get();
        $cate_8 = Document::where('catagory', 8)->get();
        $cate_9 = Document::where('catagory', 9)->get();
        $cate_10 = Document::where('catagory', 10)->get();
        $cate_11 = Document::where('catagory', 11)->get();
        $cate_12 = Document::where('catagory', 12)->get();
        $cate_13 = Document::where('catagory', 13)->get();
        $cate_14 = Document::where('catagory', 14)->get();
        $cate_15 = Document::where('catagory', 15)->get();
        $cate_16 = Document::where('catagory', 16)->get();
        $cate_17 = Document::where('catagory', 17)->get();
        $cate_18 = Document::where('catagory', 18)->get();
        $cate_19 = Document::where('catagory', 19)->get();

        SitemapHelper::push('編輯', 'document/ckeditor');
        return view('document.editor')->with([
            'id'=>$id, 'title'=>$title, 'content'=>$content,
            'cate_1'=>$cate_1, 'cate_2'=>$cate_2, 'cate_3'=>$cate_3, 'cate_4'=>$cate_4, 'cate_5'=>$cate_5, 
            'cate_6'=>$cate_6, 'cate_7'=>$cate_7, 'cate_8'=>$cate_8, 'cate_9'=>$cate_9, 'cate_10'=>$cate_10, 
            'cate_11'=>$cate_11, 'cate_12'=>$cate_12, 'cate_13'=>$cate_13, 'cate_14'=>$cate_14, 'cate_15'=>$cate_15,
            'cate_16'=>$cate_16, 'cate_17'=>$cate_17, 'cate_18'=>$cate_18, 'cate_19'=>$cate_19
            ]);
    }

	public function store(Request $request) {
		$selected = $request->get('selected');
        $title = $this->sanitize($request->get('title'));
		$content = $request->get('text');
        Document::findOrFail($selected)->update(['title'=>$title, 'content'=>$content]);

		return response()->json(['title'=>$title, 'content'=>$content]);
	}

    public function get_content_1($page_id) {
        if($page_id === "contact" || $page_id === "download"){
            $title = Document::where('page_id', $page_id)->value('title');
            $content = Document::where('page_id', $page_id)->value('content');

            if($page_id === "contact"){
                SitemapHelper::push('聯絡我們', 'document/contact');
            }else{
                SitemapHelper::push('文件及下載專區', 'document/download');
            }                
            return view('document.page')->with(['title'=>$title, 'content'=>$content]);
        }else{
            $id_1 = Document::where(['page_id'=>$page_id, 'page_id_2'=>0])->value('page_id');
            $id_2 = Document::where(['page_id'=>$page_id, 'page_id_2'=>0])->value('page_id_2');
            $all = Document::where(['page_id'=>$page_id, 'page_id_2'=>0])->get();

            if ($page_id === "freshmen_week") {
                SitemapHelper::push('新生週', 'document/freshmen_week');
            }elseif ($page_id === "activity") {
                SitemapHelper::push('輔導及活動專區', 'document/activity');
            }elseif ($page_id === "daily") {
                SitemapHelper::push('學習及生活相關須知', 'document/daily');
            }
            return view('document.list')->with(['type'=>1, 'page_id'=>$id_1, 'page_id_2'=>$id_2, 'all'=>$all]);
        }
    }

    public function get_content_2($page_id, $page_id_2){
        $id_1 = Document::where(['page_id'=>$page_id, 'page_id_2'=>$page_id_2])->value('page_id');
        $id_2 = Document::where(['page_id'=>$page_id, 'page_id_2'=>$page_id_2])->value('page_id_2');
        $all = Document::where(['page_id'=>$page_id, 'page_id_2'=>$page_id_2])->get();

        if ($page_id === "university") {
            SitemapHelper::push('學士班新註冊通知摘要', 'document');
            switch ($page_id_2) {
                case '1':
                    SitemapHelper::push('重要日程', 'document/university/1');
                    break;
                case '2':
                    SitemapHelper::push('學籍', 'document/university/2');
                    break;
                case '3':
                    SitemapHelper::push('繳費', 'document/university/3');
                    break;
                case '4':
                    SitemapHelper::push('兵役', 'document/university/4');
                    break;
                case '5':
                    SitemapHelper::push('住宿', 'document/university/5');
                    break;
                case '6':
                    SitemapHelper::push('學生證', 'document/university/6');
                    break;
                case '7':
                    SitemapHelper::push('其他注意事項(大學部)', 'document/university/7');
                    break;
                
                default:
                    
                    break;
            }
        }elseif ($page_id === "graduate") {
            SitemapHelper::push('研究所新生註冊通知摘要', 'document');
            switch ($page_id_2) {
                case '1':
                    SitemapHelper::push('重要日程', 'document/graduate/1');
                    break;
                case '2':
                    SitemapHelper::push('學籍', 'document/graduate/2');
                    break;
                case '3':
                    SitemapHelper::push('繳費', 'document/graduate/3');
                    break;
                case '4':
                    SitemapHelper::push('兵役', 'document/graduate/4');
                    break;
                case '5':
                    SitemapHelper::push('住宿', 'document/graduate/5');
                    break;
                case '6':
                    SitemapHelper::push('學生證', 'document/graduate/6');
                    break;
                case '7':
                    SitemapHelper::push('其他注意事項(研究所)', 'document/graduate/7');
                    break;
                
                default:
                    
                    break;
            }
        }

        return view('document.list')->with(['type'=>2, 'page_id'=>$id_1, 'page_id_2'=>$id_2, 'all'=>$all]);
    }

	public function get_content_3($page_id, $page_id_2, $id){
		$title = Document::where('id', $id)->value('title');
		$content = Document::where('id', $id)->value('content');

        if ($page_id === "university") {
            SitemapHelper::push('學士班新註冊通知摘要', 'document');
            switch ($page_id_2) {
                case '1':
                    SitemapHelper::push('重要日程', 'document/university/1');
                    break;
                case '2':
                    SitemapHelper::push('學籍', 'document/university/2');
                    break;
                case '3':
                    SitemapHelper::push('繳費', 'document/university/3');
                    break;
                case '4':
                    SitemapHelper::push('兵役', 'document/university/4');
                    break;
                case '5':
                    SitemapHelper::push('住宿', 'document/university/5');
                    break;
                case '6':
                    SitemapHelper::push('學生證', 'document/university/6');
                    break;
                case '7':
                    SitemapHelper::push('其他注意事項(大學部)', 'document/university/7');
                    break;
                
                default:
                    
                    break;
            }
        }elseif ($page_id === "graduate") {
            SitemapHelper::push('研究所新生註冊通知摘要', 'document');
            switch ($page_id_2) {
                case '1':
                    SitemapHelper::push('重要日程', 'document/graduate/1');
                    break;
                case '2':
                    SitemapHelper::push('學籍', 'document/graduate/2');
                    break;
                case '3':
                    SitemapHelper::push('繳費', 'document/graduate/3');
                    break;
                case '4':
                    SitemapHelper::push('兵役', 'document/graduate/4');
                    break;
                case '5':
                    SitemapHelper::push('住宿', 'document/graduate/5');
                    break;
                case '6':
                    SitemapHelper::push('學生證', 'document/graduate/6');
                    break;
                case '7':
                    SitemapHelper::push('其他注意事項(研究所)', 'document/graduate/7');
                    break;
                
                default:
                    
                    break;
            }
        }elseif ($page_id === "freshmen_week") {
            SitemapHelper::push('新生週', 'document/freshmen_week');
        }elseif ($page_id === "activity") {
            SitemapHelper::push('輔導及活動專區', 'document/activity');
        }elseif ($page_id === "daily") {
            SitemapHelper::push('學習及生活相關須知', 'document/daily');
        }
        SitemapHelper::push($title,'document/'.$page_id.'/'.$page_id_2.'/'.$id);
		return view('document.page')->with(['title'=>$title, 'content'=>$content]);
	}

    // helpers
    private function sanitize($dirty) {
        return strip_tags($dirty,
            '<img><table><thead><tbody><tr><td><th><h1><h2><h3><pre><ins><a><p><s><strong><em><span><ul><ol><li><blockquote>'
        );
    }
}
