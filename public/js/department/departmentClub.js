$(document).ready(function(){
    var options = {
        $AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
    };
    var jssor_slider1 = new $JssorSlider$("slider1_container", options);
});

function getFileName(file) {
	var files = document.getElementById("file").files;
	for (var i = 0; i < files.length; i++) {
    	document.getElementById("fileName").innerHTML = '<label id="fileName" for="file">'+ files[i].name +'</label>';
    	console.log(files[i].name);
	}
}