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
	if (boxReady) {
		draw(boxImage, box.x, box.y);
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
	ctx.fillText("Random monster caught: " + monstersCaught, 32, 32);
};