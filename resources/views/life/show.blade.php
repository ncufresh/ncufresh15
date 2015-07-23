@extends('layout')

@section('title','中大生活-介紹')

@section('css')
	<link rel="stylesheet" type="text/css" href='{{ asset('css/coverflow.css') }}' />
	<style type="text/css">
		#coverflow{
			font-family:inital !importment;
		}
	</style>
@stop

@section('js')
	<script src='{{ asset('js/life/coverflow.min.js') }}'></script>
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
<div id="coverflow"  style="height:400px;">
	@foreach($pictures as $picture)
		<a href="{{ $picture->url }}" target="_blank">
			<img src="{{$picture->url}}" width="400" height="400">	
		</a>	
	@endforeach
</div>

<!--圖片-->

<div class="row" style="margin-top:500px;">
	<div class=" center align">
		<div class="card-panel hoverable">
			<p>{!! $show->content !!}</p>   <!--  -->
		</div>
	</div>		
</div>
@stop