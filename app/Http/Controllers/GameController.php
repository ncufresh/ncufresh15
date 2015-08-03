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
    		return "you got treasure";
    	} else{
    		return "go fuck yourself";
    	}
    }
    public function cleanAir(Request $request)
    {
    	$request->session()->forget('CorrectTimes');
        $request->session()->forget('InQuestion');
    }
}
