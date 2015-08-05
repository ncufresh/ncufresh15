@extends('layout')
@section('title', '影音專區')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/video/media2/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/video/adjust.css') }}">
<style type="text/css">

#mCSB_1_container {
    padding-top: 30px;
}
@media (min-width: 1400px){
    .videoSty {
        min-width: 100%;/*700px*/
        min-height: 510px;
    }
    .video-js .vjs-tech {
        top: 1px;
    }
}
@media (min-width: 1227px) and (max-width: 1400px){
    .videoSty {
        min-width: 100%;/*500px*/
        min-height: 425px;
    }
    .video-js .vjs-tech {
        top: 1px;
    }
}
@media (min-width: 1205px) and (max-width: 1227px){
    .videoSty {
        min-width: 100%;/*490px*/
        min-height: 425px;
    }
    .video-js .vjs-tech {
        top: 1px;
    }
}
@media (min-width: 1172px) and (max-width: 1205px){
    .videoSty {
        min-width: 100%;/*450px*/
        min-height: 410px;
    }
    .video-js .vjs-tech {
        top: 1px;
    }
}
@media (min-width: 1193px) and (max-width: 1227px){
    .videoSty {
        min-width: 100%;/*450px*/
        min-height: 400px;
    }
    .video-js .vjs-tech {
        top: 1px;
    }
}

@media (min-width: 1050px) and (max-width: 1193px){
    .videoSty {
        min-width: 100%;/*500px*/
        min-height: 380px;
    }
    .video-js .vjs-tech {
        top: 1px;
    }
}

@media (min-width: 1033px) and (max-width: 1050px){
    .videoSty {
        min-width: 100%;/*415px*/
        min-height: 390px;
    }
    .video-js .vjs-tech {
        top: 1px;
    }
}

@media (min-width: 992px) and (max-width: 1050px){
    .videoSty {
        min-width: 100%;/*400px*/
        min-height: 360px;
    }
    .video-js .vjs-tech {
        top: 1px;
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
  height: 47px; 
  background-color: rgba(0, 0, 0, 0);
  display: block;
  border-image:url('/img/video/media/bottom.png') 30 30 30 30 stretch;
  border-bottom-width: 8px;
}
    /* Make the CDN fonts accessible from the CSS */
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
  width:100%;
  overflow: auto;
}
/*
.delete {
    position: absolute;
    display: inline-block;
    padding: 1% 4%;
    margin: 0em;
    text-align: center;
    line-height: normal;
    right: 0%;
}
*/
.FakeCard{
  right:0px;
}
.card-content{
    position: relative;
    height: 600px;
}
.card-action{
    position: relative;
    height: 105px;
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
#IntroTop{
  position: relative;
  border-image:url('/img/video/media/IntroTop.png') 30 30 30 30 stretch;
  border-bottom-width: 0px;
  border-top-width: 10px;
  border-left-width: 0px;
  border-right-width: 0px;  
  right: 0px;
}
#IntroLeft{
  position: absolute;
  float:right;
}
#IntroRight{
  position: relative;
  border-image:url('/img/video/media/IntroRight.png') 30 30 30 30 stretch;
  border-bottom-width: 0px;
  border-top-width: 0px;
  border-left-width: 0px;
  border-right-width: 10px;  
  right: 0px;
  height:380px;
}
#IntroBottom{
  position:absolute;
  border-image:url('/img/video/media/IntroBottom.png') 30 30 30 30 stretch;
  border-bottom-width: 10px;
  border-top-width: 0px;
  border-left-width: 0px;
  border-right-width: 0px; 
  height:380px;
  width: 70%;
  right:0px;
}
#TextBox{
  position: absolute;
  overflow: auto;
  width: 85%;
  right:0px;
  height: 320px;
}
/*card*/
#CardTop{ 
  position: relative;
  top:8%;
  border-image:url('/img/video/media/CardTop.png')30 30 30 30 stretch;
  border-bottom-width: 0px;
  border-top-width: 10px;
  border-left-width: 0px;
  border-right-width: 0px;  
  float:top;
}
#CardLeft{
  position: relative;
  border-image:url('/img/video/media/CardLeft.png')30 30 30 30 stretch;
  border-bottom-width: 0px;
  border-top-width: 0px;
  border-left-width: 10px;
  border-right-width: 0px;  
  }
#CardRight{
  position: relative;
  border-image:url('/img/video/media/CardRight.png')30 30 30 30 stretch;
  border-bottom-width: 0px;
  border-top-width: 0px;
  border-left-width: 0px;
  border-right-width: 10px;  
}
#CardBottom{
  position: relative;
  border-image:url('/img/video/media/CardBottom.png')30 30 30 30 stretch;
  border-bottom-width: 10px;
  border-top-width: 0px;
  border-left-width: 0px;
  border-right-width: 0px;  
}
#CardTittle{
  float: left;
}
#CardImg{
  position: absolute;
  right:0px;
  bottom:0px;
}
</style>

@stop

@section('js')
<!--<script src=''></script> -->
<script src="http://vjs.zencdn.net/4.0.4/video.js"></script>
<script src="{{ asset('js/video/youtube.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/video/delete.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/video/load.js') }}"></script>

@if (Auth::check() && Auth::user()->can('management') )
<script type="text/javascript" src="{{ asset('js/video/addAuth.js') }}"></script>
@elseif(Auth::check())
<script type="text/javascript" src="{{ asset('js/video/addNormal.js') }}"></script>
@else
<script type="text/javascript" src="{{ asset('js/video/addNormal.js') }}"></script>
@endif
<script>
$(document).ready(function(){
    $("#Stop").on("submit",function(e) {
        e.preventDefault();
    });
/*
    $(".vjs-fullscreen-control.vjs-control").click(function(){
      $(".vjs-default-skin.vjs-play-control").css("margin-left","0px");
      $(".vjs-default-skin.vjs-playing .vjs-play-control").css("margin-left","0px");
    });
*/
});
</script>

@stop

@section('content')
<!--最上面那條row(red accent-2)-->    
<div class="row">
<!--有影片的section( teal lighten-2)-->    
    <div class="col s12 m12 l8 ">
       <div class="WrapTop">
            <div class="WrapRight">
                <div class="WrapLeft">
                  <video id="my_video_1" src="" class="video-js vjs-default-skin videoSty" poster="{{ asset('img/video/media/ClickMe.png') }}"
                   controls preload="none" data-setup='{ "techOrder": ["youtube"],
                    "src": "https://www.youtube.com/embed/{{$url}}" }'>   
                  </video>
                </div>
            </div>    
        </div>
        <br>
        <div id="IntroTop">
        <img id="IntroLeft" src="{{ asset('img/video/media/IntroLeft.png') }}"></img>
           <div id="IntroRight">
              <div id="IntroBottom"></div>
              <div id="TextBox" class="mCustomScrollbar">

              {!! nl2br($article)!!}

              </div>
           </div><!--id IntroRight-->
        </div><!--id IntroTop-->
    </div><!--col s12 m12 l8-->
<!--留言的Ssection( orange accent-2)-->    
    <div class="col s12 m12 l4">   
          <div id="CardTop">
            <div id="CardLeft">
              <img id="CardImg" src="{{ asset('img/video/media/CardImg.png') }}"></img>
              <div id="CardRight">
                <img id="CardTitle" src="{{ asset('img/video/media/CardTitle.png') }}"></img> 
                  <div id="CardBottom">         
                    <br>
                      <div class="card-content">
                        <div id ="scroll"class="mCustomScrollbar">
@if (Auth::check() && Auth::user()->can('management') )

            @foreach(array_chunk( $tryconnect->getCollection()->all() , 7 ) as $row )
                @foreach ($row as $try)
                            <div id="{{$try->id}}">
                                <div class="row">
                                    <div class="col s2 m2 l2">{{$try->name}}</div>
                                    <div class="col s6 m6 l6" style="word-break: break-all;">留言內容 {{{$try->comment}}}</div>
                                    <div class="col s4 m4 l4" style="height: auto;">
                                      <button type="submit" class="waves-effect waves-teal btn , delete" value="{{ $try->id }}" style="    position: absolute;
            display: inline-block;
            padding: 1% 4%;
            margin: 0em;
            text-align: center;
            line-height: normal;
            right: 0%;">      
                                            <i class="material-icons">delete</i>
                                      </botton>                      
                                    </div>
                                </div><!--end row-->
                                <br>
                            </div><!--end div id-->
                        @endforeach
                    @endforeach
                            <div class="center-align">
                            @include('pagination.comment', ['paginator' => $tryconnect])
                            </div>
                            <div class="row" style="margin-bottom: 0px;margin-top: 0px;">  </div>
                            <div class="load "></div>
                    </div><!--end scroll zone-->
                </div><!--end card content-->
                <div class="card-action">
                    <div>
                        <p>留言:</p>            
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
@elseif (Auth::check())
            @foreach(array_chunk( $tryconnect->getCollection()->all() , 7 ) as $row )
                @foreach ($row as $try)
                            <div id="{{$try->id}}">
                                <div class="row">
                                    <div class="col s4 m3 l3">{{$try->name}}</div>
                                    <div class="col s8 m9 l9" style="word-break: break-all;">留言內容 {{{$try->comment}}}</div>
                                </div><!--end row-->
                                <br>

                            </div><!--end div id-->
                        @endforeach
                    @endforeach
                            <div class="center-align">
                            @include('pagination.comment', ['paginator' => $tryconnect])
                            </div>
                            <div class="row" style="margin-bottom: 0px;margin-top: 0px;">  </div>
                            <div class="load "></div>
                    </div><!--end scroll zone-->
                </div><!--end card content-->
                <div class="card-action">
                    <div>
                        <p>Message:</p>            
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


@else
 
            @foreach(array_chunk( $tryconnect->getCollection()->all() , 7 ) as $row )
                @foreach ($row as $try)
                            <div id="{{$try->id}}">
                                <div class="row">
                                    <div class="col s4 m3 l3">{{$try->name}}</div>
                                    <div class="col s8 m9 l9" style="word-break: break-all;">留言內容 {{$try->comment}}</div>
                                </div><!--end row-->
                                <br>

                            </div><!--end div id-->
                @endforeach
            @endforeach
                            <div class="center-align">
                            @include('pagination.comment', ['paginator' => $tryconnect])
                            </div>
                            <div class="row" style="margin-bottom: 0px;margin-top: 0px;">  </div>
                            <div class="load "></div>
                    </div><!--end scroll zone-->
                </div><!--end card content-->
                <div class="card-action">
                  <div>
                    <p>Message:</p>            
                    <a href="/auth/register">還沒有帳號嗎？註冊一個吧！</a>
                  </div> <!--avoid messenge & input overlap-->


@endif
                   </div><!--end card-action-->
                </div> <!--end CardTop-->
              </div> <!--end Card Left-->
            </div> <!--end Card Right-->
          </div> <!--end Card Bottom-->   
    </div><!--end col-->
</div><!--end row-->
@stop
