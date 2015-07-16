var currentScroll;
$(document).ready(function(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrain_width: true, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		gutter: 0, // Spacing from edge
		belowOrigin: true // Displays dropdown below the button
		}
	);
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
