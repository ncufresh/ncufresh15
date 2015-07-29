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
        $user = Auth::user();
        $background = $user->getBackground();
        $decoration = $user->getDecoration();
        $choice = 0;
        switch($choice) {
            case 0:
                $background->bg1_1 = true;
                break;
            case 1:
                $background->bg1_2 = true;
                break;
        }
        $background->save();
        $decoration->save();
        return response()->json(['QQ' => $background]);
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
