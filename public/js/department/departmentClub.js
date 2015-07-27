$(document).ready(function(){
    $('.slider').slider({full_width: false});
});

function getFileName(file) {
	var files = document.getElementById("file").files;
	for (var i = 0; i < files.length; i++) {
    	document.getElementById("fileName").innerHTML = '<label id="fileName" for="file">'+ files[i].name +'</label>';
    	console.log(files[i].name);
	}
}

function goBack() {
    window.history.back();
}