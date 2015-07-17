
// Handle keyboard controls
var keysDown = {};

addEventListener("keydown", function (e) {
	keysDown[e.keyCode] = true;
}, false);

addEventListener("keyup", function (e) {
	delete keysDown[e.keyCode];
}, false);


// Update game objects
var update = function (modifier) {
	if (38 in keysDown) { // Player holding up
		if(hero.y-hero.speed * modifier >= 0 ){ // edge
			hero.y -= hero.speed * modifier;
		}

		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouching(hero,blocks[i]))
			{
				hero.y = blocks[i].y + blocks[i].height +1;
			}
		}
	
	}
	if (40 in keysDown) { // Player holding down
		if(hero.y+hero.speed * modifier <= bgImage.height-32 ){ // edge
			hero.y += hero.speed * modifier;
		}

		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouching(hero,blocks[i]))
			{
				hero.y = blocks[i].y - hero.height -1;
			}
		}


	}
	if (37 in keysDown) { // Player holding left
		if(hero.x-hero.speed * modifier >= 0 ){ // edge
			hero.x -= hero.speed * modifier;
		}

		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouching(hero,blocks[i]))
			{
				hero.x = blocks[i].x + blocks[i].width +1;
			}
		}

	}
	if (39 in keysDown) { // Player holding right
		if(hero.x+hero.speed * modifier <= bgImage.width-32 ){ // edge
			hero.x += hero.speed * modifier;
		}
		
		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouching(hero,blocks[i]))
			{
				hero.x = blocks[i].x - hero.width -1;
			}
		}
		
	}

	// Are they touching?
	if(isTouching(hero,monster)){
		++monstersCaught;
		reset();
	}
};

// Handle touching
function isTouching(a,b) {
	if(	
		a.x <= (b.x + b.width)
		&& b.x <= (a.x + a.width)
		&& a.y <= (b.y + b.height)
		&& b.y <= (a.y + a.height) 
	)
	{
		return true;
	}
	else {
		return false

	}
}