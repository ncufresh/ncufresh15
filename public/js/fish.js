function Fish(id){
	this.id = id;
}

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

Fish.prototype.randomPosition = function(x, y, width, height){};

Fish.prototype.changePose = function(poseWidth, poseNumber){};

Fish.prototype.movePause = function(){};
Fish.prototype.startPause = function(){};
