<?php

namespace App\Http\Controllers\Video;

use App\guestbook;//connect database
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Input;
class GuestbookController extends Controller
{
    public function index()
    {
        return view('video.video');
    }
    public function index2()
    {
        $tryconnect = Guestbook::all();

        return view('video.video2',compact('tryconnect'));
    }
    public function show($id)
    {
    	$tryconnect = Guestbook::find($id);

    	return view('video.show',compact('tryconnect'));
    }

    public function add(Request $request)
    {
        //return $request->comment;

        if($request->comment != "") {
            $post = Guestbook::create([
                "comment"=>$request->comment,
                "name"=>"333"
            ]);

            return $post;
//            return response()->json(["post" => $post]);
        } else {
            return response()->json(["post" => "no comment"]);
        }
        /*
        if(Request::ajax()){
            
            $input = $request->all();

            $input->name = 333;

    	   if($input->comment === '')
            {
                return "please enter some text";
            }
                else{

                    Guestbook::create($input);
  
                    print_r($input);die;
                    }

        }*/

    }
}
