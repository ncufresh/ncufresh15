function Fish(id, menu){
	this.id = id;
	this.menu = menu;
}

Fish.prototype.setTimer = function(interval){
	var a = this;
	a.timer = $.timer(function(){
		var x = Math.random() * a.boundX + a.startX;
		a.y = Math.random() * a.boundY + a.startY;
		if(x > a.x){
			$("#"+a.id).css("transform", "rotateY(0deg)");
		}else{
			$("#"+a.id).css("transform", "rotateY(180deg)");
		}
		a.x = x;
		if(this.menu != null){
			$("#"+a.id+",#"+a.menu).hover(function(){
				a.pause();
			},function(){
				a.resume();
			});
		}else{
			$("#"+a.id).hover(function(){ a.pause();}, function(){a.resume();});
		}
		a.move();
	});
	this.timer.set({
		time : interval,
		autostart : true
	});
};

Fish.prototype.getDOM = function(){
	return document.getElementById(this.id);
};

Fish.prototype.setImage = function(url){
	$("#"+this.id).css("background-image", "url("+url+")");
};

Fish.prototype.setSize = function(width, height){
	this.width = width;
	this.height = height;
	$("#"+this.id).css({
		"width": this.width+"px",
		"height": this.height+"px"
	});
};

Fish.prototype.setBound = function(x, y, width, height){
	this.startX = x;
	this.startY = y;
	this.boundX = width;
	this.boundY = height;
};

Fish.prototype.move = function(){
	$("#"+this.id).css("top", this.y+"vh");
	$("#"+this.id).css("left", this.x+"%");
};

Fish.prototype.pause = function(){
	console.log(this.p);
	var t = window.getComputedStyle(this.getDOM()).top;
	var l = window.getComputedStyle(this.getDOM()).left;
	(this.getDOM()).style.top = t;
	(this.getDOM()).style.left = l;
	this.timer.pause();
};

Fish.prototype.resume = function(){
	console.log(this.p);
	this.timer.play(false);
	setTimeout(this.close, 5000);
};

Fish.prototype.close = function(){
	$("body").click();
}
