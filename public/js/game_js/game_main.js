// Create the canvas
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
canvas.width = 512;
canvas.height = 480;
// canvas.width = bgImage.width/2;
// canvas.height = bgImage.height/2
document.getElementById('gg').appendChild(canvas);

// Game objects
var map = {
	left: 0,
	top: 0
};

var hero = {
	speed: 256, // movement in pixels per second
	x : canvas.width / 2,
	y : canvas.height / 2,
	width : 32,
	height : 32
};
var monster = {};
var monstersCaught = 0;

var block1 = {x:165,y:120,width:32,height:32,type:"block"};
var block2 = {x:300,y:288,width:32,height:32,type:"block"};
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
	// monster.x = Math.random() * bgImage.width;
	// monster.y = Math.random() * bgImage.height;
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
		//ctx.drawImage(bgImage, 0, 0);
		if (map.left>=0 && map.top>=0) {		
			ctx.clearRect(0,0,canvas.width,canvas.height);
			ctx.drawImage(bgImage,map.left,map.top,canvas.width,canvas.height,0,0,canvas.width,canvas.height);
		}
		else if(map.left<0 && map.top>=0){
			ctx.clearRect(0,0,canvas.width,canvas.height);
			ctx.drawImage(bgImage,0,map.top,canvas.width,canvas.height,0,0,canvas.width,canvas.height);
		}
		else if(map.left>=0 && map.top<0){
			ctx.clearRect(0,0,canvas.width,canvas.height);
			ctx.drawImage(bgImage,map.left,0,canvas.width,canvas.height,0,0,canvas.width,canvas.height);
		}		
		else{
			ctx.clearRect(0,0,canvas.width,canvas.height);
			ctx.drawImage(bgImage,0,0,canvas.width,canvas.height,0,0,canvas.width,canvas.height);
		}
	}

	if (heroReady) {
		//ctx.drawImage(heroImage, hero.x, hero.y);
		//hero always in the middle
		
		if (map.left>=0 && map.top>=0) {
			ctx.drawImage(heroImage, canvas.width / 2, canvas.height / 2);
		}
		else if(map.left<0 && map.top>=0){
			ctx.drawImage(heroImage, hero.x, canvas.height / 2);
		}
		else if(map.left>=0 && map.top<0){
			ctx.drawImage(heroImage, canvas.width / 2, hero.y);
		}		
		else{
			ctx.drawImage(heroImage, hero.x, hero.y);
		}
	}
	if (monsterReady) {
		ctx.drawImage(monsterImage, 0, 0, 32, 32, monster.x, monster.y, 32, 32);		
		//ctx.drawImage(monsterImage, monster.x, monster.y);
		console.log(monster.x+"//"+monster.y);
	}
	// if (blockReady) {
	// 	for (i=0;i<blocks.length ;i++ )
	// 	{
	// 		if (blocks[i].width!=32) {
	// 			for(j=0;j<blocks[i].width/32;j++){
	// 				ctx.drawImage(blockImage, blocks[i].x+32*j, blocks[i].y);
	// 			}
	// 		}
	// 		else if(blocks[i].height!=32){
	// 			for(j=0;j<blocks[i].height/32;j++){
	// 				ctx.drawImage(blockImage, blocks[i].x, blocks[i].y+32*j);
	// 			}			
	// 		}
	// 		else{
	// 			ctx.drawImage(blockImage, blocks[i].x, blocks[i].y);
	// 		}
	// 	}
	// }



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

// Cross-browser smap.toport for requestAnimationFrame
var w = window;
requestAnimationFrame = w.requestAnimationFrame || w.webkitRequestAnimationFrame || w.msRequestAnimationFrame || w.mozRequestAnimationFrame;

// Let's play this game!
var then = Date.now();

reset();
main();
