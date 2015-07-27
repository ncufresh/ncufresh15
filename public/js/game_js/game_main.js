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

var hero = {
	speed: 256, // movement in pixels per second
	x : canvas.width/2,//50*grid.length,
	y : canvas.height/2,//8*grid.length,
	end: {
		x: canvas.width/2,
		y: canvas.height/2,
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

var box = {
	x : grid.length*7,
	y : grid.length*5,
	width : grid.length,
	height : grid.length
};

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

    function drawElapsedTime() {
        var elapsed = parseInt((new Date() - startTime) / 1000);
        ctx.save();
        ctx.beginPath();
        ctx.fillStyle = "red";
        ctx.font = "14px Verdana"
        // draw the running time at half opacity
        ctx.globalAlpha = 0.50;
        ctx.fillText(elapsed + " secs", canvas.width - 75, 25);
        ctx.restore();
    }

////////////////////////////////////////////////
//using only on the starting~~~~~~~~~~~~~~~~~~~~
var starting=false;
window.onkeydown = function(e) {
	// enter
	if(e.keyCode == 13 && starting == true){
		starting=false;
		main();
	}
}

ctx.fillStyle = '#000000';
ctx.fillRect(0, 0, canvas.width, canvas.height);
// Loading Message
ctx.fillStyle = '#ffffff';
ctx.font = '40px Arial';
ctx.textAlign = "center";
ctx.textBaseline = "top";
ctx.fillText("Loading...", canvas.width / 2, canvas.height / 2 -20);

var loading = setInterval(loaded,2000);		
function loaded() {
	clearInterval(loading);
	
	starting=true;

	ctx.fillStyle = '#000000';
	ctx.fillRect(0, 0, canvas.width, canvas.height);
		
	ctx.fillStyle = '#ff0000';
	ctx.font = '80px Bangers, Impact, Arial, Impact, Arial';
	ctx.textAlign = "center";
	ctx.textBaseline = "top";
	ctx.fillText("Game", canvas.width / 2, canvas.height / 2 - 100);
		
	ctx.fillStyle = '#ffffff';
	ctx.font = '25px Arial';
	ctx.textAlign = "center";
	ctx.textBaseline = "top";
	ctx.fillText("倒數計時5分鐘~找到的寶物都是你的！", canvas.width / 2, canvas.height / 2 );				
	ctx.fillText("打開寶箱會出現三道問題鎖，全答對就能獲得寶物！", canvas.width / 2, canvas.height / 2 +30);
	ctx.fillText("答錯任一題，寶箱就會鎖死，再也打不開喔！", canvas.width / 2, canvas.height / 2 +60);	
	ctx.fillText("按<Enter>來開始", canvas.width / 2, canvas.height / 2 +120);
}
////////////////////////////////////////////////


var gameover = function () {

	starting=true;

	ctx.fillStyle = '#000000';
	ctx.fillRect(0, 0, canvas.width, canvas.height);

	ctx.fillStyle = '#ff0000';
	ctx.font = "50px Bangers, Impact, Arial";
	ctx.textAlign = "center";
	ctx.textBaseline = "top";
	ctx.fillText("Time's Up!", canvas.width / 2, canvas.height / 2 -60);	

	ctx.fillStyle = '#ffffff';
	ctx.font = '20px Arial';
	ctx.textAlign = "center";
	ctx.textBaseline = "top";
	ctx.fillText("press RETURN to try again", canvas.width / 2, canvas.height / 2 +90);
			
	ctx.fillStyle = '#ffffff';
	ctx.font = '20px Arial';
	ctx.textAlign = "center";
	ctx.textBaseline = "top";
	ctx.fillText("ㄏㄏ (cc)", canvas.width - 100, canvas.height - 30);
}