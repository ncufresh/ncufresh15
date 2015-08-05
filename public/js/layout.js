var currentScroll;
var portal = null; // object
var portalToggle;
var position, pre_position, save_position;
var portalHover, pause;
window.onload = init;
$(document).ready(function(){
	portalToggle = false;
	portalHover = false;
	pause = false;
	$(".button-collapse").sideNav();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('.links').dropdown({
		constrain_width: true, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		belowOrigin: true // Displays dropdown below the button
	});

	$(".nav-links").dropdown({
		constrain_width: false, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		belowOrigin: true
	});

	$("#portal").dropdown({
		constrain_width: false,
		hover: false,
		belowOrigin: true
	});

	$("#nav-qa-trigger").dropdown({
		constrain_width: false,
		hover: true,
		belowOrigin: true
	});

	$("#portal, #menu-list").hover(function(){
		portalHover = true;
		portalPause();
	},function(){
		portalHover = false;
		portalResume();
		setTimeout(portalMenuOff, 500);
	});
	$("#portal").click(function(){
		$("#menu-list").css("position", "fixed");
	});
	setInterval(doMove, 6000);
});

function portalMenuOn(){
	$("#portal-trigger").click();
}

function portalMenuOff(){
	if (!portalHover) {
		$("body").click();
	}
}

function portalPause(){
	pause = true;
	save_position = position;
	var t = window.getComputedStyle(portal).top;
	var l = window.getComputedStyle(portal).left;
	$("#portal").removeClass("position"+position);
	portal.style.top = t;
	portal.style.left = l;
}

function portalResume(){
	pause = false;
	position = save_position;
	$("#portal").addClass("position"+position);
	doMove();
}

function randomPosition(){
	pre_position = position;
	position = Math.ceil(Math.random()*5);
}

function doMove() {
	if (!pause){
		randomPosition();
		$("#portal").removeClass("position"+pre_position);
		$("#portal").addClass("position"+position);
	}
}

function init() {
	portal = document.getElementById("portal");
	doMove();
}
