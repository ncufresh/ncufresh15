var anim = function (elapsed) {

	// // Stop moving the hero
	// hero.direction.x = 0;
	// hero.direction.y = 0;

	// window.onkeydown = function(e) {
	// 	switch (e.keyCode){
	// 		case 37:
	// 			hero.direction.x = -1;
	// 			hero.direction.now = "left";
	// 			break;
	// 		case 38:
	// 			hero.direction.y = -1;
	// 			hero.direction.now = "up";
	// 			break;
	// 		case 39:
	// 			hero.direction.x = 1;
	// 			hero.direction.now = "right";
	// 			break;
	// 		case 40:
	// 			hero.direction.y = 1;
	// 			hero.direction.now = "down";
	// 			break;
	// 		default:
	// 			break;
	// 	}
	// }

	// if (37 in keysDown && hero.keylock == false) { // Left
	// 	hero.direction.x = -1;
	// 	hero.direction.now = "left";
	// }

	// if (38 in keysDown && hero.keylock == false ) { // Up
	// 	hero.direction.y = -1;
	// 	hero.direction.now = "up";
	// }

	// if (39 in keysDown && hero.keylock == false ) { // Right
	// 	hero.direction.x = 1;
	// 	hero.direction.now = "right";
	// }

	// if (40 in keysDown && hero.keylock == false ) { // Down
	// 	hero.direction.y = 1;
	// 	hero.direction.now = "down";
	// }


	// Update hero animation
	hero.animTimer += elapsed;
	if (hero.animTimer >= hero.animDelay) {
		// Enough time has passed to update the animation frame
		hero.animTimer = 0; // Reset the animation timer
		++hero.animFrame;
		if (hero.animFrame >= hero.animNumFrames) {
			// We've reached the end of the animation frames; rewind
			hero.animFrame = 0;
		}
	}

	// Update hero animation direction
	var d = hero.direction;
	if (d.x == 0 && d.y == -1) { // up
		hero.animSet = 1;
	} else if (d.x == 0 && d.y == 1) { // down
		hero.animSet = 4;
	} else if (d.x == -1 && d.y == 0) { // left
		hero.animSet = 7;
	} else if (d.x == 1 && d.y == 0) { // right
		hero.animSet = 10;
	}

};