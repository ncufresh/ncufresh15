$(document).ready(function() {

	$("#small_map").on({
		mouseenter: function() {
			$("#map").show().animate({
				width: "80%",
				right: "1%",
				top: "1%"
			});
		},
		mouseleave: function() {
			$("#map").animate({
				width: "8%",
				right: "0%",
				top: "0%"
			}, function(){
				$("#map").hide()
			});
		}
	});
})