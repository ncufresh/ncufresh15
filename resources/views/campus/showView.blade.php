@extends('campus/sidebar')

@section('main')
<div id="pictures">
	<img id="map" src="{{ asset('img/campus/NCU_Campus.jpg') }}">
	<img id="small_map" src="{{ asset('img/campus/map.jpg') }}">
	<img id="view" src="{{ asset('uploads/campus/'.$view->picName) }}">
</div>
<div class="card blue lighten-4">
	<div class="card-content">
		<span class="card-title black-text">
			{{ $view->title }}
		</span>
		<p>
			{!! $view->introduction !!}
		</p>
	</div>
</div>
<a class="waves-effect waves-light btn right" href="/campus/delete_view/{{$view->id}}">刪除</a>
<a class="waves-effect waves-light btn right" href="/campus/edit_view/{{$view->id}}" id="btn-edit">編輯</a>
@stop