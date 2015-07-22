// Create the canvas
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
// canvas.width = 512;
// canvas.height = 480;
canvas.width = 640;
canvas.height = 512;
document.getElementById('gamecanvas').appendChild(canvas);


// Game objects
var hero = {
	speed: 256, // movement in pixels per second
	x : canvas.width / 2,
	y : canvas.height / 2,
	width : 30,  // thin!!!!!!!!!!!!!
	height : 30, // thin!!!!!!!!!!!!!
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
	x : 32,
	y : 64,
	width : 32,
	height : 32
};

var block1 = {x:160,y:32,width:32,height:320,type:"block"};
var block2 = {x:960,y:288,width:1280,height:32,type:"block"};
var block3 = {x:320,y:0,width:32,height:192,type:"block"};
var block4 = {x:0,y:320,width:896,height:32,type:"block"};
var block5 = {x:96,y:32,width:32,height:320,type:"block"};

var blocks=[block1,block2,block3,block4,block5];

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
	monster.x = 32 + (Math.random() * (canvas.width - 64));
	monster.y = 32 + (Math.random() * (canvas.height - 64));
	monster.width = 32;
	monster.height = 32;

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
		update(delta / 1000); // game_move.js
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
main();
