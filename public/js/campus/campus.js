$(document).ready(function() {

	$(".category").hover(
		function() {
			$(this).css("border-color", "#0D47A1");
		},
		function() {
			$(this).css("border-color", "#FFFFFF");
		}
	);
});