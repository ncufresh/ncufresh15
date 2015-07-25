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

	//console.log("(endx"+hero.end.x+"&x"+hero.x+")(endy"+hero.end.y+"&y"+hero.y);
	//console.log("hero.keylock"+hero.keylock);
	console.log(hero.end.x/grid.length+","+hero.end.y/grid.length);

	// left
	if (hero.direction.now == 'left' && hero.keylock==true) {
			hero.end.Timer += modifier*1000;
		if (hero.end.Timer >= hero.end.Delay) {
			hero.end.Timer = 0;
			hero.x-=16;
		}
	};

	// up
	if (hero.direction.now == 'up' && hero.keylock==true) {
			hero.end.Timer += modifier*1000;
		if (hero.end.Timer >= hero.end.Delay) {
			hero.end.Timer = 0;
			hero.y-=16;
		}
	};

	// right
	if (hero.direction.now == 'right' && hero.keylock==true) {
			hero.end.Timer += modifier*1000;
		if (hero.end.Timer >= hero.end.Delay) {
			hero.end.Timer = 0;
			hero.x+=16;
		}
	};

	// down
	if (hero.direction.now == 'down' && hero.keylock==true) {
			hero.end.Timer += modifier*1000;
		if (hero.end.Timer >= hero.end.Delay) {
			hero.end.Timer = 0;
			hero.y+=16;
		}
	};

	if (37 in keysDown && hero.keylock == false) { // Player holding left
		
		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouchingleft(hero,blocks[i]))
			{
				//hero.x = blocks[i].x + blocks[i].width;
				blocklock.left = true;
			}
		}

		// if (Things[hero.end.y/grid.length][hero.end.x/grid.length-1]==0) {
		// 	blocklock.left = true;
		// }

		canask=false;
		if(isTouchingleft(hero,box)){
			hero.x = box.x + box.width;
			blocklock.left = true ;
			canask=true;
		}	

		if(hero.x - grid.length >= 0 && blocklock.left == false ){ // edge
			//hero.x -=  grid.length;
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
				//hero.y = blocks[i].y + blocks[i].height;
				blocklock.top = true;
			}
		}

		canask=false;
		if(isTouchingup(hero,box)){
			hero.y = box.y + box.height;
			blocklock.top = true;
			canask=true;
		}

		if(hero.y - grid.length >= 0 && blocklock.top==false){ // edge
			//hero.y -=  grid.length;
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
				//hero.x = blocks[i].x - blocks[i].width;
				blocklock.right = true;
			}
		}
		
		canask=false;
		if(isTouchingright(hero,box)){
			hero.x = box.x - box.width;
			blocklock.right = true;
			canask=true;
		}

		if(hero.x + grid.length <= game.length-grid.length && blocklock.right==false){ // edge
			//hero.x +=  grid.length;
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
				//hero.y = blocks[i].y - blocks[i].height;
				blocklock.bottom = true;
			}
		}

		canask=false;
		if(isTouchingdown(hero,box)){
			hero.y = box.y - box.height;
			blocklock.bottom = true;
			canask=true;
		}
		
		if(hero.y + grid.length <= game.length-grid.length && blocklock.bottom==false){ // edge
			//hero.y +=  grid.length;
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

	if (hero.x == hero.end.x && hero.y == hero.end.y) {
		hero.keylock = false;
		// Stop moving the hero
		hero.direction.x = 0;
		hero.direction.y = 0;				
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




