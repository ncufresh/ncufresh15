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
            "TYpIHmARQVo",
            "FgxUUNe53V4",
            "ANQBlZCff_c"
        ];
        $articles = [
            "
當我和妳再相遇

鳳凰花開，鳳凰花落，在這個相逢與分離交錯的季節裡，校園依舊充斥著輕快的腳步與嘻笑的臉龐，只是多了幾分淡淡的惆悵。
大學四年，有著人生太多太多的第一次，第一次離家、第一次交往、第一次喝醉、第一次夜遊、第一次打工、第一次翹課...
如果人生可以重來，再經歷這一切，你會不會好好把握，不留下任何遺憾？
凱傑是個快畢業的大四生，某天因為某種原因竟然重新成為大一新生，
究竟事情的真相是怎麼一回事，
到底是無稽之談？ 還是事出有因？
到底是莊周夢蝶？ 還是天意作弄？
到底是情愛的糾葛，還是命運的糾纏，讓我們看不清也望不穿。
現在，就由你來親自為他按下「未來」吧！",
            "1  blablabla",
            "2  blablabla"
        ];

        $url = $urls[$vid];
        $article = $articles[$vid];

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


        return view('video.video2',compact('tryconnect', 'url' ,'article' ));
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