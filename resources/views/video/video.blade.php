@extends('layout')

@section('title', 'VIDEO')
@section('css')
<style type="text/css">
.center{
  margin-left: auto;
  margin-right: auto;
  width: 50%;
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
  cursor: pointer;
  top:10%;
  right: 10%;
  width: 29%;
  float: right;
}

#Left{
  position: absolute;
  cursor: pointer;
  float: left;
  top:10%;
  left:10%;
  width: 29%;
}
#Door{
  position:absolute;
  cursor: pointer;
  float:right;
  width: 23%;
  right:8%;
  top:25%;
}
#Door:hover{
  content: url('/img/video/video1/DoorOpen.png');
}
</style>

@stop

@section('js')
<!--<script src=''></script> -->
<script>

$(document).ready(function(){
    $("#Left").mouseover(function(){
        $("#Left").attr("src","{{ asset('img/video/video1/LeftOpen.png') }}");
    });
    $("#Left").mouseout(function(){
        $("#Left").attr("src","{{ asset('img/video/video1/LeftClose.png') }}");
    });

    $("#Right").mouseover(function(){
        $("#Right").attr("src","{{ asset('img/video/video1/RightOpen.png') }}");
    });
    $("#Right").mouseout(function(){
        $("#Right").attr("src","{{ asset('img/video/video1/RightClose.png') }}");
    });
});
</script>

@stop

@section('content')
<div class="row">
  <div class="upstair" style="height:500px">
    <a href="/video2">
      <img id="Left" src="{{ asset('img/video/video1/LeftClose.png') }}"></img>
    </a>
    <a href="/video2">
      <img id="Right" src="{{ asset('img/video/video1/RightClose.png') }}"></img>
    </a>
  </div>

  <div class="downstair" style="height:400px">
    <a href="/video2">
      <img id="Door" src="{{ asset('img/video/video1/DoorClose.png') }}"></img>
    </a>
  </div>
</div>

@stop
