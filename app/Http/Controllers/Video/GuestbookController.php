<?php

namespace App\Http\Controllers\Video;

use App\Guestbook;//connect database
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
class GuestbookController extends Controller
{
    public function index()
    {
        return view('video.video');
    }
    public function index2()
    {
        $tryconnect = Guestbook::orderBy('id','desc')->paginate(7);

        return view('video.video2',compact('tryconnect'));
    }

    public function load()
    {
        $tryconnect = Guestbook::paginate(7);

        return view('video.AllComments')->with('tryconnect',$tryconnect)->render();

    }

    public function take(Request $request){

        $tryconnect = $request->paginate(7);            
        return response()->json($tryconnect);
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
            $input['name'] = "333";
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