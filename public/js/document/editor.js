$(function() {
	CKEDITOR.replace( 'editor1' );

});

function save() {
	var content = CKEDITOR.instances.editor1.getData();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	// ajax
	$.ajax({
		url:"/document/add_content", 
		type: "POST",
		data: {text: content},
		success: function(msg) {
			console.log(msg);
			alert("我成功了YA~~");
     	},
     	error: function(xhr, status, error){
     		var err = eval("("+ xhr.respinseText+ ")");
    		alert(err.Message);
     	}
	});
}