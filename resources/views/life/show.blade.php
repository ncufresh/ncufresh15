@extends('layout')

@section('title','中大生活-介紹')

@section('js')
	$(document).ready(function(){
    	$('.materialboxed').materialbox();
  	});
@stop

@section('content')
<div class="row">
	<div class="right align">
		<a class="waves-effect waves-light btn" href="{{url('life/edit/'.$show->id)}}"><i class="material-icons left">settings</i>後台管理</a>
	</div>	
</div>
<div class="row">
	<div class="center align">
		@foreach($pictures as $picture)
			<img class="materialboxed" src="{{$picture->url}}" width="50%">
		@endforeach
		<!--<img src="http://orig00.deviantart.net/d858/f/2014/225/d/c/catherine_sketch_by_kr0npr1nz-d7uyihv.jpg" width="500">-->
	</div>	
</div> <!--圖片-->

<div class="row">
	<div class=" center align">
		<div class="card-panel hoverable">
			<p>{!! nl2br(e($show->content)) !!}</p>   <!--  -->
		</div>
	</div>		
</div>
@stop