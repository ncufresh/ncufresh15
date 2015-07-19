// Create the canvas
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
canvas.width = 512;
canvas.height = 480;
document.getElementById('gamecanvas').appendChild(canvas);


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

// Is hero in the edge? true->if || false->direct draw
var hx = false;
var hy = false;
// handling draw everything
function draw(img, x, y, t) {
	var nx = x - (hero.x-canvas.width / 2); // now x
	var ny = y - (hero.y-canvas.height / 2); // now y

	//t(thing):'hero' or else
	if (t == 'hero') {
		if (hx) {
			nx = hero.x; // left
			if (hero.x > canvas.width) { // or right
				nx = hero.x - (bgImage.width-canvas.width);
			}
		} else { // always in the middle
			nx = x;
		}
		///
		if (hy) { // top
			ny = hero.y;
			if (hero.y > canvas.height) { // or botton
				ny = hero.y - (bgImage.height-canvas.height);
			}
		} else { // always in the middle
			ny = y;
		}
	} else { // background,monster,blocks......
		if (hx) {
			nx = x; // left
			if (hero.x > canvas.width) { // or right
				nx = x - (bgImage.width-canvas.width);
			}
		}
		///
		if (hy) {
			ny = y; // top
			if (hero.y > canvas.height) { // or botton
				ny = y - (bgImage.height-canvas.height);
			}
		}
		
	}
	ctx.drawImage(img, nx, ny);
}



// Draw everything
var render = function () {

	// Is hero in the edge? true->if(){}... || false->direct draw
	hx = hero.x-canvas.width/2 < 0 || hero.x-canvas.width/2 > bgImage.width-canvas.width;
	hy = hero.y-canvas.height/2 < 0 || hero.y-canvas.height/2 > bgImage.height-canvas.height;

	if (bgReady) {
		draw(bgImage, 0, 0);
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
