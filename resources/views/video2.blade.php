@extends('layout')
@section('title', 'VIDEO2')
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
</style>
@stop

@section('js')
<!--<script src=''></script> -->
<script>
$(document).ready(function(){
  $("#send").click(function(){
    event.preventDefault();//preven default event from happens

    $.post("some.php",
    {
      name: $("#n").val(),
      comment: $("#c").val()
    },
    function(result){
      $("#0").prepend(result);
    });
  }); 
});
</script>

@stop

@section('content')

<!--最上面那條row(red accent-2)-->    
<div class="row">
<div class="col" style="width:15%;">
<h5 style="color:grey">首頁</h5>
</div>
<div class="col" style="width:20%;">
<h5 style="color:grey">影音專區</h5>
</div>
<div class="col" style="width:15%;">
<h5 style="color:grey">影片2</h5>
</div>
<div class="row"></div>
<!--有影片的section( teal lighten-2)-->    
      <div class="col s8" style=";">
          <div class="video-container">
         <iframe width="854" height="510" src="https://www.youtube.com/embed/83I_5lq5MwI" frameborder="0" allowfullscreen></iframe>
          </div>
          <p>影片簡介：</p>
          <p>一一一一</p>
          <p>一一一一</p>
      </div>
<!--留言的Ssection( orange accent-2)-->    
      <div class="col s4 " style=";" >
         <div class="card blue-grey darken-1 hoverable" style=";">
            <div class="card-content white-text" style="height:85%;">
              <span class="card-title">留言板</span>


            </div>
            <div class="card-action">
            <div class="col s9">
            <p style="color:white">Message:</p>
            <input type="text" name="message" style="background-color: white; width:100%;height:25px;margin-left:-5px">
            </div>
            <div class="col s3">
            <p>  </p>
            <br>
            <button type="submit" id="send" style="width:20px;height:25px;margin-top:12px;margin-left:-10px;" class="waves-effect waves-light btn" >
              <i class="material-icons" style="margin-left:-5px;line-height: normal;">send</i>
            </button>
            </div>
            </div>
          </div>
         </div>
    </div>






    </body>
  </html>






content yolo!!!!


@stop
