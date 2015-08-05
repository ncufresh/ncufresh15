<?php

use Illuminate\Database\Seeder;
use App\Life;

class LifeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$life_food = [
	    	'小木屋鬆餅',
	    	'阿諾可麗餅',
	    	'學生餐廳(九餐)',
	    	'松果餐廳',
	    	'宵夜街',
	    	'後門',
	    	'松苑餐廳',
	    	'女14地下商場',
	    ];
	    $life_live = [
	    	'男3舍',
	    	'男7舍',
	    	'男9B舍',
	    	'男11舍',
	    	'女1舍',
	    	'女4舍'
	    ];
	    $life_edu = [
	    	'藝文中心',
	    	'黑盒子劇場',
	    	'107藝術電影院',
	    	'校史館',
	    	'郵局',
	    	'581生活館',
	    	'第一銀行',
	    	'敦煌',
	    	'中大眼鏡行',
	    	'印象美髮',
	    	'龍誠影印',
	    	'圖美影印',
	    	'校園KTV',
	    	'諮商中心',
	    	'衛保組',
	    	'特約醫院'
	    ];
	    $life_play = [
	    	'電影院',
	    	'KTV',
	    	'夜市',
	    	'墊腳石',
	    	'光南',
	    	'NOVA',
	    	'家樂福'
	    ];
	    $life_traffic = [
	    	'公車',
	    	'火車',
	    	'高鐵',
	    	'校內交通',
	    ];
	    foreach($life_food as $food){
	    	Life::create([
	    		'category' => 'food',
	    		'name' => $food,
	    		'content' => $food
    		]);
	    }
	    foreach($life_live as $live){
	    	Life::create([
	    		'category' => 'live',
	    		'name' => $live,
	    		'content' => $live
    		]);
	    }
    	foreach($life_edu as $edu){
	    	Life::create([
	    		'category' => 'edu',
	    		'name' => $edu,
	    		'content' => $edu
    		]);
	    }
	    foreach($life_play as $play){
	    	Life::create([
	    		'category' => 'play',
	    		'name' => $play,
	    		'content' => $play
    		]);
	    }
	    foreach($life_traffic as $traffic){
	    	Life::create([
	    		'category' => 'traffic',
	    		'name' => $traffic,
	    		'content' => $traffic
    		]);
	    }
        //
    }
}
