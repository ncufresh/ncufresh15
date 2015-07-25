///////////////////
// Background image
var bgReady = false;
var bgImage = new Image();
bgImage.onload = function () {
	bgReady = true;
};
bgImage.src = "game_images/background.png";

///////////////////////////
// bgImage.width = 6400;
// bgImage.height = 6400;
///////////////////////////

// Grasss image
var grassReady = false;
var grassImage = new Image();
grassImage.onload = function () {
	grassReady = true;
};
grassImage.src = "game_images/grass.png";

// Road image
var roadReady = false;
var roadImage = new Image();
roadImage.onload = function () {
	roadReady = true;
};
roadImage.src = "game_images/road.png";

// Hero image
var heroReady = false;
var heroImage = new Image();
heroImage.onload = function () {
	heroReady = true;
};
//heroImage.src = "game_images/hero.png";

// Monster image
var monsterReady = false;
var monsterImage = new Image();
monsterImage.onload = function () {
	monsterReady = true;
};
monsterImage.src = "game_images/monster.png";

// Block image
var blockReady = false;
var blockImage = new Image();
blockImage.onload = function () {
	blockReady = true;
};
blockImage.src = "game_images/block.png";

// Box image
var boxReady = false;
var boxImage = new Image();
boxImage.onload = function () {
	boxReady = true;
};
boxImage.src = "game_images/box1.png";
////////////////

// test image
var testReady = false;
var testImage = new Image();
testImage.onload = function () {
	testReady = true;
};
testImage.src = "game_images/test.png";




var herosReady = false;
var heroImageArray = new Array();
heroImageArray.onload = function () {
	herosReady = true;
};
for (var i = 0; i < 12; i++) {
	heroImageArray[i] = new Image();
	heroImageArray[i].src = "game_images/hero/"+i+".png";
};