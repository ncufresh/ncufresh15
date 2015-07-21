$(document).ready(function(){
	CKEDITOR.replace( 'editor1' );
	
	$("#text_done").click(function(){
		var content = CKEDITOR.instances.editor1.getData();
		$.ajax({
			url:"/document/edit_content", 
			type: "POST",
			data: {
				"selected": document.getElementById('mySelect').value,
				"text": content
			},
			dataType: "json",
	
			success: function(msg) {
				console.log(msg.content);
				$("#text").html("<div>"+content+"</div>");
    	 	},
    	 	error: function(xhr, status, error){
    	 		var err = eval("("+ xhr.respinseText+ ")");
    			alert(err.Message);
    	 	}
		});
	});
});