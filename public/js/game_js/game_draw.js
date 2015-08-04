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

// 0 草地
// 1 樹叢
// 2 磚塊
// 3 磚塊邊

// 4 直道路 road1
// 5 橫道路 road2

// 6 轉角1 左上
// 7 轉角2 右上
// 8 轉角3 左下
// 9 轉角4 右下

	// if (bgReady) {
	// 	draw(bgImage, 0, 0);
	// }
	if (grassReady) {
		for (var i = 0; i <100; i++) {
			for (var j = 0; j < 100; j++) {
				draw(grassImage,grid.length*i,grid.length*j);
			};
		};
		
	}
	// if (heroReady) {
	// 	draw(heroImage, canvas.width / 2, canvas.height / 2, 'hero');
	// }

	if (blockReady) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==1) {
					draw(blockImage,grid.length*j,grid.length*i);
				}
			}
		}
	}

	if (brickReady) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==2) {
					draw(brickImage,grid.length*j,grid.length*i);
				}
			}
		}
	}

	if (bricksideReady) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==3) {
					draw(bricksideImage,grid.length*j,grid.length*i);
				}
			}
		}
	}
	if (road1Ready) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==4) {
					draw(road1Image,grid.length*j,grid.length*i);
				}
			}
		}
	}
	if (road2Ready) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==5) {
					draw(road2Image,grid.length*j,grid.length*i);
				}
			}
		}
	}

	if (rc1Ready) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==6) {
					draw(rc1Image,grid.length*j,grid.length*i);
				}
			}
		}
	}
	if (rc2Ready) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==7) {
					draw(rc2Image,grid.length*j,grid.length*i);
				}
			}
		}
	}
	if (rc3Ready) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==8) {
					draw(rc3Image,grid.length*j,grid.length*i);
				}
			}
		}
	}

	if (rc4Ready) {
		for (var i = 0; i < 100; i++) {
			for (var j = 0; j < 100; j++) {
				if (map[i][j]==9) {
					draw(rc4Image,grid.length*j,grid.length*i);
				}
			}
		}
	}
	if (rt1Ready) {
		draw(rt1Image,grid.length*64,grid.length*80);
		draw(rt1Image,grid.length*67,grid.length*72);
		draw(rt1Image,grid.length*84,grid.length*69);
	}
	if (rc2Ready) {
		draw(rt2Image,grid.length*82,grid.length*40);
		draw(rt2Image,grid.length*63,grid.length*63);
		draw(rt2Image,grid.length*67,grid.length*75);
		draw(rt2Image,grid.length*75,grid.length*44);
		draw(rt2Image,grid.length*82,grid.length*69);
	}
	if (rc3Ready) {
		draw(rt3Image,grid.length*48,grid.length*72);
		draw(rt3Image,grid.length*82,grid.length*44);
		draw(rt3Image,grid.length*82,grid.length*54);

	}
	if (rc4Ready) {
		draw(rt4Image,grid.length*41,grid.length*33);
		draw(rt4Image,grid.length*20,grid.length*38);
	}
	//

	for (var i = 0; i < boxs.length; i++) {
		if (boxcloseReady && boxs[i].open==false) {
			draw(boxcloseImage, boxs[i].x, boxs[i].y);
		}
		if (boxopenReady && boxs[i].open) {
			draw(boxopenImage, boxs[i].x, boxs[i].y);
		}
	};

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
			for(j=0;j<blocks[i].width/grid.length;j++){
				for(k=0;k<blocks[i].height/grid.length;k++){
					draw(blockImage, blocks[i].x+grid.length*j, blocks[i].y+grid.length*k);
				}
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

	// draw time
	if (second>9) {
		ctx.fillStyle = "rgba(0, 0, 0,0.8)";
		ctx.font = "bold 30px Helvetica";
		ctx.textAlign = "right";
		ctx.textBaseline = "top";
		ctx.fillText("0"+minute+":"+second, canvas.width -32, 20);
	} else{
		ctx.fillStyle = "rgba(0, 0, 0,0.8)";
		ctx.font = "bold 30px Helvetica";
		ctx.textAlign = "right";
		ctx.textBaseline = "top";
		ctx.fillText("0"+minute+":0"+second, canvas.width -32, 20);
	};


	
};