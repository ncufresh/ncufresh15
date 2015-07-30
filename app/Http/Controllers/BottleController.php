<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Bottle;
use App\Knowledge;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BottleController extends Controller
{
    public function getNewBottle() {
        $bottle = Bottle::where('owner', Auth::user()->id)
            ->where('sent', false)
            ->where('hp', '>=', 0)
            ->where('content', '')
            ->first();
        if ($bottle == null) {
            return response()->json(['msg'=>'go fuck yourself!', 'result' => false]);
        }

        return response()->json(['msg'=>'got one', 'result' => true, 'token' => $bottle->token]);
    }

    public function open($token) {
        $bottle = Bottle::where('token', $token)
            ->where('owner', Auth::user()->id)
            ->first();
        if ($bottle == null) {
            return response()->json(['msg'=>'go fuck yourself!', 'result' => false]);
        }

        if ($bottle->sent) {
            return response()->json(['msg'=>'bottle sent', 'result' => false]);
        }
        if ($bottle->hp == 0) {
            return response()->json(['msg'=>'bottle opened', 'result' => true, 'content' => $bottle->content]);
        }

        $knowledge = Knowledge::orderByRaw('RAND()')->first(); // change to random
        $bottle->answer = $knowledge->answer;
        $bottle->save();
        return response()->json(['msg'=>'need answer', 'result' => false, 'knowledge' => $knowledge]);
    }

    public function verify(Request $request, $token) {
        $msg = null;
        $bottle = Bottle::where('token', $token)
            ->where('owner', Auth::user()->id)
            ->where('sent', false)
            ->where('hp', '>', 0)
            ->first();
        if ($bottle == null) {
            return response()->json(['msg'=>'go fuck yourself!', 'result' => false]);
        }

        if ($bottle->answer == -1) {
            return response()->json(['msg'=>'error', 'result' => false]);
        }

        if ($request->has('answer') && $request->answer == $bottle->answer && $request->answer != -1) {
            $msg = ['msg'=>'AC', 'result' => true];
            $bottle->hp -= 1;
        } else {
            $msg = ['msg'=>'WA', 'result' => false];
        }

        $bottle->answer = -1;
        $bottle->save();
        return response()->json($msg);
    }

    public function write(Request $request, $token) {
        $bottle = Bottle::where('token', $token)
            ->where('owner', Auth::user()->id)
            ->where('sent', false)
            ->where('hp', 0)
            ->where('content', '')
            ->first();
        if ($bottle == null) {
            return response()->json(['msg'=>'go fuck yourself!', 'result' => false]);
        }
        if ($request->has('content')) {
            $bottle->content = $request->content;
        }
        $bottle->save();
        return response()->json(['msg'=>'saved', 'result' => true]);
    }

    public function private_message(Request $request, $id) {
        $user = User::findOrFail($id);
        if (!$request->has('content')) {
            return back(); 
        }
        $bottle = new Bottle;
        $bottle->sent = true;
        $bottle->hp = 0;
        $bottle->content = $request->content;
        $bottle->token = bin2hex(openssl_random_pseudo_bytes(16)); 
        $bottle->owner = $user->id;
        $bottle->save();
        return redirect('qa/questions');
    }
}
