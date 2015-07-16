$(document).ready(function() {

	$("a.collection-item").click(function() {
		var title = $(this).text();
		$("#campus_title").text(title);

		var id = $(this).attr("id");
		$("#view_id").val(id);

		$("#introduction").val("");
		$("#label_intro").attr("class", "");
		$("#error").empty();

		$.ajax({

			type: "GET",
			url: "campus/" + id,
			dataType: "json",

			success: function(msg) {
				console.log(msg);
				if(msg.introduction == null)
				{
					$("#campus_content").empty();
				}
				else
				{
					$("#campus_content").text(msg.introduction);
				}
			},

			error: function(msg) {
				alert("fail to post");
			}
		});
	})

	$("#writeIntro").submit(function(event) {
		
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