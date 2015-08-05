var portal = new Fish("portal");
portal.setImage("/img/fish1.gif");
portal.setSize(80, 50);
portal.setBound(75, 30, 13, 20);
portal.setTimer();
var portalHover;
$(document).ready(function(){
	portalHover = false;
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
		portal.pause();
	},function(){
		portalHover = false;
		portal.resume();
		setTimeout(MenuOff, 500);
	});

	$("#"+portal.id).click(function(){
		$("#menu-list").css("position", "fixed");
	});
});

function MenuOff(){
	if (!portalHover) {
		$("body").click();
	}
}
