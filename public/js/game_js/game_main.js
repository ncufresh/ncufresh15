// Create the canvas
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
canvas.width = 512;
canvas.height = 480;
//document.body.appendChild(canvas);
document.getElementById('gg').appendChild(canvas);

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
var block2 = {x:300,y:288,width:160,height:32,type:"block"};
var block3 = {x:365,y:159,width:32,height:32,type:"block"};

var block4 = {x:165,y:32,width:96,height:32,type:"block"};

var blocks=[block1,block2,block3,block4];

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
		for (i=0;i<blocks.length ;i++ )
		{
			if (blocks[i].width!=32) {
				for(j=0;j<blocks[i].width/32;j++){
					ctx.drawImage(blockImage, blocks[i].x+32*j, blocks[i].y);
				}
			}
			else if(blocks[i].height!=32){
				for(j=0;j<blocks[i].height/32;j++){
					ctx.drawImage(blockImage, blocks[i].x, blocks[i].y+32*j);
				}			
			}
			else{
				ctx.drawImage(blockImage, blocks[i].x, blocks[i].y);
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
