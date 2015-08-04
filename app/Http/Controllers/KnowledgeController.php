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
    public static function getTreasure()
    {
        // you need to login
        $user = Auth::user();
        $decoration = $user->getDecoration();

        while (true) {
            $choice = rand(0,70);
            if ($choice>60) {
                $decoration->level_food += 1;
                break;
            }
            else if($choice<60 && $choice>=40){
                $decoration->growth_food += 1;
                break;
            }
            else if($choice<40 && $choice>=30){
                KnowledgeController::getFish();
                break;
            }
            else if($choice<30 && $choice>=10){
                KnowledgeController::getTrashBackground();
                break;
            }
            else if($choice<10 && $choice>=0){
                KnowledgeController::getTrashDecoration();
                break;
            }
        }
        $decoration->save();
        //return response()->json(['random' => $choice , 'data' => $user]);
    }
    public static function getFish()
    {
        // you need to login
        $user = Auth::user();
        $fishfish = $user->getFish();

        $three = 0;
        $getting = true;
        while ($three<3 && $getting) {
            $choice = rand(0,2);
            switch ($choice) {
                case 0:
                    if ($fishfish->level2==false) {
                        $fishfish->level2 = true;
                        $getting = false;
                    } else {
                        $three+=1;
                    }
                    break;
                case 1:
                    if ($fishfish->level3==false) {
                        $fishfish->level3 = true;
                        $getting = false;
                    } else {
                        $three+=1;
                    }
                    break;
                case 2:
                    if ($fishfish->level4==false) {
                        $fishfish->level4 = true;
                        $getting = false;
                    } else {
                        $three+=1;
                    }
                    break;
            }
        }
        $fishfish->save();
        if ($three==3) {
            KnowledgeController::getTreasure();
        }
    }
    public static function getTrashBackground()
    {
        // you need to login
        $user = Auth::user();
        $background = $user->getBackground();

        $twelve=0;
        $getting = true;
        while ($twelve<12 && $getting) {
            $choice = rand(0,11);
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
        if ($twelve==12) {
            KnowledgeController::getTreasure();
        }
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
        if ($four==4) {
            KnowledgeController::getTreasure();
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
