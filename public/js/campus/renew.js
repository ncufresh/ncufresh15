$(document).ready(function() {

	$("a.collection-item").click(function() {
		var title = $(this).text();
		$("#campus_title").text(title);

		var id = $(this).attr("id");
		$("#view_id").val(id);

		$("#introduction").val("");
		$("#label_intro").attr("class", "");
		$("#error").empty();

		switch (id) {
			case '0':
				$("#campus").attr("src", "./img/campus/tree.jpg");
				break;
			case '1':
				$("#campus").attr("src", "./img/campus/library.jpg");
				break;
			default:
				$("#campus").attr("src", "./img/campus/tree.jpg");
		}

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
})