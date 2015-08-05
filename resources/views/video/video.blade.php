@extends('layout')

@section('title', 'VIDEO')
@section('css')

<style type="text/css">


@media (min-width: 1200px){
   .upstair{
        min-height: 480px;
    }
   .downstair{
        min-height:430px;
    }
}
@media (min-width: 1068px) and (max-width: 1200px){
   .upstair{
        min-height: 430px;
    }
   .downstair{
        min-height:380px;
    }
}
@media (min-width: 1023px) and (max-width: 1068px){
   .upstair{
        min-height: 380px;
    }
   .downstair{
        min-height:380px;
    }
}
@media (min-width: 993px) and (max-width: 1023px){
   .upstair{
        min-height: 360px;
    }
   .downstair{
        min-height:350px;
    }
}
@media (min-width: 943px) and (max-width: 993px){
   .upstair{
        min-height: 540px;
    }
   .downstair{
        min-height:440px;
    }
}
@media (min-width: 900px) and (max-width: 943px){
   .upstair{
        min-height: 500px;
    }
   .downstair{
        min-height:430px;
    }
}
@media (min-width: 870px) and (max-width: 900px){
   .upstair{
        min-height: 500px;
    }
   .downstair{
        min-height:400px;
    }
}
@media (min-width: 850px) and (max-width: 870px){
   .upstair{
        min-height: 480px;
    }
   .downstair{
        min-height:400px;
    }
}
@media (min-width: 800px) and (max-width: 850px){
   .upstair{
        min-height: 440px;
    }
   .downstair{
        min-height:380px;
    }
}
@media (min-width: 750px) and (max-width: 800px){
   .upstair{
        min-height: 400px;
    }
   .downstair{
        min-height:360px;
    }
}
@media (min-width: 720px) and (max-width: 750px){
   .upstair{
        min-height: 390px;
    }
   .downstair{
        min-height:350px;
    }
}
@media (min-width: 680px) and (max-width: 720px){
   .upstair{
        min-height: 370px;
    }
   .downstair{
        min-height:330px;
    }
}
@media (min-width: 640px) and (max-width: 680px){
   .upstair{
        min-height: 340px;
    }
   .downstair{
        min-height:310px;
    }
}
@media (min-width: 600px) and (max-width: 640px){
   .upstair{
        min-height: 320px;
    }
   .downstair{
        min-height:290px;
    }
}
@media (min-width: 560px) and (max-width: 600px){
   .upstair{
        min-height: 300px;
    }
   .downstair{
        min-height:270px;
    }
}
@media (min-width: 530px) and (max-width: 560px){
   .upstair{
        min-height: 280px;
    }
   .downstair{
        min-height:250px;
    }
}
@media (min-width: 490px) and (max-width: 530px){
   .upstair{
        min-height: 260px;
    }
   .downstair{
        min-height:230px;
    }
}
@media (min-width: 450px) and (max-width: 490px){
   .upstair{
        min-height: 240px;
    }
   .downstair{
        min-height:210px;
    }
}
@media (min-width: 420px) and (max-width: 450px){
   .upstair{
        min-height: 220px;
    }
   .downstair{
        min-height:190px;
    }
}
@media (min-width: 400px) and (max-width: 420px){
   .upstair{
        min-height: 200px;
    }
   .downstair{
        min-height:185px;
    }
}
@media (min-width: 380px) and (max-width: 400px){
   .upstair{
        min-height: 180px;
    }
   .downstair{
        min-height:185px;
    }
}
@media (min-width: 366px) and (max-width: 380px){
   .upstair{
        min-height: 175px;
    }
   .downstair{
        min-height:175px;
    }
}
@media (min-width: 350px) and (max-width: 366px){
   .upstair{
        min-height: 160px;
    }
   .downstair{
        min-height:170px;
    }
}
@media(max-width: 350px){
   .upstair{
        min-height: 150px;
    }
   .downstair{
        min-height:165px;
    }
}

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
z-index: 2;
}
.downstair{
position: relative;
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
  position: relative;
  background-image: url('/img/video/video1/background1.jpg');
  background-position: center absolute;
  background-size:100%;
  background-repeat: no-repeat;
}
#Right{
  position: absolute;
  top:10%;
  right: 10%;
  width: 29%;
  float: right;
}

#Left{
  position: absolute;
  float: left;
  top:10%;
  left:10%;
  width: 29%;
}
#Door{
  position:absolute;
  float:right;
  width: 23%;
  right:8%;
  bottom:10px;
}
#Light{
  position:absolute;
  float: right;
  width: 8%;
  right:36%;
  bottom:59%;
}
</style>

@stop

@section('js')
<!--<script src=''></script> -->
<script>

$(document).ready(function(){
/*有待開放，敬請期待
    $("#Door").mouseover(function(){
        $("#Door").attr("src","{{ asset('img/video/video1/DoorOpen.png') }}");
        $("#Light").attr("src","{{ asset('img/video/video1/LightOpen.png') }}");
    });
    $("#Door").mouseout(function(){
        $("#Door").attr("src","{{ asset('img/video/video1/DoorClose.png') }}");
        $("#Light").attr("src","{{ asset('img/video/video1/LightClose.png') }}");
    });
*/
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
  <div class="upstair">
    <a href="/video/0">
      <img id="Left" src="{{ asset('img/video/video1/LeftClose.png') }}"/>
    </a>
    <a href="/video/1">
      <img id="Right" src="{{ asset('img/video/video1/RightClose.png') }}"></img>
    </a>
  </div>
  <div class="downstair">
    <a>
      <img id="Light" src="{{ asset('img/video/video1/LightClose.png') }}">
    </a>
    <a alt="還未開放，敬請期待">
      <img id="Door" src="{{ asset('img/video/video1/DoorClose.png') }}"></img>
    </a>
  </div>
</div>

@stop
