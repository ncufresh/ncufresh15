var currentScroll;
$(document).ready(function(){
	$(window).scroll(function(){
		currentScroll = $(window).scrollTop();
		if (currentScroll > 390){
			window.setTimeout(showNav, 300);
		}else {
			window.setTimeout(hideNav, 300);
		}
	});

	$("#portal-img").hover(function(){
		$("#portal-trigger").click();
	}, function(){});

	setInterval(setPortalPosition, 6000);
});

function hideNav() {
	$("nav").removeClass("is-visible").addClass("is-hidden");
}

function showNav() {
	$("nav").removeClass("is-hidden").addClass("is-visible");
}

function getPortalT() {
	var top; //50~70
	top = Math.random()*20+50;
	return top;
}

function getPortalL() {
	var left;
	left = Math.random()*39+50;
	return left;
}

function setPortalPosition() {
	$("#portal").css("top", getPortalT()+"vh");
	$("#portal").css("left", getPortalL()+"%");
}
