@extends('layout')
@section('title', 'VIDEO2')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/video/media2/css/style.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
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
/* /////////////////////Show the controls (hidden at the start by default)/////////////////////// */
.video-js .vjs-control-bar { 
  height: 50px; 
  background-color: #00C5FF;
  display: block;
}  
    /* Make the CDN fonts accessible from the CSS */
}
.unused{
    color:#ffffff;
}

  @font-face {
    font-family: 'VideoJS';
    src: url('http://vjs.zencdn.net/f/1/vjs.eot');
    src: url('http://vjs.zencdn.net/f/1/vjs.eot?#iefix') format('embedded-opentype'), 
      url('http://vjs.zencdn.net/f/1/vjs.woff') format('woff'),     
      url('http://vjs.zencdn.net/f/1/vjs.ttf') format('truetype');
  }

  /* Make the demo a little prettier */
  .video-js { margin: 20px auto; }

</style>

@stop

@section('js')
<!--<script src=''></script> -->
<script src="http://vjs.zencdn.net/4.0.4/video.js"></script>
<script>

$(document).ready(function(){

 $("#send").on("click", function(e) {
    e.preventDefault();
    $.ajax({  //ajax
      url:"/video2/add", //including index.php!!!
      type: "POST",
      data: {comment: $("#SendComment").val() },   //inside {} is jquery.  val:   //name: is the thing that will be saved in POST

       success: function(msg) {
        console.log(msg);   //js, save data
        var id = msg.id;
        var str = '<div id="'+msg.id+'" class="card-action , unused"> \
                      <div class="col s2">'+msg.name+'</div>\
                      <div class="col s7">留言內容 '+msg.comment+'</div>\
                      <div class="col s2">\
                        <form action="comment(delete).php" method="post">\
                          <button type="submit" id="delete" class="btn " style="width:10px;height:25px;margin-left:-10px">\
                            <i class="material-icons" style="margin-left:-8px;line-height: normal;">delete</i>\
                          </botton>\
                              <input type="hidden" name="delete" value="yes" />\
                              <input type="hidden" name="username" value="'+msg.name+'"/>\
                              <input type="hidden" name="comment" value="'+msg.comment+'"/>\
                          <input type="hidden" name="id" value="'+msg.id+'">\
                        </form>\
                      </div>\
                    </div>\
                  <div class="row" style="margin-bottom: 15px;margin-top: 0px;"></div>';

        $("#place").append( $(str).hide().fadeIn(1000) );  //append: add in the back
      }
    });
  });
 $(document).on("click", ".delete" , function(e) {
    e.preventDefault();
    $.ajax({  //ajax
    url:"/video2", //including index.php!!!
    type: "POST",
    data: {id: $(this).val() },   //inside {} is jquery.  val:   //name: is the thing that will be saved in POST

    success: function(msg) {
          console.log(msg);   //js, save data
         $("#"+msg).hide(1000);  //append: add in the back
          }
      });
  });
  $(document).ready(function(){

      $(".unused").hide();
      $(".unused:first").show();

    $(window).scroll(function() {   
      if($(window).scrollTop() + $(window).height() > $(document).height() - 50) {
      
           $(".unused:first").removeClass("unused");
           $(".unused:first").fadeIn(3000);

       }  
    });
  });





});
</script>

@stop

@section('content')

<!--最上面那條row(red accent-2)-->    
<div class="row">
<!--有影片的section( teal lighten-2)-->    
      <div class="col s8" style=";">


  <video id="my_video_1" class="video-js vjs-default-skin" 
      controls preload="none" width="550px" height="400px" data-setup='{}'
      poster='http://video-js.zencoder.com/oceans-clip.jpg'>
    <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
    <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
  </video>
          <p>影片簡介：</p>
          <p>一一一一</p>
      </div>
<!--留言的Ssection( orange accent-2)-->    
      <div class="col s4 " style=";" >
         <div class="card blue-grey darken-1 hoverable" style=";">
            <div class="card-content white-text" style="height:85%;">
              <span class="card-title">留言板</span>

              <div id="place"></div>

            @foreach($tryconnect as $try)
      <div id="{{$try->id}}"> 
         <div class="col s2">{{$try->name}}</div>
            <div class="col s7">留言內容 {{$try->comment}}</div>
              <div class="col s2">
                <form action="comment(delete).php" method="post">
                  <button type="submit" class="waves-effect waves-teal btn , delete" value="{{ $try->id }}" style="width:8px;height:25px;margin-left:-10px">
                    <i class="material-icons" style="margin-left:-8px;line-height: normal;">delete</i>
                  </botton>
                </form>
              </div>
            </div>
           <div class="row" style="margin-bottom: 15px;margin-top: 0px;">  </div>
            @endforeach



            </div>
            <div class="card-action">
            <div class="col s9">
            <p style="color:white">Message:</p>
            <form method="post" >
            {!! csrf_field() !!}
            <input type="text" id="SendComment" name="comment" style="background-color: white; width:100%;height:25px;margin-left:-5px">
            </div>
            <div class="col s3">
            <p>  </p>
            <br>
            <button type="submit" id="send" style="width:20px;height:25px;margin-top:12px;margin-left:-10px;" class="waves-effect waves-light btn" >
              <i class="material-icons" style="margin-left:-5px;line-height: normal;">send</i>
            </button>
            </div>
            </div>
            </form>
          </div>
         </div>
    </div>

</div>
    </body>
  </html>






content yolo!!!!


@stop
