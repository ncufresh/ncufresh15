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
				nx = hero.x - (game.length-canvas.width);
			}
		} else { // always in the middle
			nx = x;
		}
		///
		if (hy) { // top
			ny = hero.y;
			if (hero.y > canvas.height) { // or botton
				ny = hero.y - (game.length-canvas.height);
			}
		} else { // always in the middle
			ny = y;
		}
	} else { // background,monster,blocks......
		if (hx) {
			nx = x; // left
			if (hero.x > canvas.width) { // or right
				nx = x - (game.length-canvas.width);
			}
		}
		///
		if (hy) {
			ny = y; // top
			if (hero.y > canvas.height) { // or botton
				ny = y - (game.length-canvas.height);
			}
		}
	}
	ctx.drawImage(img, nx, ny);
}


// Draw everything
var render = function () {
	// Is hero in the edge? true->if(){}... || false->direct draw
	hx = hero.x-canvas.width/2 < 0 || hero.x-canvas.width/2 > game.length-canvas.width;
	hy = hero.y-canvas.height/2 < 0 || hero.y-canvas.height/2 > game.length-canvas.height;


	// if (bgReady) {
	// 	draw(bgImage, 0, 0);
	// }
	if (grassReady) {
		for (var i = 0; i <100; i++) {
			for (var j = 0; j < 100; j++) {
				draw(grassImage,grid.length*i,grid.length*j);
				//draw(testImage,grid.length*i,grid.length*j);
			};
		};
		
	}
	// if (heroReady) {
	// 	draw(heroImage, canvas.width / 2, canvas.height / 2, 'hero');
	// }


	if (roadReady) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==2) {
					draw(roadImage,grid.length*j,grid.length*i);
				}
			}
		}
	}

	if (brickReady) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==3) {
					draw(brickImage,grid.length*j,grid.length*i);
				}
			}
		}
	}

	if (boxReady) {
		draw(boxImage, box.x, box.y);
	}
	if (monsterReady) {
		draw(monsterImage, monster.x, monster.y);
	}
	// if (roadReady) {
	// 	for (i=0;i<roads.length;i++ )
	// 	{
	// 		for(j=0;j<roads[i].width/grid.length;j++){
	// 			for(k=0;k<roads[i].height/grid.length;k++){
	// 				draw(roadImage, roads[i].x+grid.length*j, roads[i].y+grid.length*k);
	// 			}
	// 		}
			
	// 	}
	// }
	if (blockReady) {
		for (i=0;i<blocks.length;i++ )
		{
			// if (blocks[i].width!=32 && blocks[i].height==32) {
			// 	for(j=0;j<blocks[i].width/32;j++){
			// 		draw(blockImage, blocks[i].x+32*j, blocks[i].y);
			// 	}
			// }
			// else if(blocks[i].width==32 && blocks[i].height!=32){
			// 	for(j=0;j<blocks[i].height/32;j++){
			// 		draw(blockImage, blocks[i].x, blocks[i].y+32*j);
			// 	}			
			// }
			// else if(blocks[i].width!=32 && blocks[i].height!=32){
			if(blocks[i].width!=grid.length || blocks[i].height!=grid.length){
				for(j=0;j<blocks[i].width/grid.length;j++){
					for(k=0;k<blocks[i].height/grid.length;k++){
						draw(blockImage, blocks[i].x+grid.length*j, blocks[i].y+grid.length*k);
					}
				}
			}
			else{
				draw(blockImage, blocks[i].x, blocks[i].y);
			}
		}
	}

	if (true) {
		var nowimage = hero.animSet+hero.animFrame;
		if (hero.direction.x==0 && hero.direction.y ==0) {
		    switch (hero.direction.now){
            case "up":
            	draw(heroImageArray[0], canvas.width / 2, canvas.height / 2, 'hero');
                break;
            case "down":
            	draw(heroImageArray[3], canvas.width / 2, canvas.height / 2, 'hero');     
                break;
            case "left":
           		draw(heroImageArray[6], canvas.width / 2, canvas.height / 2, 'hero');   
                break;
            case "right":
            	draw(heroImageArray[9], canvas.width / 2, canvas.height / 2, 'hero');  
                break;
      		}
		} else {
			draw(heroImageArray[nowimage], canvas.width / 2, canvas.height / 2, 'hero');
		}
	}
	// Score
	ctx.fillStyle = "rgba(0, 0, 0,0.8)";
	ctx.font = "24px Helvetica";
	ctx.textAlign = "left";
	ctx.textBaseline = "top";
	ctx.fillText("Random monster caught: " + monstersCaught, 32, 480);
};