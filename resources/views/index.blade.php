@extends('layout')

@section('title', 'NCU Fresh')
@section('css')
	<link type="text/css" rel="stylesheet" href="{{ asset('css/index.css') }}"  media="screen,projection"/>
@stop

@section('js')
	<script src='{{asset("js/index.js")}}'></script>
@stop

@section('content')
<div id='r1' class='row'>
	<div id='post-container' class="col s12 m12 l5">
		<div class="row">
            <ul class="tabs">
                <li class="tab dick col s2 grey darken-1"><a class="active" href="#ann-tab">全部</a></li>
                <li class="tab dick col s2 grey lighten-1"><a  href="#doc-tab">公告</a></li>
                <li class="tab dick col s2 grey darken-1"><a href="#qa-tab">Q&amp;A</a></li>
            </ul>
			<div id="ann-tab" class="tab-content">
				@foreach ($announcements as $ann)
					<div class='row'>
						<div class='col s3'>
							@if ($ann->category == '1')
								<span class='category cat1'>Q&amp;A</span>
							@else
								<span class='category cat2'>公告</span>
							@endif
						</div>
						<div class='col s3'>{{date('m-d', strtotime($ann->created_at))}}</div>
						<div class='col s6'>
							<a href="{{$ann->url}}">{{$ann->title}}</a>
						</div>
					</div>
				@endforeach
			</div>
			<div id="qa-tab" class="tab-content">
				@foreach ($announcements as $ann)
					@if ($ann->category == '1')
						<div class='row'>
							<div class='col s3'>
								<span class='category cat1'>Q&amp;A</span>
							</div>
							<div class='col s3'>{{date('m-d', strtotime($ann->created_at))}}</div>
							<div class='col s6'>
								<a href="{{$ann->url}}">{{$ann->title}}</a>
							</div>
						</div>
					@endif
				@endforeach
			</div>
			<div id="doc-tab" class="tab-content">
				@foreach ($announcements as $ann)
					@if ($ann->category == '2')
						<div class='row'>
							<div class='col s3'>
								<span class='category cat2'>公告</span>
							</div>
							<div class='col s3'>{{date('m-d', strtotime($ann->created_at))}}</div>
							<div class='col s6'>
								<a href="{{$ann->url}}">{{$ann->title}}</a>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
	<div id='slider-container'class="col s12 m12 l7">
		<div class="slider">
			<ul class="slides">
				<li>
					<img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
					<div class="caption center-align">
						<h3>This is our big Tagline!</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
				<li>
					<img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
					<div class="caption left-align">
						<h3>Left Aligned Caption</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
				<li>
					<img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
					<div class="caption right-align">
						<h3>Right Aligned Caption</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
				<li>
					<img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
					<div class="caption center-align">
						<h3>This is our big Tagline!</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div id='r2' class='row'>
	<div id='calender-container'>
		<div class="row">
			<div id='arrow-container1'class="col s1 valign-wrapper"><a class='arrow waves-effect waves-light btn-flat valign'>&laquo;</a></div>
			<div id='puzzle-container' class="col s10 valign-wrapper">
				<div id='event-container' class="row">
					<div id='event1' class='col s3 dick'></div>
					<div id='event2' class='col s3 dick'></div>
					<div id='event3' class='col s3 dick'></div>
					<div id='event4' class='col s3'></div>
				</div>
			</div>
			<div id='arrow-container2' class="col s1 valign-wrapper"><a class='arrow waves-effect waves-light btn-flat valign'>&raquo;</a></div>
		</div>
	</div>
</div>
@stop
