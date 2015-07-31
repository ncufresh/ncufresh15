<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;
use App\User;
use App\Knowledge;
use App\Helpers\SitemapHelper;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KnowledgeController extends Controller
{
    public function __construct() {
        SitemapHelper::push('題庫', 'knowledge');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $knowledges = Knowledge::latest()->paginate(15);
        return view('knowledge.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('knowledge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'answer' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        Knowledge::create($request->all());
        return redirect('knowledge');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $knowledge = Knowledge::findOrFail($id);
        return response()->json(['knowledge' => $knowledge, 'token' => bin2hex(openssl_random_pseudo_bytes(16))]);
    }

    public function getQuestion()
    {
        $knowledge = Knowledge::orderByRaw('RAND()')->first();
        return response()->json(['questions' => $knowledge, 'answer' => $knowledge->answer]);
    }
    public function getTreasure()
    {
        // you need to login
        $user = Auth::user();
        $background = $user->getBackground();
        $decoration = $user->getDecoration();
        $choice = rand(0,22);

        
        switch($choice) {
            case 0:
                $background->bg1_1 = true;
                break;
            case 1:
                $background->bg1_2 = true;
                break;
            case 2:
                $background->bg1_3 = true;
                break;
            case 3:
                $background->bg1_4 = true;
                break;
            case 4:
                $background->bg2_1 = true;
                break;
            case 5:
                $background->bg2_2 = true;
                break;
            case 6:
                $background->bg2_3 = true;
                break;
            case 7:
                $background->bg2_4 = true;
                break;
            case 8:
                $background->bg3_1 = true;
                break;
            case 9:
                $background->bg3_2 = true;
                break;
            case 10:
                $background->bg3_3 = true;
                break;
            case 11:
                $background->bg3_4 = true;
                break;
            case 12:
                $background->bg4_1 = true;
                break;
            case 13:
                $background->bg2_2 = true;
                break;
            case 14:
                $background->bg4_3 = true;
                break;
            case 15:
                $background->bg4_4 = true;
                break;
            case 16:
                $decoration->chest = true;
                break;
            case 17:
                $decoration->sg1 = true;
                break;
            case 18:
                $decoration->sg2 = true;
                break;
            case 19:
                $decoration->shell = true;
                break;
            case 20:
                $decoration->level_food += 1;
                break;
            case 21:
                $decoration->growth_food += 1;
                break;
        }
        $background->save();
        $decoration->save();
        return response()->json(['background' => $background ,'decoration'=>$decoration ,'random' => $choice]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $knowledge = Knowledge::findOrFail($id); 
        return view('knowledge.edit', [
            'knowledge' => $knowledge
        ]);
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
            'question' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'answer' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $knowledge = Knowledge::findOrFail($id);
        $knowledge->update($request->all());
        return redirect('knowledge');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $knowledge = Knowledge::findOrFail($id);
        $knowledge->delete();
        return redirect('knowledge');
    }
}
