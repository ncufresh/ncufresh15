$(document).ready(function() {

	$(".category").hover(
		function() {
			$(this).css("border-color", "#2196F3");
		},
		function() {
			$(this).css("border-color", "#BFE0FF");
		}
	);
});