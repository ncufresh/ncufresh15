///////////////////
// Background image
var bgReady = false;
var bgImage = new Image();
bgImage.onload = function () {
	bgReady = true;
};
bgImage.src = "game_images/background.png";

// Grasss image
var grassReady = false;
var grassImage = new Image();
grassImage.onload = function () {
	grassReady = true;
};
grassImage.src = "game_images/grass.png";

// Road1 image
var road1Ready = false;
var road1Image = new Image();
road1Image.onload = function () {
	road1Ready = true;
};
road1Image.src = "game_images/road1.png";

// Road2 image
var road2Ready = false;
var road2Image = new Image();
road2Image.onload = function () {
	road2Ready = true;
};
road2Image.src = "game_images/road2.png";

// Road_Corner1 image
var rc1Ready = false;
var rc1Image = new Image();
rc1Image.onload = function () {
	rc1Ready = true;
};
rc1Image.src = "game_images/road_corner1.png";

// Road_Corner2 image
var rc2Ready = false;
var rc2Image = new Image();
rc2Image.onload = function () {
	rc2Ready = true;
};
rc2Image.src = "game_images/road_corner2.png";

// Road_Corner3 image
var rc3Ready = false;
var rc3Image = new Image();
rc3Image.onload = function () {
	rc3Ready = true;
};
rc3Image.src = "game_images/road_corner3.png";

// Road_Corner4 image
var rc4Ready = false;
var rc4Image = new Image();
rc4Image.onload = function () {
	rc4Ready = true;
};
rc4Image.src = "game_images/road_corner4.png";

// Brick image
var brickReady = false;
var brickImage = new Image();
brickImage.onload = function () {
	brickReady = true;
};
brickImage.src = "game_images/brick.png";

// BrickSide image
var bricksideReady = false;
var bricksideImage = new Image();
bricksideImage.onload = function () {
	bricksideReady = true;
};
bricksideImage.src = "game_images/brickside.png";

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