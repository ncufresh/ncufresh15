@extends('layout')
@section('title', 'VIDEO2')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/video/media2/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/video/adjust.css') }}">
<style type="text/css">

@media (min-width: 1400px){
    .videoSty {
        min-width: 600px;
        min-height: 510px;
    }
    .video-js .vjs-tech {
        top: -30px;
    }
}
@media (min-width: 1200px) and (max-width: 1400px){
    .videoSty {
        min-width: 500px;
        min-height: 425px;
    }
    .video-js .vjs-tech {
        top: -30px;
    }
}
@media (min-width: 1050px) and (max-width: 1200px){
    .videoSty {
        min-width: 450px;
        min-height: 400px;
    }
    .video-js .vjs-tech {
        top: -30px;
    }
}
@media (min-width: 992px) and (max-width: 1050px){
    .videoSty {
        min-width: 400px;
        min-height: 360px;
    }
    .video-js .vjs-tech {
        top: -30px;
    }
}
@media (min-width: 850px) and (max-width: 1050px) {
    .videoSty {
        min-width: 100%;
        min-height: 400px;
    }
}
@media (max-width: 850px) {
    .videoSty {
        min-width: 100%;
        min-height: 500px;
    }
}
.center{
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
/* /////////////////////Show the controls (hidden at the start by default)/////////////////////// */
.video-js .vjs-control-bar {
  position: absolute;
  height: 63px; 
  background-color: rgba(0, 0, 0, 0);
  display: block;
  border-image:url('/img/video/media/bottom.png') 30 30 30 30 stretch;
  border-bottom-width: 8px;
}
    /* Make the CDN fonts accessible from the CSS */
}
.unused{
    color:black;
}
/*
  @font-face {
    font-family: 'VideoJS';
    src: url('http://vjs.zencdn.net/f/1/vjs.eot');
    src: url('http://vjs.zencdn.net/f/1/vjs.eot?#iefix') format('embedded-opentype'), 
      url('http://vjs.zencdn.net/f/1/vjs.woff') format('woff'),     
      url('http://vjs.zencdn.net/f/1/vjs.ttf') format('truetype');
  }

  /* Make the demo a little prettier */


#scroll{
  position: relative;
  height:600px;
  width:100%;
  overflow: auto;
}
.deleteIco {
    color: #4db6ac;
}
.delete {
    position: absolute;
    display: inline-block;
    padding: 1% 4%;
    margin: 0em;
    text-align: center;
    line-height: normal;
    right: 0%;
}
.card-content{
    position: relative;
}
.material-icons{
    font-size: 20px;
}
#send{
    position: absolute;    
    display: inline-block;
    padding: 1% 5%;
    line-height: normal;
    right:4%;
}
.card-action{
    position: relative;
}
#SendComment{
   position: absolute;
   width: 68%;
   height: 25%;
   right:25%;

}
video{
    position: relative;
}

.WrapTop{
  position: relative;
  border-image:url('/img/video/media/top.png') 30 30 30 30 stretch;
  border-bottom-width: 0px;
  border-top-width: 10px;
  border-left-width: 0px;
  border-right-width: 0px;  
}
.WrapRight{
  position: relative;
  border-image:url('/img/video/media/right.png') 30 30 30 30 stretch;
  border-bottom-width: 0px;
  border-top-width: 0px;
  border-left-width: 0px;
  border-right-width: 10px;  
  right: 0px;
}

.WrapLeft{
  position: relative;
  border-image:url('/img/video/media/left.png') 30 30 30 30 stretch;
  border-bottom-width: 0px;
  border-top-width: 0px;
  border-left-width: 10px;
  border-right-width: 0px;  
}
</style>

@stop

@section('js')
<!--<script src=''></script> -->
<script src="http://vjs.zencdn.net/4.0.4/video.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/video/add.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/video/delete.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/video/load.js') }}"></script>
<script>
$(document).ready(function(){
    $("#Stop").on("submit",function(e) {
        e.preventDefault();
    });
    $("#my_video_1").attr('width','auto');

    $("#scroll").mCustomScrollbar({ 
        scrollbarPosition:outside, 
        theme:"3d-thick",
    });

    
});

</script>

@stop

@section('content')

<!--最上面那條row(red accent-2)-->    
<div class="row">
<!--有影片的section( teal lighten-2)-->    
    <div class="col s12 m12 l8">
       <div class="WrapTop">
            <div class="WrapRight">
                <div class="WrapLeft">
                    <video id="my_video_1" class="video-js vjs-default-skin videoSty" 
                      controls preload="none" data-setup='{}'
                      poster='http://video-js.zencoder.com/oceans-clip.jpg'>
                        <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
                        <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
                    </video>
                </div>
            </div>    
        </div>
       <p>影片簡介：</p>
       <p>一一一一</p>
    </div>
<!--留言的Ssection( orange accent-2)-->    
    <div class="col s12 m12 l4" >
        <div class="card blue-grey darken-1 hoverable">
            <div class="card-content white-text">
                <span class="card-title">留言板</span>
                <div id ="scroll"class="mCustomScrollbar">
                  


    @foreach(array_chunk( $tryconnect->getCollection()->all() , 8 ) as $row )
        @foreach ($row as $try)
                    <div id="{{$try->id}}">
                        <div class="row">
                            <div class="col s2 m2 l2">{{$try->name}}</div>
                            <div class="col s6 m6 l6" style="word-break: break-all;">留言內容 {{$try->comment}}</div>
                            <div class="col s4 m4 l4" style="height: auto;">
                              <button type="submit" class="waves-effect waves-teal btn , delete" value="{{ $try->id }}" >      
                                    <i class="material-icons">delete</i>
                              </botton>                      
                            </div>
                        </div>
                    <br>
               </div>
        @endforeach
    @endforeach
                    <div class="center-align">
                    @include('pagination.comment', ['paginator' => $tryconnect])
                    </div>
                    <div class="row" style="margin-bottom: 0px;margin-top: 0px;">  </div>
                    <div class="load "></div>
                </div><!--end scroll zone-->
            </div><!--end card content-->
            <div class="card-action" style="height:150px;">
                <div>
                    <p style="color:white;">Message:</p>            
                </div> <!--avoid messenge & input overlap-->
                <div class="row"> 
                    <form id ="Stop" >
                        <div class="col s9 m9 l9">
                            {!! csrf_field() !!}
                            <input type="text" id="SendComment" name="comment" style="background-color: white;">
                        </div>
                        <div class="col s3 m3 l3">
                            <button type="submit" id="send" class="waves-effect waves-light btn" >
                                <i class="material-icons">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div><!--end card-action-->    
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->
@stop