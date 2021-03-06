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
            "vnT7hAl1Gao",
            "cjlJfMxjKfY"
        ];
        $articles = [
"鳳凰花開，鳳凰花落，在這個相逢與分離交錯的季節裡，
校園依舊充斥著輕快的腳步與嘻笑的臉龐，只是多了幾分淡淡的惆悵。
大學四年，有著人生太多太多的第一次：
第一次離家、第一次交往、第一次喝醉、第一次夜遊、第一次打工、第一次翹課...

如果人生可以重來，再經歷這一切，你會不會好好把握，不留下任何遺憾？
凱傑是個快畢業的大四生，某天因為某種原因竟然重新成為大一新生，
究竟事情的真相是怎麼一回事，
到底是無稽之談？ 還是事出有因？
到底是莊周夢蝶？ 還是天意作弄？
到底是情愛的糾葛，還是命運的糾纏，讓我們看不清也望不穿。
現在，就由你來親自為他按下「未來」吧！",
"天地有情、人生無常，
命運就像一張網，讓人掙不開也逃不脫。
上大學有三大必修學分：愛情、課業、社團活動。
容華是一位大一新生，
好不容易上了大學，卻整天沉溺於網路世界和愛情中，
到最後功課一落千丈，愛情也變得不順遂，
究竟他能不能奮發向上，重新找到屬於他的真愛嗎？
讓我們繼續看下去.....。",
"讀中央就是要被訪問啊 不然要幹嘛
讀中央就是要訪問人啊 不然要幹嘛
讀中央就是要加入小中大啊 不然要幹嘛

小中大電視台目前分為三個部門：
轉播工程部負責學校各項活動的轉播錄影，例如：新生營、舞蹈大賽、畢業典禮

傳播創作部出產中大師生關注的新聞資訊，並且與學校合作短片拍攝，例如：2013畢業MV

行銷企劃部為台內籌辦各項活動，提供中大師生有更多元的管道，接觸傳播媒體界的大人物，例如：邀請哈遠儀主播來演講、舉辦校園主播大賽等。

小中大電視台歡迎你

小中大電視台官網: <a href='http://ncutv.ncu.edu.tw/'>http://ncutv.ncu.edu.tw/</a>
小中大電視台粉絲專業: <a href='https://www.facebook.com/NCUTVsince2010'>https://www.facebook.com/NCUTVsince2010</a>"
        ];

        $url = $urls[$vid];
        $article = $articles[$vid];

        switch($vid) {

        case '0': 
            SitemapHelper::push('當我和妳再相遇', 'video/0');
            break;
        case '1': 
            SitemapHelper::push('華美世界', 'video/1');
            break;
        case '2': 
            SitemapHelper::push('讀中央就是要被訪問啊　不然要幹嘛', 'video/2');
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
