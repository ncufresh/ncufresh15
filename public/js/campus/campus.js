$(document).ready(function() {

	$(".category").hover(
		function() {
			$(this).css("border-color", "#0D47A1");
		},
		function() {
			$(this).css("border-color", "#FAFAFA");
		}
	);

	$("#move").hover(
		function() {
			$("#map").css("visibility", "visible");
		},
		function() {
			$("#map").css("visibility", "hidden");
		}
	);

	$('.tooltipped').tooltip({delay: 50});
});