@extends('layout')
@section('title', 'VIDEO2')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/video/media2/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
<style type="text/css">
.center{
  margin-left: auto;
  margin-right: auto;
  width: 50%;
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
.video-js { margin: 20px auto; }

#scroll{
  position: relative;
  height:600px;
  width:100%;
  overflow: auto;
}
   /* width="470px" height="400px" */
@media (min-width: 1400px){
    .videoSty {
        min-width: 600px;
        min-height: 510px;
    }
    .video-js .vjs-tech {
        top: -30px;
    }
}
@media (min-width: 1050px) and (max-width: 1400px){
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
        min-width: 470px;
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
@media (min-width: 850px) and (max-width: 992px) {
    .videoSty {
        min-width: 100%;
        min-height: 500px;
    }
}
@media (max-width: 850px) {
    .videoSty {
        min-width: 100%;
        min-height: 400px;
    }
}
.deleteIco {
    color: #4db6ac;
}
.delete {
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
});

</script>

@stop

@section('content')

<!--最上面那條row(red accent-2)-->    
<div class="row">
<!--有影片的section( teal lighten-2)-->    
    <div class="col s12 m12 l8">

        <video id="my_video_1" class="video-js vjs-default-skin videoSty" 
          controls preload="none" data-setup='{}'
          poster='http://video-js.zencoder.com/oceans-clip.jpg'>
            <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
            <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
        </video>
        <p>影片簡介：</p>
        <p>一一一一</p>
    </div>
    <!--留言的Ssection( orange accent-2)-->    
    <div class="col s12 m12 l4" >
        <div class="card blue-grey darken-1 hoverable">
            <div class="card-content white-text">
                <span class="card-title">留言板</span>
                <div id ="scroll"class="mCustomScrollbar" data-mcs-theme="dark">
                  


    @foreach(array_chunk( $tryconnect->getCollection()->all() , 8 ) as $row )
        @foreach ($row as $try)
                    <div id="{{$try->id}}">
                        <div class="row">
                            <div class="col s2 m2 l2">{{$try->name}}</div>
                            <div class="col s6 m6 l6">留言內容 {{$try->comment}}</div>
                            <div class="col s4 m4 l4" style="height: auto;">
                                <button class="delete" value="{{ $try->id }}"></button> 
                                <i class="material-icons deleteIco">delete</i>
                                
                            </div>
                        </div>
                    </div>
                    <br>
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
                            <input type="text" id="SendComment" name="comment" style="background-color: white; height:20px;">
                        </div>
                        <div class="col s3 m3 l3">
                            <button type="submit" id="send" class="waves-effect waves-light btn" style="height:20px; width: 50px;">
                                <i class="material-icons" style="margin-left:-5px;line-height: normal;">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div><!--end card-action-->    
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->
@stop