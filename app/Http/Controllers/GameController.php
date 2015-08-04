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
    	$request->session()->put('CorrectTimes', 0);
    	$request->session()->put('InQuestion', true);
        return "go fuck yourself";
    }
    public function setRightAnswer(Request $request)
    {
    	//$value = $request->session()->get('CorrectTimes');
        $value = session('CorrectTimes');
        // $value = (int)($value);
        var_dump($value);
        $value+=1;
        var_dump($value);
    	//$request->session()->put('CorrectTimes', $value);
        session(['CorrectTimes' => $value]);
    	$booo = $request->session()->get('InQuestion');
    	if ($booo==true && $value==3) {
    		KnowledgeController::getTreasure();
    		return "你拿到寶物了";
    	} else{
            return $value . "次";
    	}
    }
    public function cleanAir(Request $request)
    {
    	$request->session()->forget('CorrectTimes');
        $request->session()->forget('InQuestion');
        return "go fuck yourself";
    }
}
