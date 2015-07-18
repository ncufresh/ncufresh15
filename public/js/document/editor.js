$(document).ready(function(){
	CKEDITOR.replace( 'editor1' );
	$("#text_done").click(function(){
		var content = CKEDITOR.instances.editor1.getData();
		$.ajax({
			url:"/document/add_content", 
			type: "POST",
			data: {"text": content},
			dataType: "json",
	
			success: function(msg) {
				console.log(content);
				$("#text").html("<div>"+content+"</div>");
    	 	},
    	 	error: function(xhr, status, error){
    	 		var err = eval("("+ xhr.respinseText+ ")");
    			alert(err.Message);
    	 	}
		});
	});
});
