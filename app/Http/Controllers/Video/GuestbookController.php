<?php

namespace App\Http\Controllers\Video;

use Auth;
use App\Guestbook;//connect database
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\SitemapHelper;
use Gvlatko\LaravelXss\LaravelXssServiceProvider;
//use Request;
class GuestbookController extends Controller
{
   function __construct() {
        SitemapHelper::push('影音專區', 'video');
   }
   
    public function index()
    {
        return view('video.video');
    }
    public function index2($vid)
    {
        if ($vid < 0 || $vid > 2) {
            return response()->back();
        }
        $tryconnect = Guestbook::orderBy('id','desc')->paginate(7);
        $urls = [
            "ANQBlZCff_c",
            "FgxUUNe53V4",
            "ANQBlZCff_c"
        ];
        $url = $urls[$vid];
        

        switch($vid) {

        case '0': 
            SitemapHelper::push('影片0', 'video/0');
            break;
        case '1': 
            SitemapHelper::push('影片1', 'video/1');
            break;
        case '2': 
            SitemapHelper::push('影片2', 'video/2');
            break;
        };


        return view('video.video2',compact('tryconnect', 'url'));
    }

    public function load()
    {
        $tryconnect = Guestbook::paginate(7);

        return view('video.AllComments')->with('tryconnect',$tryconnect)->render();

    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        Guestbook::find($id)->delete();
        return $id;

    }

    public function add(Request $request)
    {
        if( $request->comment !="" ){
            
            $input = $request->all();
            $input['name'] = Auth::user()->name;
            $input['comment'] = htmlspecialchars($input['comment']);
            $post = Guestbook::create($input);
            //$id = Guestbook::create($input)->id;
            //$comment = Guestbook::find($id)->comment;
            //$name = Guestbook::find($id)->name;
            //return  array($name,$comment,$id);
            return response()->json($post);
            
        }
                else{
                        return "Hey";
                    }

/*
        if($request->comment != "") {
            $post = Guestbook::create([
                "comment"=>$request->comment,
                "name"=>"333"
            ]);

            $str = print_r($post,TRUE);
            echo $str;



//          return response()->json(["post" => $post]);
        } else {
            return response()->json(["post" => "no comment"]);
        }
        

        }*/
    }
    
}