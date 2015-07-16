
// Create the canvas
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
canvas.width = 512;
canvas.height = 480;
//document.body.appendChild(canvas);
document.getElementById('gg').appendChild(canvas);


// Game objects
var hero = {
	speed: 256 // movement in pixels per second
};
var monster = {};
var monstersCaught = 0;

var block = {};

// Handle keyboard controls
var keysDown = {};

addEventListener("keydown", function (e) {
	keysDown[e.keyCode] = true;
}, false);

addEventListener("keyup", function (e) {
	delete keysDown[e.keyCode];
}, false);

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
};
hero.x = canvas.width / 2;
hero.y = canvas.height / 2;

block.x = 96 ;
block.y = 96 ;
/////////////////////////////////////////////////////

// Update game objects
var update = function (modifier) {
	if (38 in keysDown) { // Player holding up
		if(hero.y-hero.speed * modifier >= 0 ){ // wall
			hero.y -= hero.speed * modifier;
		}
	}
	if (40 in keysDown) { // Player holding down
		if(hero.y+hero.speed * modifier <= canvas.height-32 ){ // wall
			hero.y += hero.speed * modifier;
		}
	}
	if (37 in keysDown) { // Player holding left
		if(hero.x-hero.speed * modifier >= 0 ){ // wall
			hero.x -= hero.speed * modifier;
		}		
	}
	if (39 in keysDown) { // Player holding right
		if(hero.x+hero.speed * modifier <= canvas.width-32 ){ // wall
			hero.x += hero.speed * modifier;
		}
		
		if (isTouching(hero,block))
		{
			hero.x = block.x - 32 ;//- 1;
		}			
	}


	// Are they touching?
	if(isTouching(hero,monster)){
		++monstersCaught;
		reset();
	}
/*	if (
		hero.x <= (monster.x + 32)
		&& monster.x <= (hero.x + 32)
		&& hero.y <= (monster.y + 32)
		&& monster.y <= (hero.y + 32)
	) {
		++monstersCaught;
		reset();
	}*/
};

// Handle touching
function  isTouching(a,b) {
	if(	
		a.x <= (b.x + 32)
		&& b.x <= (a.x + 32)
		&& a.y <= (b.y + 32)
		&& b.y <= (a.y + 32) )
	{
		return true;
	}
	else {
		return false

	}
}

// Draw everything
var render = function () {
	if (bgReady) {
		ctx.drawImage(bgImage, 0, 0);
	}

	if (heroReady) {
		ctx.drawImage(heroImage, hero.x, hero.y);
	}

	if (monsterReady) {
		ctx.drawImage(monsterImage, monster.x, monster.y);
	}

	if (blockReady) {
		ctx.drawImage(blockImage, block.x, block.y);
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
