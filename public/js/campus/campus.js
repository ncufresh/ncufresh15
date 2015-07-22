$(document).ready(function() {

	$("#small_map").on({
		mouseenter: function() {
			$("#map").show().animate({
				width: "80%",
				right: "1%",
				top: "3%"
			});
		},
		mouseleave: function() {
			$("#map").animate({
				width: "8%",
				right: "0%",
				top: "2%"
			}, function(){
				$("#map").hide()
			});
		}
	});
})