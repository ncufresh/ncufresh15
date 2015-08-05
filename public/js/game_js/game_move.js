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

	if (37 in keysDown && hero.keylock == false) { // Player holding left
		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouchingleft(hero,blocks[i]))
			{
				blocklock.left = true;
			}
		}

		if (map[hero.end.y/grid.length][hero.end.x/grid.length-1]==1) {
			blocklock.left = true;
		}

		canask=false;
		for (i=0;i<boxs.length ;i++ )
		{	
			if (isTouchingleft(hero,boxs[i]))
			{
				boxs[i].isme=true;
				blocklock.left = true ;
				canask=true;
				hero.direction.x = -1;
				hero.direction.now = "left";
			} else{
				boxs[i].isme=false;
			}
		}
		if(hero.x - grid.length >= 0 && blocklock.left == false ){ // edge
			blocklock.left = false;
			blocklock.top = false;
			blocklock.right = false;
			blocklock.bottom = false;			
			hero.end.x -= grid.length;
			hero.keylock = true;
			hero.direction.x = -1;
			hero.direction.now = "left";
		}

	}

	if (38 in keysDown && hero.keylock == false) { // Player holding up

		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouchingup(hero,blocks[i]))
			{
				blocklock.top = true;
			}
		}

		if (map[hero.end.y/grid.length-1][hero.end.x/grid.length]==1) {
			blocklock.top = true;
		}

		canask=false;
		for (i=0;i<boxs.length ;i++ )
		{	
			if (isTouchingup(hero,boxs[i]))
			{
				boxs[i].isme=true;
				blocklock.top = true;
				canask=true;
				hero.direction.y = -1;
				hero.direction.now = "up";
			} else{
				boxs[i].isme=false;
			}
		}

		if(hero.y - grid.length >= 0 && blocklock.top==false){ // edge
			blocklock.left = false;
			blocklock.top = false;
			blocklock.right = false;
			blocklock.bottom = false;			
			hero.end.y -= grid.length;
			hero.keylock = true;
			hero.direction.y = -1;
			hero.direction.now = "up";
		}

	}

	if (39 in keysDown && hero.keylock == false) { // Player holding right
		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouchingright(hero,blocks[i]))
			{
				blocklock.right = true;
			}
		}
		
		if (map[hero.end.y/grid.length][hero.end.x/grid.length+1]==1) {
			blocklock.right = true;
		}

		canask=false;
		for (i=0;i<boxs.length ;i++ )
		{	
			if (isTouchingright(hero,boxs[i]))
			{
				boxs[i].isme=true;
				blocklock.right = true;
				canask=true;
				hero.direction.x = 1;
				hero.direction.now = "right";
			} else{
				boxs[i].isme=false;
			}
		}

		if(hero.x + grid.length <= game.length-grid.length && blocklock.right==false){ // edge
			blocklock.left = false;
			blocklock.top = false;
			blocklock.right = false;
			blocklock.bottom = false;		
			hero.end.x += grid.length;
			hero.keylock = true;
			hero.direction.x = 1;
			hero.direction.now = "right";		
		}
	}

	if (40 in keysDown && hero.keylock == false) { // Player holding down

		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouchingdown(hero,blocks[i]))
			{
				blocklock.bottom = true;
			}
		}

		if (map[hero.end.y/grid.length+1][hero.end.x/grid.length]==1) {
			blocklock.bottom = true;
		}


		canask=false;
		for (i=0;i<boxs.length ;i++ )
		{	
			if (isTouchingdown(hero,boxs[i]))
			{
				boxs[i].isme=true;
				blocklock.bottom = true;
				canask=true;
				hero.direction.y = 1;
				hero.direction.now = "down";
			} else{
				boxs[i].isme=false;
			}
		}
		
		if(hero.y + grid.length <= game.length-grid.length && blocklock.bottom==false){ // edge
			blocklock.left = false;
			blocklock.top = false;
			blocklock.right = false;
			blocklock.bottom = false;		
			hero.end.y += grid.length;
			hero.keylock = true;
			hero.direction.y = 1;
			hero.direction.now = "down";
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

function isTouchingleft(a,b) {
	if(	
		b.x < (a.x + a.width)
		&& a.y < (b.y + b.height)
		&& b.y < (a.y + a.height)

		&& a.x == (b.x + b.width)
	)
	{
		return true;
	}
	else {
		return false
	}
}
function isTouchingup(a,b) {
	if(	
		a.x < (b.x + b.width)
		&& b.x < (a.x + a.width)
		&& b.y < (a.y + a.height)

		&& a.y == (b.y + b.height)
	)
	{
		return true;
	}
	else {
		return false
	}
}
function isTouchingright(a,b) {
	if(	
		a.x < (b.x + b.width)
		&& a.y < (b.y + b.height)
		&& b.y < (a.y + a.height)

		&& b.x == (a.x + a.width)
	)
	{
		return true;
	}
	else {
		return false
	}
}
function isTouchingdown(a,b) {
	if(	
		a.x < (b.x + b.width)
		&& b.x < (a.x + a.width)
		&& a.y < (b.y + b.height)

		&& b.y == (a.y + a.height)
	)
	{
		return true;
	}
	else {
		return false
	}
}




