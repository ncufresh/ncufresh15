function Fish(id){
	this.id = id;
}

Fish.prototype.setTimer = function(interval){
	this.timer = $.timer(this.move);
	this.timer.set({
		time : 5000,
		autostart : true
	});
};

Fish.prototype.getDOM = function(){
	return document.getElementById(this.id);
};

Fish.prototype.setImage = function(url){
	$("#"+this.id).css("background-image", url);
};

Fish.prototype.setSize = function(width, height){
	this.width = width;
	this.height = height;
	$("#"+this.id).css({
		"width": this.width,
		"height": this.height
	});
};

Fish.prototype.setBound = function(x, y, width, height){
	this.startX = x;
	this.startY = y;
	this.boundX = width;
	this.boundY = height;
};

Fish.prototype.randomPosition = function(){
	this.x = Math.random() * this.boundX + this.startX;
	this.y = Math.random() * this.boundY + this.startY;
};

Fish.prototype.changePose = function(poseWidth, poseNumber){};

Fish.prototype.move = function(){
	this.randomPosition();
	$("#"+this.id).css("top", this.x+"vh");
	$("#"+this.id).css("left", this.y+"%");
};

Fish.prototype.pause = function(){
	var t = window.getComputedStyle(portal).top;
	var l = window.getComputedStyle(portal).left;
	(this.getDOM()).style.top = t;
	(this.getDOM()).style.left = l;
	this.timer.pause();
};
Fish.prototype.resume = function(){
	this.timer.play(false);
};
