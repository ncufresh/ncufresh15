$(document).ready(function(){
    var _SlideshowTransitions = [
        //Fade
        { $Duration: 1200, $Opacity: 2 }
        ];
        var options = {
            $SlideDuration: 500,
            $DragOrientation: 3,
            $AutoPlay: true,
            $AutoPlayInterval: 1500,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: _SlideshowTransitions,
                $TransitionsOrder: 1,
                $ShowLink: true
            }
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