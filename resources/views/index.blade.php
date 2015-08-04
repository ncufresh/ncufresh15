@extends('layout')

@section('title', 'NCU Fresh | 新生知訊網')
@section('css')
	<link type="text/css" rel="stylesheet" href="{{ asset('css/index.css') }}"  media="screen,projection"/>
	<link rel="stylesheet" href="{{url('css/jquery.mCustomScrollbar.min.css')}}"/>
	<style type="text/css">
		#banner-img {
			background: url('{{asset("img/banner/4.jpg")}}');
			background-size: 100% 100%;
		}
	</style>
@stop
@section('js')
	<script src='{{asset("js/index.js")}}'></script>
	<script src="{{url('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
@stop

@section('content')
<div id='r1' class='row'>
	<div id='post-container' class="col s12 m12 l5">
		<div class="row">
            <ul class="tabs">
                <li class="tab grey lighten-1"><a  href="#ann-tab">公告</a></li>
                <li class="tab grey darken-1"><a href="#qa-tab">熱門Q&amp;A</a></li>
            </ul>
			<div id="ann-tab" class="mCustomScrollbar tab-content" data-mcs-theme="light-thick">
				@foreach ($announcements as $ann)
					<div class='row'>
						<div class='col s2'><span class="tag tag1">{{date('m-d', strtotime($ann->show_at))}}</span></div>
						<div class='col s10'>
							<a href="{{url("ann")."/".$ann->id}}">{{$ann->title}}</a>
						</div>
					</div>
				@endforeach
			</div>
			<div id="qa-tab" class="mCustomScrollbar tab-content" data-mcs-theme="light-thick">
				@foreach ($annqas as $ann)
					<div class='row'>
						<div class='col s2'><span class="tag tag2">{{date('m-d', strtotime($ann->created_at))}}</span></div>
						<div class='col s10'>
							<a href="{{$ann->url}}">{{$ann->title}}</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<div id='slider-container'class="col s12 m12 l7">
		<div class="slider">
			<ul class="slides">
				<li>
					<a href="http://www.google.com"><img src="{{ asset('img/pine.jpg') }}" ></a>
					<div class="caption right-align">
					</div>
				</li>
				<li>
					<img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
					<div class="caption center-align">
						<h3>新生知訊網</h3>
						<h5 class="light grey-text text-lighten-3">投資一定有風險 基金投資有賺有賠 申購前應詳閱公開說明書</h5>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div id='r2' class='row'>
	<div id='calender-container'>
		<div class="row">
			<div id='arrow-container1'class="col s1 valign-wrapper"><a id="arrow1" class='arrow btn-flat valign'>&lt;</a></div>
			<div id='puzzle-container' class="col s10 valign-wrapper">
				<div id='event-container' class="row">
					<div id='event1' class='col s3 dick'><a id='e1' class='event-box' href="#event1-modal"></a></div>
					<div id='event2' class='col s3 dick'><a id='e2' class='event-box' href="#event2-modal"></a></div>
					<div id='event3' class='col s3 dick'><a id='e3' class='event-box' href="#event3-modal"></a></div>
					<div id='event4' class='col s3 dick'><a id='e4' class='event-box' href="#event4-modal"></a></div>
				</div>
			</div>
			<div id='arrow-container2' class="col s1 valign-wrapper"><a id="arrow2" class='arrow btn-flat valign'>&gt;</a></div>
		</div>
	</div>
</div>
<!-- Event 1 Modal-->
<div id="event1-modal" class="modal mCustomScrollbar" data-mcs-theme="dark">
	<div class="modal-content">
		<p id="e1-content"></p>
	</div>
</div>
<!-- Event 2 Modal-->
<div id="event2-modal" class="modal mCustomScrollbar" data-mcs-theme="dark">
	<div class="modal-content">
		<p id="e2-content"></p>
	</div>
</div>
<!-- Event 1 Modal-->
<div id="event3-modal" class="modal mCustomScrollbar" data-mcs-theme="dark">
	<div class="modal-content">
		<p id="e3-content"></p>
	</div>
</div>
<!-- Event 1 Modal-->
<div id="event4-modal" class="modal mCustomScrollbar" data-mcs-theme="dark">
	<div class="modal-content">
		<p id="e4-content"></p>
	</div>
</div>
@stop
