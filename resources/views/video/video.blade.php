@extends('layout')

@section('title', 'VIDEO')
@section('css')
<style type="text/css">
.center{
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
#doom {
    opacity: 0.7;
    filter: alpha(opacity=70); /* For IE8 and earlier */
}
#doom:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
.pic{
  border-radius:10%;
  border: 2px white;
}
.upstair{
position: relative;
height: 65%;
z-index: 2;
}
.downstair{
position: relative;
height: 35%;
z-index: 2;
}
.centerimg{
  position: relative;
  width: 100%;
  left:auto;
  right:auto;
  z-index: 1;
}
#content{
  background-image: url('/img/video/video1/background1.png');
  background-position: center;
  background-size:cover;
}
#Right{
  position: absolute;
  top:25%;
  right: 5%;
  width: 29%;
  height: 35%;
  float: right;
}

#Left{
  position: absolute;
  float: left;
  top:25%;
  left:5%;
  width: 29%;
  height: 35%;  
}
#Door{
  position: relative;
  float:right;
  width: 23%;
  right:8%;
  top:25%;
}

</style>

@stop

@section('js')
<!--<script src=''></script> -->
<script>
/*
$(document).ready(function(){
    $("#Left").mouseover(function(){
        $("#Left").attr("src","{{ asset('img/video/video1/LeftOpen.png') }}");
    });
    $("#Left").mouseout(function(){
        $("#Left").attr("src","{{ asset('img/video/video1/LeftClose.png') }}");
    });

});
*/
function changeLeft() {
    var image = document.getElementById('Left');
    if (image.src.match("LeftClose")) {
        image.src = "{{ asset('img/video/video1/LeftOpen.png') }}";
    } else {
        image.src = "{{ asset('img/video/video1/LeftClose.png') }}";
    }
}

function changeRight() {
    var image = document.getElementById('ImageB');
    if (image.src.match("Dclmc")) {
        image.src = "https://lh3.googleusercontent.com/-JZqJp9JK4qRJ64XTV2JdTI6GpKyIDR7nmrc0htJ8PE=s400";
    } else {
        image.src = "https://lh3.googleusercontent.com/0ae0qYlyAbkmtNnHNlLyvLGqpy0o4Pn-ry98NEDclmc=s400";
    }
}

function changeImageC() {
    var image = document.getElementById('ImageC');
    if (image.src.match("phuket")) {
        image.src = "data:image/jpeg;base64,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";
    } else {
        image.src = "http://drtaflan.com/wp-content/uploads/2013/01/MG_28423-800x300.jpg";
    }
}

</script>

@stop

@section('content')
<div class="row">
  <div class="upstair" style="height:500px">
    <img id="Left" src="{{ asset('img/video/video1/LeftClose.png') }}"></img>
    <img id="Right" src="{{ asset('img/video/video1/RightClose.png') }}"></img>

  </div>

  <div class="downstair" style="height:400px">
    <img id="Door" src="{{ asset('img/video/video1/DoorClose.png') }}"></img>
  </div>
</div>

@stop
