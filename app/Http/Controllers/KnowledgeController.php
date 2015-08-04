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

    public static function getQuestion()
    {
        $knowledge = Knowledge::orderByRaw('RAND()')->first();
        return response()->json(['questions' => $knowledge, 'answer' => $knowledge->answer]);
    }
    public static function getTreasure(Request $request)
    {
        // you need to login
        $user = Auth::user();
        $decoration = $user->getDecoration();

        $value1 = $request->session()->get('level_food');  //1
        $value2 = $request->session()->get('growth_food'); //2
        $value3 = $request->session()->get('background');  //2
        $value4 = $request->session()->get('decoration');  //1


        while (true) {

            $choice = rand(0,100);
            if ($choice>=80 && $value1==false) {
                $decoration->level_food += 1;
                $request->session()->put('level_food', true);
                break;
            }
            else if($choice<80 && $choice>=50 && $value2<2){
                $decoration->growth_food += 1;
                $value2+=1;
                $request->session()->put('growth_food', $value2);
                break;
            }
            else if($choice<50 && $choice>=25 && $value3<2){
                KnowledgeController::getTrashBackground();
                $value3+=1;
                $request->session()->put('background', $value3);
                break;
            }
            else if($choice<25 && $choice>=0 && $value4==false){
                KnowledgeController::getTrashDecoration();
                $request->session()->put('decoration', true);
                break;
            }
        }

        $data = $request->session()->all();
        $decoration->save();
        return response()->json(['random' => $choice , 'session' => $data]);
    }
    public static function getTrashBackground()
    {
        // you need to login
        $user = Auth::user();
        $background = $user->getBackground();

        $twelve=0;
        $getting = true;
        while ($twelve<12 && $getting) {
            $choice = rand(0,12);
            switch ($choice) {
                case 0:
                    if ($background->bg1_1==false) {
                        $background->bg1_1 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 1:
                    if ($background->bg1_2==false) {
                        $background->bg1_2 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 2:
                    if ($background->bg1_3==false) {
                        $background->bg1_3 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 3:
                    if ($background->bg1_4==false) {
                        $background->bg1_4 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 4:
                    if ($background->bg2_1==false) {
                        $background->bg2_1 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 5:
                    if ($background->bg2_2==false) {
                        $background->bg2_2 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 6:
                    if ($background->bg2_3==false) {
                        $background->bg2_3 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 7:
                    if ($background->bg2_4==false) {
                        $background->bg2_4 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 8:
                    if ($background->bg3_1==false) {
                        $background->bg3_1 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 9:
                    if ($background->bg3_2==false) {
                        $background->bg3_2 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 10:
                    if ($background->bg3_3==false) {
                        $background->bg3_3 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
                case 11:
                    if ($background->bg3_4==false) {
                        $background->bg3_4 = true;
                        $getting = false;
                    } else {
                        $twelve+=1;
                    }
                    break;
            }
        }
        $background->save();
    }

    public static function getTrashDecoration()
    {
        // you need to login
        $user = Auth::user();
        $decoration = $user->getDecoration();

        $four = 0;
        $getting = true;
        while ($four<4 && $getting) {
            $choice = rand(0,3);
            switch ($choice) {
                case 0:
                    if ($decoration->chest==false) {
                        $decoration->chest = true;
                        $getting = false;
                    } else {
                        $four+=1;
                    }
                    break;
                case 1:
                    if ($decoration->sg1==false) {
                        $decoration->sg1 = true;
                        $getting = false;
                    } else {
                        $four+=1;
                    }
                    break;
                case 2:
                    if ($decoration->sg2==false) {
                        $decoration->sg2 = true;
                        $getting = false;
                    } else {
                        $four+=1;
                    }
                    break;
                case 3:
                    if ($decoration->shell==false) {
                        $decoration->shell = true;
                        $getting = false;
                    } else {
                        $four+=1;
                    }
                    break;
            }
        }
        $decoration->save();
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
