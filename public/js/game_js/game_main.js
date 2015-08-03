// Create the canvas
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
canvas.width = 640;
canvas.height = 512;
document.getElementById('gamecanvas').appendChild(canvas);

// Game objects
var grid = { length : 64 };
var game = { length : 6400 };

var blocklock= {
	left : false ,
	top : false ,
	right : false ,
	bottom : false 
};


function getRandom(minNum, maxNum) {	//取得 minNum(最小值) ~ maxNum(最大值) 之間的亂數
	return Math.floor( Math.random() * (maxNum - minNum + 1) ) + minNum;
}
function getRandomArray(minNum, maxNum, n) {	//隨機產生不重覆的n個數字
	var rdmArray = [n];		//儲存產生的陣列
 
	for(var i=0; i<n; i++) {
		var rdm = 0;		//暫存的亂數
 
		do {
			var exist = false;			//此亂數是否已存在
			rdm = getRandom(minNum, maxNum);	//取得亂數
 
			//檢查亂數是否存在於陣列中，若存在則繼續回圈
			if(rdmArray.indexOf(rdm) != -1) exist = true;
 
		} while (exist);	//產生沒出現過的亂數時離開迴圈
 
		rdmArray[i] = rdm;
	}
	return rdmArray;
}

var arrayIndex=getRandomArray(0,20,4);
var arrayX = [52,66,41,82,91,33,53,72,25,87,35,41,66,23,9,53,73,55,90,82,70];
var arrayY = [8,12,18,19,24,29,37,38,39,42,53,49,49,56,72,66,64,79,72,82,88];

var initialX=arrayX[arrayIndex[1]];
var initialY=arrayY[arrayIndex[1]];
var hero = {
	speed: 256, // movement in pixels per second
	x : initialX*grid.length,
	y : initialY*grid.length,
	end: {
		x: initialX*grid.length,
		y: initialY*grid.length,
		Delay: 30,
		Timer: 0
	},
	keylock : false,
	width : grid.length,
	height : grid.length,
	direction: {
		x: 0,
		y: 0,
		now: "down"
	},

	// Animation settings
	animSet: 1,
	animFrame: 0,
	animNumFrames: 2,
	animDelay: 200,
	animTimer: 0,

	canmove : true
};
var monster = {};
var monstersCaught = 0;

var box1 = {
	isme : false,
	lock : false,
	open : false,
	x : arrayX[arrayIndex[1]]*grid.length,
	y : arrayY[arrayIndex[1]]*grid.length,
	width : grid.length,
	height : grid.length
};
var box2 = {
	isme : false,
	lock : false,
	open : false,
	x : arrayX[arrayIndex[2]]*grid.length,
	y : arrayY[arrayIndex[2]]*grid.length,
	width : grid.length,
	height : grid.length
};
var box3 = {
	isme : false,
	lock : false,
	open : false,
	x : arrayX[arrayIndex[3]]*grid.length,
	y : arrayY[arrayIndex[3]]*grid.length,
	width : grid.length,
	height : grid.length
};
var boxs = [box1,box2,box3];

var road1 = {x:0,y:64,width:64,height:320,type:"road"};
var roads = [road1];

var block1 = {x:64,y:128,width:192,height:64,type:"block"};
var block2 = {x:64,y:128,width:64,height:192,type:"block"};
var block3 = {x:64,y:256,width:192,height:64,type:"block"};
var blocks=[block1,block2,block3];

// Chomp sound
var snd = new Audio("game_audio/goat.wav");
///////////////////////////////////////////////////
// Reset the game when the player catches a monster
var reset = function () {
	
	if(snd.currentTime > 0)
	{
		snd.currentTime=0; //this is to make sure the sound resets if it is still playing
	}
	snd.play();

	// Throw the monster somewhere on the screen randomly
	monster.x = grid.length + (Math.random() * (canvas.width - 128));
	monster.y = grid.length + (Math.random() * (canvas.height - 128));
	monster.width = grid.length;
	monster.height = grid.length;

	for (i=0;i<blocks.length ;i++ )
	{
		if (isTouching(monster,blocks[i]))
		{
			reset();
		}
	}
};
/////////////////////////////////////////////////////


// The main game loop
var main = function () {
	var now = Date.now();
	var delta = now - then;
	then = now;
	if (hero.canmove) {
		anim(delta); // game_animation.js
		update(delta); // game_move.js
	}
	
	render(); // game_draw.js
	if(canask){
		question();	// game_quiz.js
	}

	// 加這個main才會一直跑
	// Request to do this again ASAP
	requestAnimationFrame(main);
};

// Cross-browser support for requestAnimationFrame
var w = window;
requestAnimationFrame = w.requestAnimationFrame || w.webkitRequestAnimationFrame || w.msRequestAnimationFrame || w.mozRequestAnimationFrame;

// Let's play this game!
var then = Date.now();

reset();

////////////////////////////////////////////////
//using only on the starting~~~~~~~~~~~~~~~~~~~~
var starting=false;
window.onkeydown = function(e) {
	// enter
	if(e.keyCode == 13 && starting == true){
		starting=false;
		var timing = setInterval(fiveminute,1000);	
		main();
	}
}

//timing
var minute=5;
var second=0;
var fiveminute = function () {
	if (second==0) {
		minute-=1;
		second=60;
	}
	second-=1;
	if (minute==0 && second==0) {
		//window.location = "group";
		window.location.replace("https://www.facebook.com/");
	}
}
//

ctx.fillStyle = '#000000';
ctx.fillRect(0, 0, canvas.width, canvas.height);
// Loading Message
ctx.fillStyle = '#ffffff';
ctx.font = '40px Arial';
ctx.textAlign = "center";
ctx.textBaseline = "top";
ctx.fillText("Loading...", canvas.width / 2, canvas.height / 2 -20);

var loading = setInterval(loaded,1000);		
function loaded() {
	clearInterval(loading);
	
	starting=true;

	ctx.fillStyle = '#000000';
	ctx.fillRect(0, 0, canvas.width, canvas.height);
		
	ctx.fillStyle = '#ff0000';
	ctx.font = '50px Bangers, Impact, Arial, Impact, Arial';
	ctx.textAlign = "center";
	ctx.textBaseline = "top";
	ctx.fillText("點一下遊戲畫面鎖住視窗", canvas.width / 2, canvas.height / 4 - 20);
	ctx.fillText("遊戲操作:↑,↓,←,→,Enter", canvas.width / 2, canvas.height / 4 - 70);
		
	ctx.fillStyle = '#ffffff';
	ctx.font = '25px Arial';
	ctx.textAlign = "center";
	ctx.textBaseline = "top";
	ctx.fillText("倒數計時5分鐘！", canvas.width / 2, canvas.height / 3 );				
	ctx.fillText("在這5分鐘內，找到的寶物都是你的！", canvas.width / 2, canvas.height / 3 +30);
	ctx.fillText("注意！", canvas.width / 2, canvas.height / 3 +60);
	ctx.fillText("打開寶箱時會出現三道問題鎖，全部答對才能獲得寶物。", canvas.width / 2, canvas.height / 3 +90);
	ctx.fillText("答錯任一題，寶箱就會鎖死，再也打不開喔！", canvas.width / 2, canvas.height / 3 +120);
	ctx.fillText("好好加油吧！", canvas.width / 2, canvas.height / 3 +150);
	ctx.fillText("按<Enter>來開始", canvas.width / 2, canvas.height / 3 +240);
}
////////////////////////////////////////////////