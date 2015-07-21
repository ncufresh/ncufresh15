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
})