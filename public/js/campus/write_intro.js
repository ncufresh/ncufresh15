$(document).ready(function() {

	$("#test").submit(function(event) {
		
		event.preventDefault();

		$.ajaxSetup({
			headers: { 'X-CSRF-Token': $('meta[name=_token]').attr('content')}
		});

		$.ajax({

			type: "POST",
			url: "campus/backstage_intro",
			data: {"introduction": $('#introduction').val(),
				"view_id": $('#view_id').val()},
			dataType: "json",

			success: function(msg) {
				console.log(msg);
				$("#error").text(msg.error);
				
				if(msg.error=="")
				{
					$("#campus_content").text(msg.introduction);
				}
			},

			error: function(msg) {
				alert("fail to post");
			}
		});
	});

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