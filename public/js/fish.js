function Fish(id){
	this.id = id;
}

Fish.prototype.setTimer = function(interval){
	var a = this;
	this.timer = $.timer(function(){
		var x = Math.random() * a.boundX + a.startX;
		a.y = Math.random() * a.boundY + a.startY;
		if(x > a.x){
			$("#"+a.id).css("transform", "rotateY(0deg)");
		}else{
			$("#"+a.id).css("transform", "rotateY(180deg)");
		}
		a.x = x;
		a.move();
	});
	this.timer.set({
		time : 5000,
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
	var t = window.getComputedStyle(this.getDOM()).top;
	var l = window.getComputedStyle(this.getDOM()).left;
	(this.getDOM()).style.top = t;
	(this.getDOM()).style.left = l;
	this.timer.pause();
};

Fish.prototype.resume = function(){
	this.timer.play(false);
};
