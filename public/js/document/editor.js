$(document).ready(function(){
	CKEDITOR.replace( 'editor1' );
});

$("#mySelect").change(function(){
	var id = document.getElementById('mySelect').value;
	window.location.href = '/document/edit_content/'+id;

});
$("#text_done").click(function(){
	var content = CKEDITOR.instances.editor1.getData();
	$.ajax({
		url:"/document/store_content", 
		type: "POST",
		data: {
			"selected": document.getElementById('mySelect').value,
			"title": $("#first_name2").val(),
			"text": content
		},
		dataType: "json",

		success: function(msg) {
			console.log(msg.title);
			$("#title").html("<h5>"+msg.title+"</h5>");
			$("#text").html("<div>"+content+"</div>");
   	 	},
   	 	error: function(xhr, status, error){
   	 		var err = eval("("+ xhr.respinseText+ ")");
   			alert(err.Message);
   	 	}
	});
});