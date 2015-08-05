<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Controllers\KnowledgeController;

class GameController extends Controller
{
    public function index()
    {
        return view('game.index');
    }

    // init security
    public function init()
    {
        session_start();
        $_SESSION['CorrectTimes']=0;
        $_SESSION['InQuestion']=true;
        return "go fuck yourself";
    }

    // right answer three times and go to treasure function
    public function setRightAnswer()
    {
        session_start();
        if (isset($_SESSION['CorrectTimes'])) {
            $value = $_SESSION['CorrectTimes'];
            $value+=1;
            $_SESSION['CorrectTimes']=$value;
        } else {
            return "go fuck yourself";
        }
        
        $booo = $_SESSION['InQuestion'];
    	if ($booo==true && $value==3) {
    		KnowledgeController::getTreasure();
            session_destroy();
    	}
        return "go fuck yourself";
    }

    public function redirect(Request $request) {
        $id = Auth::user()->id;//$request->get('id');
        return redirect('/user/'.$id);
    }
}
