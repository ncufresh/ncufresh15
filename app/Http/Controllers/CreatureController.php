<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CreatureController extends Controller
{
    public function grow($creature) {
        if ($creature >= 0 && $creature <= 3) {
            $user = Auth::user();
            $cre = Creature::where('user_id', $user->id)->first();
            if ($creature == 0 && $cre->level1 > 0) {
            } else if ($creature == 1 && $cre->level2 > 0) {
            } else if ($creature == 2 && $cre->level3 > 0) {
            } else if ($creature == 3 && $cre->level4 > 0) {
            }
        } else {
            return response()->json(['result' => false, 'msg' => 'creature not found']);
        }
    }

    public function level($creature) {
        if ($creature >= 0 && $creature <= 3) {
            $user = Auth::user();
            $cre = Creature::where('user_id', $user->id)->first();
            if ($creature == 0 && $cre->level1 > 0) {
            } else if ($creature == 1 && $cre->level2 > 0) {
            } else if ($creature == 2 && $cre->level3 > 0) {
            } else if ($creature == 3 && $cre->level4 > 0) {
            }
        } else {
            return response()->json(['result' => false, 'msg' => 'creature not found']);
        }
    }

}
