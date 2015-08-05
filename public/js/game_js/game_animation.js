var anim = function (elapsed) {

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

	// Update hero animation about changing picture
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

	// Stop moving the hero
	if (hero.x == hero.end.x && hero.y == hero.end.y) {
		hero.keylock = false;
		hero.direction.x = 0;
		hero.direction.y = 0;
	}
	
	// Update hero animation about waiking
	var distance = 8;
	// left
	if (hero.direction.now == 'left' && hero.keylock==true) {
			hero.end.Timer += elapsed;
		if (hero.end.Timer >= hero.end.Delay) {
			hero.end.Timer = 0;
			hero.x-=distance;
		}
	};
	// up
	if (hero.direction.now == 'up' && hero.keylock==true) {
			hero.end.Timer += elapsed;
		if (hero.end.Timer >= hero.end.Delay) {
			hero.end.Timer = 0;
			hero.y-=distance;
		}
	};
	// right
	if (hero.direction.now == 'right' && hero.keylock==true) {
			hero.end.Timer += elapsed;
		if (hero.end.Timer >= hero.end.Delay) {
			hero.end.Timer = 0;
			hero.x+=distance;
		}
	};
	// down
	if (hero.direction.now == 'down' && hero.keylock==true) {
			hero.end.Timer += elapsed;
		if (hero.end.Timer >= hero.end.Delay) {
			hero.end.Timer = 0;
			hero.y+=distance;
		}
	};

};