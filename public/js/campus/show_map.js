$(document).ready(function() {

	$("#map").click(function() {
		if($("#map").css("width")=="55px")
		{
			$("#map").animate({
				width: "80%",
				right: "1%",
				top: "1%"
			});
		}
		else if($("#map").css("width")=="545px")
		{
			$("#map").animate({
				width: "8%",
				right: "0%",
				top: "0%"
			});
		}
	});
})