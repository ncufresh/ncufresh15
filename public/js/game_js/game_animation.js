var anim = function (elapsed) {

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