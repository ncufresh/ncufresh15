@extends('layout')

@section('title','中大生活-介紹')

@section('css')
	<link rel="stylesheet" type="text/css" href='{{ asset('css/coverflow.css') }}' />
	<link rel="stylesheet" href="{{url('css/jquery.mCustomScrollbar.min.css')}}"/>
	<style type="text/css">
		#coverflow{
			font-family:inital !importment;
		}
		#article{
			width:90%;
			height:29%;
			margin:4% auto;
		}
		strong{
			font-weight: bold;
		}
	</style>
@stop

@section('js')
	<script src='{{ asset('js/life/coverflow.min.js') }}'></script>
	<script>
		$(function() {
			// and kick off
	        $('#coverflow').coverflow();
	        $('#prev').click(function() {
		    	$('#coverflow' ).coverflow( 'prev' );
		    });
		    $('#next').click(function() {
		    	$('#coverflow' ).coverflow( 'next' );
		    });
	    });
	</script>
	<script src="{{url('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
@stop

@section('content')
@permission('management')
<div class="row">
    @permission('management')
	<div class="right align">
		<a class="waves-effect waves-light btn" href="{{url('life/edit/'.$show->id)}}"><i class="material-icons left">settings</i>後台管理</a>
	</div>	
    @endpermission
</div>
@endpermission
<div id="coverflow"  style="height:200px;">
	@foreach($pictures as $picture)
		<a href="{{ $picture->url }}" target="_blank">
			<img src="{{$picture->url}}" width="200" height="200">	
		</a>	
	@endforeach
</div>
<!--圖片-->

<div class="row" style="margin-top:250px;">
	<div class="card-panel hoverable">
	<div class="center-align">
		<button class="waves-effect waves-light btn blue" id="prev">上一張</button>
		<button class="waves-effect waves-light btn blue" id="next">下一張</button>
	</div>
	<div id="article" class="mCustomScrollbar tab-content" data-mcs-theme="dark-thick">
		<p>{!! $show->content !!}</p>   
	</div>	
	</div>	
</div>
@stop
