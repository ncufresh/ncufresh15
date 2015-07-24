$(document).ready(function() {

	$(".category").on({
		mouseenter: function() {
			$(this).css("border-color", "#2196F3");
		},
		mouseleave: function() {
			$(this).css("border-color", "#BFE0FF");
		}
	});

	$('.materialboxed').materialbox();
});