var currentScroll, portalToggle;
$(document).ready(function(){
	portalToggle = false;
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

	$('#portal-img').click(function(e) {
		e.stopPropagation();
		if (portalToggle) {
			portalMenuOff();
		} else {
			portalMenuOn();
			setTimeout(portalMenuOff, 3000);
		}
		portalToggle = !portalToggle;
	});

	setInterval(setPortalPosition, 6000);
});

function portalMenuOn(){
	$("#portal-trigger").click();
}

function portalMenuOff(){
	$("body").click();
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
