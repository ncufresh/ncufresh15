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
        session_start();
        $_SESSION['CorrectTimes']=0;
        $_SESSION['InQuestion']=true;
        return view('game.index');
    }

    public function init(Request $request)
    {
    	// $request->session()->put('CorrectTimes', 0);
    	// $request->session()->put('InQuestion', true);
        session_start();
        $_SESSION['InQuestion']=true;
        return "go fuck yourself";
    }
    public function setRightAnswer(Request $request)
    {
        // $value = $request->session()->put('CorrectTimes');
        // $value+=1;
        // var_dump($value);
        // $request->session()->put('CorrectTimes', $value);
        session_start();
        if (isset($_SESSION['CorrectTimes'])) {
            $value = $_SESSION['CorrectTimes'];
            $value+=1;
            $_SESSION['CorrectTimes']=$value;
        } else {
            $_SESSION['CorrectTimes']=0;
        }
        
    	//$booo = $request->session()->get('InQuestion');
        $booo = $_SESSION['InQuestion'];
    	if ($booo==true && $value==3) {
    		KnowledgeController::getTreasure();
            session_destroy();
    		return "你拿到寶物了";
    	} else{
            return $value . "次";
    	}
    }
    public function cleanAir(Request $request)
    {
        // $request->session()->forget('CorrectTimes');
        // $request->session()->forget('InQuestion');

        return "go fuck yourself";
    }
}
