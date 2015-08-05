///////////////////
// Grass image
var grassReady = false;
var grassImage = new Image();
grassImage.onload = function () {
	grassReady = true;
};
grassImage.src = "game_images/grass.png";

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

// Road_Three1 image
var rt1Ready = false;
var rt1Image = new Image();
rt1Image.onload = function () {
	rt1Ready = true;
};
rt1Image.src = "game_images/road_three1.png";
// Road_Three2 image
var rt2Ready = false;
var rt2Image = new Image();
rt2Image.onload = function () {
	rt2Ready = true;
};
rt2Image.src = "game_images/road_three2.png";
// Road_Three3 image
var rt3Ready = false;
var rt3Image = new Image();
rt3Image.onload = function () {
	rt3Ready = true;
};
rt3Image.src = "game_images/road_three3.png";
// Road_Three4 image
var rt4Ready = false;
var rt4Image = new Image();
rt4Image.onload = function () {
	rt4Ready = true;
};
rt4Image.src = "game_images/road_three4.png";

// Block image
var blockReady = false;
var blockImage = new Image();
blockImage.onload = function () {
	blockReady = true;
};
blockImage.src = "game_images/block.png";

// Box_Close image
var boxcloseReady = false;
var boxcloseImage = new Image();
boxcloseImage.onload = function () {
	boxcloseReady = true;
};
boxcloseImage.src = "game_images/box_close.png";
// Box_Open image
var boxopenReady = false;
var boxopenImage = new Image();
boxopenImage.onload = function () {
	boxopenReady = true;
};
boxopenImage.src = "game_images/box_open.png";

//Heros image
//bugs at ready
var herosReady = false;
var heroImageArray = new Array();
heroImageArray.onload = function () {
	herosReady = true;
};
for (var i = 0; i < 12; i++) {
	heroImageArray[i] = new Image();
	heroImageArray[i].src = "game_images/hero/"+i+".png";
};