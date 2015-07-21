@extends('layout')

@section('title','中大生活-介紹')

@section('css')
	<link rel="stylesheet" type="text/css" href='{{ asset('css/coverflow.css') }}' />
@stop

@section('js')
	<!--$(document).ready(function(){
    	$('.materialboxed').materialbox();
  	}); 圖片放大-->
	<script src='{{ asset('js/coverflow.min.js') }}'></script>
	<script>
		$(function() {
			// and kick off
	        $('#coverflow').coverflow();
	    });
	</script>
@stop

@section('content')
<div class="row">
	<div class="right align">
		<a class="waves-effect waves-light btn" href="{{url('life/edit/'.$show->id)}}"><i class="material-icons left">settings</i>後台管理</a>
	</div>	
</div>

		<div id="coverflow">
			@foreach($pictures as $picture)
				<img src="{{$picture->url}}" width="400" height="400">
			@endforeach
		</div>	

<!--圖片-->

<div class="row" style="margin-top:400px">
	<div class=" center align">
		<div class="card-panel hoverable">
			<p>{!! nl2br(e($show->content)) !!}</p>   <!--  -->
		</div>
	</div>		
</div>
@stop