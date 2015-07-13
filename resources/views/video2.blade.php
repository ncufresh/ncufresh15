@extends('layout')

@section('title', 'YOLO')
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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

<!--最上面那條row-->    
<div class="row red accent-2">
          <p>我好快樂</p>      
<!--有影片的section-->    
      <div class="col s9 teal lighten-2" style=";">
          <div class="video-container">
        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0"  frameborder="0" allowfullscreen></iframe>
          </div>
          <p>影片簡介：</p>
          <p>一一一一</p>
          <p>一一一一</p>
      </div>
<!--留言的Ssection-->    
      <div class="col s3  orange accent-2" style=";" >
         <div class="card blue-grey darken-1 hoverable" style=";">
            <div class="card-content white-text" style="height:85%;">
              <span class="card-title">留言板</span>





            



            </div>
            <div class="card-action">
            <div class="col s9">
            <p style="color:white">Message:</p>
            <input type="text" name="message" style="background-color: white; width:100%;height:25px;vertical-align:left">
            </div>
            <div class="col s1">
            <p>  </p>
            <br>
            <button type="submit" id="send" class="btn btn-primary" style="width:15%;height:25px;">
              <i class="material-icons" style="margin-left:-5px;line-height: normal;">send</i>
            </button>
            </div>
            </div>
          </div>
         </div>
    </div>






content yolo!!!!


@stop
