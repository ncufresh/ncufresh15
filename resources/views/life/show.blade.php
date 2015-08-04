@extends('layout')

@section('title','中大生活-介紹')

@section('css')
	<link rel="stylesheet" type="text/css" href='{{ asset('css/coverflow.css') }}' />
	<style type="text/css">
		#coverflow{
			font-family:inital !importment;
		}
		#a{
			background-image:url('/img/life/article.png');
			background-size:100% auto;
			background-repeat: no-repeat;
			width:100%;
			height:100%;
		}
		.article{
			width:581px;
			height:324px;
			overflow:scroll;
			margin:0% auto;
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
@permission('management')
<div class="row">
	<div class="right align">
		<a class="waves-effect waves-light btn" href="{{url('life/edit/'.$show->id)}}"><i class="material-icons left">settings</i>後台管理</a>
	</div>	
</div>
@endpermission
<div id="coverflow"  style="height:400px;">
	@foreach($pictures as $picture)
		<a href="{{ $picture->url }}" target="_blank">
			<img src="{{$picture->url}}" width="400" height="400">	
		</a>	
	@endforeach
</div>

<!--圖片-->

<div id="a" style="margin-top:500px;padding-top:3%;">
	<div class="center align">
		<div class="article">
			<p>{!! $show->content !!}</p>   <!--  -->
		</div>
	</div>		
</div>
@stop
