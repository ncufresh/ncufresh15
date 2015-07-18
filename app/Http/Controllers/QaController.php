<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use DB;
use Log;
use App\QaAnswer;
use App\QaQuestion;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QaController extends Controller
{
    /**
     * Display a listing of the QA
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
        $top_answers = null;
        if ($category == -1) {
            $top_answers = DB::table('qa_answers')
                ->orderBy('views', 'desc')
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
            $answers = DB::table('qa_answers')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $answers = DB::table('qa_answers')
                ->orderBy('created_at', 'desc')
                ->where('category', $category)
                ->paginate(10);
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
            'top_answers' => $top_answers,
            'categoryString'=> ['中大生活', '行政', '學務', '小遊戲']
        ]);
    }

    /**
     * Display a listing of the questions
     *
     * @return Response
     */
    public function index_questions() {
        $questions = DB::table('qa_question')
            ->orderBy('solved', 'asc')
            ->orderBy('category', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('qa.questions', [
            'questions' => $questions,
            'categoryString' => ['中大生活', '行政', '學務', '小遊戲', '問題回報'],
            'solvedString' => ['還沒解決', '已解決'],
            'markString' => ['標記為已解決', '標記為未解決']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create_question(Request $request)
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
            return redirect('qa');
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
    public function create_answer()
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
    public function store_question(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|integer',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $question = new QaQuestion;
        $question->category = $request->category;
        $question->title = $request->title;
        $question->content = $request->content;
        $question->solved = false;
        $question->author_id = $request->user()->id;
        $question->save();
        return redirect('qa');
    }

    /**
     * Store a new answer
     *
     * @param  Request  $request
     * @return Response
     */
    public function store_answer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|integer',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
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
        if ($answer != null) {
            $answer->views += 1;
            $answer->save();
        }
        return response()->json(["id" => $request->id, "views" => $answer->views]);
    }

    /**
     * mark solved or not
     *
     * @param  int  $id
     * @return Response
     */
    public function solved(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'solved' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['msg'=> 'error']);
        }
        $answer = QaQuestion::find($request->id);
        if ($answer != null) {
            $answer->solved = $request->solved;
            $answer->save();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $answer = QaAnswer::find($id);
        if ($answer == null) {
            return redirect('qa');
        }
        return view('qa.answer', ['answer' => $answer]);
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
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'title'    => 'required',
            'content'  => 'required'
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $answer = QaAnswer::find($id);
        $answer->category = $request->category;
        $answer->title = $request->title;
        $answer->content = $request->content;
        $answer->save();
        return redirect('qa');
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
        $answer = QaAnswer::find($id);
        if ($answer != null) {
            $answer->delete();
        }
        return redirect('qa');
    }
}
