<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Controllers\KnowledgeController;

class GameController extends Controller
{
    public function index()
    {
        return view('game.index');
    }


    public function init(Request $request)
    {
    	$request->session()->put('CorrectTimes', '0');
    	$request->session()->put('InQuestion', true);


        $request->session()->put('level_food', false);
        $request->session()->put('growth_food', '0');
        $request->session()->put('background', '0');
        $request->session()->put('decoration', false);
        return "go fuck yourself";
    }
    public function setRightAnswer(Request $request)
    {
    	//$question = KnowledgeController::getQuestion();
    	$value = $request->session()->get('CorrectTimes');
    	$value+=1;
    	$request->session()->put('CorrectTimes', $value);

    	$booo = $request->session()->get('InQuestion');

    	if ($booo==true && $value==3) {
    		KnowledgeController::getTreasure();
    		return "go fuck yourself";
    	} else {
    		return "go fuck yourself";
    	}
    }
    public function cleanAir(Request $request)
    {
    	$request->session()->forget('CorrectTimes');
        $request->session()->forget('InQuestion');

        $request->session()->forget('level_food');
        $request->session()->forget('growth_food');
        $request->session()->forget('background');
        $request->session()->forget('decoration');
        return "go fuck yourself";
    }
}
