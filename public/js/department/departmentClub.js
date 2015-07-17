$(document).ready(function(){
    $('.modal-trigger').leanModal();
    $('#editBut').click(function(){
    	$('.mainContent').removeClass('isvisible').addClass('ishidden');
    	$('.mainEdit').removeClass('ishidden').addClass('isvisible');
    });
    $('#finishBut').click(function(){
    	$('.mainContent').removeClass('ishidden').addClass('isvisible');
    	$('.mainEdit').removeClass('isvisible').addClass('ishidden');
    });
    $('#completeBut').click(function(){
    	var id = $("input[value='editId']").val();
    	var name = $("input[value='editName']").val();
    	var content = $("input[value='editContent']").val();
    	$.ajax({
    		type: 'POST',
    		url: '/department/update',
    		data: {
    			"id": id,
    			"name": name,
    			"content": content
    		},
    		dataType: 'json',
    		success: function(msg) {
    			console.log(msg);
    			alert("成功");
    		},
    		error: function(xhr, status, error){
    			var err = eval("("+ xhr.respinseText+ ")");
    			alert(err.Message);
    		}
    	});
    });
    $('#showModal').click(function(){
    	var id = $("input[name='id']").val();
    	console.log(id);
    	$.ajax({
    		type: 'POST',
    		url: '/department/content',
    		data: {
    			"id": id
    		},
    		dataType: 'json',
    		success: function(msg) {
    			console.log(msg);
    			//alert("成功");
    			$(".fullContent").html(''+
    			'<div class="mainContent isvisible">'+
                    '<h4>'+msg.name+'</h4>'+
                    '<p>'+msg.content+'</p>'+
                '</div>'+
                '<div class="mainEdit ishidden">'+
                    '<input name="editId" type="hidden" value="'+msg.name+'">'+
                    '<input name="editNname" type="text" value="'+msg.name+'">'+
                    '<textarea name="editContent" class="materialize-textarea" length="600">'+msg.content+'</textarea>'+
                '</div>');
    		},
    		error: function(xhr, status, error){
    			var err = eval("("+ xhr.respinseText+ ")");
    			alert(err.Message);
    		}
    	});
    });
});

function getFileName(file) {
	var files = document.getElementById("file").files;
	for (var i = 0; i < files.length; i++) {
    	document.getElementById("fileName").innerHTML = '<label id="fileName" for="file">'+ files[i].name +'</label>';
    	console.log(files[i].name);
	}
}
function clickCate(num) {
	switch(num) {
		case 1:
			document.getElementById("mainTrue").click();
			break;
		case 2:
			document.getElementById("departmentTrue").click();
			break;
		case 3:
			document.getElementById("clubTrue").click();
			break;
	}
}