<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Log;
use App\QaAnswer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($category = 'all')
    {
        //
        switch($category) {
        case 'life': 
            $category = 0;
            break;
        case 'gov': 
            $category = 1;
            break;
        case 'student': 
            $category = 2;
            break;
        case 'game': 
            $category = 3;
            break;
        default:
            $category = -1;
            break;
        };
        $answer = null;
        if ($category == -1) {
            $answers = DB::table('qa_answers')->paginate(10);
        } else {
            $answers = DB::table('qa_answers')->where('category', $category)->paginate(2);
        }
        $counts = [
            QaAnswer::where('category', 0)->count(),
            QaAnswer::where('category', 1)->count(),
            QaAnswer::where('category', 2)->count(),
            QaAnswer::where('category', 3)->count(),
        ];
        return view('qa.index', [
            'category' => $category,
            'all_count' => $counts[0] + $counts[1] + $counts[2] + $counts[3],
            'counts' => $counts,
            'answers' => $answers,
            'categoryString'=> ['中大生活', '行政', '學務', '小遊戲']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $type = null;
        switch($request->input('type', 'qa')) {
        case 'qa':
            $type = 'qa';
            break;
        case 'report':
            $type = 'report';
            break;
        default:
            $type = 'qa';
            break;
        }
        return view('qa.create', [
            'type' => $type
        ]);
    }

    /**
     * Show the form for creating a new answer
     *
     * @return Response
     */
    public function answer()
    {
        //
        return view('qa.answer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a new answer
     *
     * @param  Request  $request
     * @return Response
     */
    public function store_answer(Request $request)
    {
        $answer = new QaAnswer;
        $answer->category = $request->category;
        $answer->title = $request->title;
        $answer->content = $request->content;
        $answer->views = 0;
        $answer->save();
        return redirect('qa');
    }

    /**
     * add one view to the qa
     *
     * @param  int  $id
     * @return Response
     */
    public function view(Request $request)
    {
        $answer = QaAnswer::find($request->id);
        $answer->views += 1;
        $answer->save();
        return response()->json(["id" => $request->id, "views" => $answer->views]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
