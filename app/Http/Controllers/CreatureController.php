<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Creature;
use App\Decoration;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CreatureController extends Controller
{
    public function info($creature) {
        $user = Auth::user();
        $cre = Creature::where('user_id', $user->id)->first();
        $dec = Decoration::where('user_id', $user->id)->first();

        // check creature num
        if ($creature < 0 || $creature>3) {
            return response()->json(['result' => false, 'msg' => '沒這隻']);
        }
        
        // check level
        if ($creature == 0) {
            return response()->json(['result' => true, 'level' => $cre->level1, 'size' => $cre->size1, 'color' => $cre->color1]);
        }
        if ($creature == 1) {
            return response()->json(['result' => true, 'level' => $cre->level2, 'size' => $cre->size2, 'color' => $cre->color2]);
        }
        if ($creature == 2) {
            return response()->json(['result' => true, 'level' => $cre->level3, 'size' => $cre->size3, 'color' => $cre->color3]);
        }
        if ($creature == 3) {
            return response()->json(['result' => true, 'level' => $cre->level4, 'size' => $cre->size4, 'color' => $cre->color4]);
        }
        
    }
    public function grow($creature) {
        $user = Auth::user();
        $cre = Creature::where('user_id', $user->id)->first();
        $dec = Decoration::where('user_id', $user->id)->first();

        // check creature num
        if ($creature < 0 || $creature>3) {
            return response()->json(['result' => false, 'msg' => '沒這隻']);
        }
        
        // check level
        if ($creature == 0 && $cre->level1 < 1) {
            return response()->json(['result' => false, 'msg' => '沒這隻']);
        }
        if ($creature == 1 && $cre->level2 < 1) {
            return response()->json(['result' => false, 'msg' => '沒這隻']);
        }
        if ($creature == 2 && $cre->level3 < 1) {
            return response()->json(['result' => false, 'msg' => '沒這隻']);
        }
        if ($creature == 3 && $cre->level4 < 1) {
            return response()->json(['result' => false, 'msg' => '沒這隻']);
        }

        // check food
        if ($dec->growth_food < 1) {
            return response()->json(['result' => false, 'msg' => 'no food']);
        }

        // eat
        if ($creature == 0) {
            if ($cre->size1 < 4) {
                $dec->growth_food -= 1;
                $dec->save();
                if (rand(1, 100) <= 10) {
                    $cre->size1 += 1;
                    $cre->save();
                    return response()->json([
                        'result' => true, 
                        'msg' => 'yummy', 
                        'food' => (int)$dec->growth_food,
                        'size' => (int)$cre->size1
                    ]);
                } else {
                    return response()->json([
                        'result' => true, 
                        'msg' => 'want more food', 
                        'food' => (int)$dec->growth_food,
                        'size' => (int)$cre->size1
                    ]);
                }
            } else {
                return response()->json([
                    'result' => true, 
                    'msg' => 'maxsize', 
                    'food' => (int)$dec->growth_food,
                    'size' => (int)$cre->size1
                ]);
            }
        } else if ($creature == 1) {
            if ($cre->size2 < 4) {
                $dec->growth_food -= 1;
                $dec->save();
                if (rand(1, 100) <= 10) {
                    $cre->size2 += 1;
                    $cre->save();
                    return response()->json([
                        'result' => true, 
                        'msg' => 'yummy', 
                        'food' => (int)$dec->growth_food,
                        'size' => (int)$cre->size2
                    ]);
                } else {
                    return response()->json([
                        'result' => true, 
                        'msg' => 'want more food', 
                        'food' => (int)$dec->growth_food,
                        'size' => (int)$cre->size2
                    ]);
                }
            } else {
                return response()->json([
                    'result' => true, 
                    'msg' => 'maxsize', 
                    'food' => (int)$dec->growth_food,
                    'size' => (int)$cre->size2
                ]);
            }
        } else if ($creature == 2) {
            if ($cre->size3 < 4) {
                $dec->growth_food -= 1;
                $dec->save();
                if (rand(1, 100) <= 10) {
                    $cre->size3 += 1;
                    $cre->save();
                    return response()->json([
                        'result' => true, 
                        'msg' => 'yummy', 
                        'food' => (int)$dec->growth_food,
                        'size' => (int)$cre->size3
                    ]);
                } else {
                    return response()->json([
                        'result' => true, 
                        'msg' => 'want more food', 
                        'food' => (int)$dec->growth_food,
                        'size' => (int)$cre->size3
                    ]);
                }
            } else {
                return response()->json([
                    'result' => true, 
                    'msg' => 'maxsize', 
                    'food' => (int)$dec->growth_food,
                    'size' => (int)$cre->size3
                ]);
            }
        } else if ($creature == 3) {
            if ($cre->size4 < 4) {
                $dec->growth_food -= 1;
                $dec->save();
                if (rand(1, 100) <= 10) {
                    $cre->size4 += 1;
                    $cre->save();
                    return response()->json([
                        'result' => true, 
                        'msg' => 'yummy', 
                        'food' => (int)$dec->growth_food,
                        'size' => (int)$cre->size4
                    ]);
                } else {
                    return response()->json([
                        'result' => true, 
                        'msg' => 'want more food', 
                        'food' => (int)$dec->growth_food,
                        'size' => (int)$cre->size4
                    ]);
                }
            } else {
                return response()->json([
                    'result' => true, 
                    'msg' => 'maxsize', 
                    'food' => (int)$dec->growth_food,
                    'size' => (int)$cre->size4
                ]);
            }
        }
    }

    public function level($creature) {
        if ($creature >= 0 && $creature <= 3) {
            $user = Auth::user();
            $cre = Creature::where('user_id', $user->id)->first();
            $dec = Decoration::where('user_id', $user->id)->first();
            if ($dec->level_food > 0) {
                $dec->level_food-=1;
                $dec->save();
                if ($creature == 0 && $cre->level1 > 0) {
                    $level = $cre->level1;
                    $color = $cre->color1;
                    $result =  $this->levelup($level, $color, $dec->level_food);
                    $cre->level1 = $level;
                    $cre->color1 = $color;
                    $cre->save();
                    return $result;
                } else if ($creature == 1 && $cre->level2 > 0) {
                    $level = $cre->level2;
                    $color = $cre->color2;
                    $result =  $this->levelup($level, $color, $dec->level_food);
                    $cre->level2 = $level;
                    $cre->color2 = $color;
                    $cre->save();
                    return $result;
                } else if ($creature == 2 && $cre->level3 > 0) {
                    $level = $cre->level3;
                    $color = $cre->color3;
                    $result =  $this->levelup($level, $color, $dec->level_food);
                    $cre->level3 = $level;
                    $cre->color3 = $color;
                    $cre->save();
                    return $result;
                } else if ($creature == 3 && $cre->level4 > 0) {
                    $level = $cre->level4;
                    $color = $cre->color4;
                    $result =  $this->levelup($level, $color, $dec->level_food);
                    $cre->level4 = $level;
                    $cre->color4 = $color;
                    $cre->save();
                    return $result;
                } else {
                    return response()->json(['result' => false, 'msg' => '沒這隻']);
                }
            } else {
                return response()->json(['result' => false, 'msg' => '飼料不足']);
            }
        } else {
            return response()->json(['result' => false, 'msg' => '沒這隻']);
        }
    }

    private function levelup(&$level, &$color, $food) {
        if ($level == 1) {
            if (rand(1, 100) <= 50) {
                $level = 2;
                return response()->json(['result' => true, 'msg' => '進化到一階', 'level' => 2, 'color' => $color, 'food' => $food]);
            } else {
                if (rand(1, 100) <= 25) {
                    $color = rand(0, 2);
                    return response()->json(['result' => true, 'msg' => '進化失敗，變色', 'level' => 1, 'color' => $color, 'food' => $food]);
                } else {
                    return response()->json(['result' => true, 'msg' => '進化失敗', 'level' => 1, 'color' => $color, 'food' => $food]);
                }
            }
        } else if ($level == 2) {
            if (rand(1, 100) <= 30) {
                $level = 3;
                return response()->json(['result' => true, 'msg' => '進化到二階', 'level' => 3, 'color' => $color, 'food' => $food]);
            } else {
                if (rand(1, 100) <= 25) {
                    $color = rand(0, 2);
                    return response()->json(['result' => true, 'msg' => '進化失敗，變色', 'level' => 3, 'color' => $color, 'food' => $food]);
                } else {
                    return response()->json(['result' => true, 'msg' => '進化失敗', 'level' => 3, 'color' => $color, 'food' => $food]);
                }
            }
        } else {
            return response()->json(['result' => false, 'msg' => '已經無法進化了', 'food' => $food]);
        }
    }

}
