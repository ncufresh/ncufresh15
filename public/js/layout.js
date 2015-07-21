var currentScroll;
var portal = null; // object
var portalToggle;
var portalTop, portalLeft;
var portalHover;
window.onload = init;
$(document).ready(function(){
	portalToggle = false;
	portalHover = false;
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

	$("#portal-trigger").dropdown({
		hover: false
	});

	$("#nav-qa-trigger").dropdown({
		constrain_width: false,
		hover: true,
		belowOrigin: true
	});

	$('#portal-img').click(function(e) {
		e.stopPropagation();
		if (portalToggle) {
			portalMenuOff();
		} else {
			portalMenuOn();
		}
		portalToggle = !portalToggle;
	});

	$('#portal').hover(function() {
		portalHover = true;
		$(this).stop();
	}, function(){
		portalHover = false;
		setTimeout(portalMenuOff, 3000);
		init();
	});

});

function portalMenuOn(){
	$("#portal-trigger").click();
}

function portalMenuOff(){
	if (!portalHover) {
		$("body").click();
	}
}

function randomPosition(){
	portalTop = Math.random()*50;
	portalLeft = Math.random()*38+50;
}

function doMove() {
	randomPosition();
	$("#portal").animate({
		top: ""+portalTop+"px",
   		left: ""+portalLeft+"px"},5000, doMove);
}

function init() {
	doMove();
}
