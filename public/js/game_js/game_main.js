// Create the canvas
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
canvas.width = 512;
canvas.height = 480;
//document.body.appendChild(canvas);
document.getElementById('gg').appendChild(canvas);

var origin = {
	x: 0,
	y: 0
}
// Game objects
var hero = {
	speed: 256, // movement in pixels per second
	x : canvas.width / 2,
	y : canvas.height / 2,
	width : 32,
	height : 32
};
var monster = {};
var monstersCaught = 0;

var block1 = {x:165,y:120,width:32,height:320,type:"block"};
var block2 = {x:1500,y:288,width:160,height:32,type:"block"};
var block3 = {x:365,y:159,width:32,height:32,type:"block"};

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

	/*
	hero.x = canvas.width / 2;
	hero.y = canvas.height / 2;
	*/

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
var hx = false;
var hy = false;
function draw(img, x, y, t) {
	var nx = x - (hero.x-canvas.width / 2);
	var ny = y - (hero.y-canvas.height / 2);
	if (t == 'bg') {
		if (hx) {
			nx = 0;
			if (hero.x > canvas.width) {
				nx = canvas.width-bgImage.width;
			}
		}
		if (hy) {
			ny = 0;
			if (hero.y > canvas.height) {
				ny = canvas.height-bgImage.height;
			}
		}
	} else if (t == 'hero') {
		if (hx) {
			nx = hero.x;
			if (hero.x > canvas.width) {
				nx = hero.x - (bgImage.width-canvas.width);
			}
		}
		else {
			nx = x;
		}
		if (hy) {
			ny = hero.y;
			if (hero.y > canvas.height) {
				ny = hero.y - (bgImage.height-canvas.height);
			}
		}
		else {
			ny = y;
		}
	} else {
		if (hx) {
			nx = x;
			if (hero.x > canvas.width) {
				nx = x - (bgImage.width-canvas.width);
			}
		}
		
		if (hy) {
			ny = y;
			if (hero.y > canvas.height) {
				ny = y - (bgImage.height-canvas.height);
			}
		}
		
	}
	ctx.drawImage(img, nx, ny);
}



// Draw everything
var render = function () {
	hx = -(hero.x-canvas.width / 2) > 0 || -(hero.x-canvas.width/2) < canvas.width-bgImage.width;
	hy = -(hero.y-canvas.height / 2) > 0 || -(hero.y-canvas.height/2) < canvas.height-bgImage.height;
	if (bgReady) {
		draw(bgImage, 0, 0, 'bg');
	}
	if (heroReady) {
		draw(heroImage, canvas.width / 2, canvas.height / 2, 'hero');
	}
	if (monsterReady) {
		draw(monsterImage, monster.x, monster.y);
	}
	if (blockReady) {
		for (i=0;i<blocks.length ;i++ )
		{
			if (blocks[i].width!=32) {
				for(j=0;j<blocks[i].width/32;j++){
					draw(blockImage, blocks[i].x+32*j, blocks[i].y);
				}
			}
			else if(blocks[i].height!=32){
				for(j=0;j<blocks[i].height/32;j++){
					draw(blockImage, blocks[i].x, blocks[i].y+32*j);
				}			
			}
			else{
				draw(blockImage, blocks[i].x, blocks[i].y);
			}
		}
		
	}

	// Score
	ctx.fillStyle = "rgb(250, 250, 250)";
	ctx.font = "24px Helvetica";
	ctx.textAlign = "left";
	ctx.textBaseline = "top";
	ctx.fillText("Goblins caught: " + monstersCaught, 32, 32);
};

// The main game loop
var main = function () {
	var now = Date.now();
	var delta = now - then;

	update(delta / 1000);
	render();

	then = now;

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
