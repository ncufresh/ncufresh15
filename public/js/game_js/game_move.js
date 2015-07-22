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

	//var distance = 4 ;

	if (38 in keysDown) { // Player holding up
		if(hero.y-hero.speed * modifier >= 0 ){ // edge
			hero.y -= hero.speed * modifier;
		} else{
			hero.y = 0 ;
		}

		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouching(hero,blocks[i]))
			{
				hero.y = blocks[i].y + blocks[i].height +1;
			}
		}

		canask=false;
		if(isTouching(hero,box)){
			hero.y = box.y + box.height + 1 ;
			canask=true;
		}

	}
	else if (40 in keysDown) { // Player holding down
		if(hero.y+hero.speed * modifier <= bgImage.height-32 ){ // edge
			hero.y += hero.speed * modifier;
		} else{
			hero.y = bgImage.height-hero.height;
		}

		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouching(hero,blocks[i]))
			{
				hero.y = blocks[i].y - hero.height -1;
			}
		}

		canask=false;
		if(isTouching(hero,box)){
			hero.y = box.y - box.height - 1 ;
			canask=true;
		}

	}
	else if (37 in keysDown) { // Player holding left
		if(hero.x-hero.speed * modifier >= 0 ){ // edge
			hero.x -= hero.speed * modifier;
		} else{
			hero.x = 0 ;
		}

		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouching(hero,blocks[i]))
			{
				hero.x = blocks[i].x + blocks[i].width +1;
			}
		}

		canask=false;
		if(isTouching(hero,box)){
			hero.x = box.x + box.width + 1 ;
			canask=true;
		}		

	}
	else if (39 in keysDown) { // Player holding right
		if(hero.x+hero.speed * modifier <= bgImage.width-32 ){ // edge
			hero.x += hero.speed * modifier;
		} else {
			hero.x = bgImage.width-hero.width;
		}
		
		// walls
		for (i=0;i<blocks.length ;i++ )
		{
			if (isTouching(hero,blocks[i]))
			{
				hero.x = blocks[i].x - hero.width -1;
			}
		}
		
		canask=false;
		if(isTouching(hero,box)){
			hero.x = box.x - box.width - 1 ;
			canask=true;
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





