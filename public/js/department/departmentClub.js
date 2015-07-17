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