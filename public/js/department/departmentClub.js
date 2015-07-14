function getFileName(file) {
	document.getElementById("fileName").innerHTML = '<label id="fileName" for="file">'+ file +'</label>';
}
$(document).ready(function() {
	$("#butUp").click(function(){
		var fileName = $("#fileName").val();
		$.ajax({
			type: 'POST',
			url: 'upFile',
			data: {
				"fileName": fileName
			},
			dataType: 'json',
			success: function(msg){
				console.log(msg);
				alert("成功");
				//$("#commentList").before("<div class='ui blue segment'><div class='msgContent'><label id='msg_title'>"+title+"</label><br><label id='msg_name_time'>"+nickname+"</label><br><label id='msg_content'>"+message+"</label><br><label id='reply_title'>Reply</label><br></div></div>");
			},
			error: function(xhr, status, error){
				var err = eval("(" + xhr.responseText + ")");
  				alert(err.Message);
			}
		});
	});
});