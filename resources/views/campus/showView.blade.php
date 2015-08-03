@extends('campus/sidebar')

@section('main')
<div id="show" class="col s12">
	<div id="pictures">
		<div id="move">
			<img id="pizzle" src="{{ asset('img/map/puzzle.png') }}">
			<img id="map" src="{{ asset('img/map/'.$view->region.'.jpg') }}">
		</div>
		<img id="view" src="{{ asset('uploads/campus/'.$view->picName) }}">
	</div>
	<div class="card white">
		<div class="card-content">
			<span class="card-title indigo-text text-darken-4" id="title_text">
				{{ $view->title }}
			</span>
			<p>
				{!! $view->introduction !!}
			</p>
		</div>
	</div>
    @permission('management')
	<a class="waves-effect waves-light btn blue darken-4 right" href="/campus/delete_view/{{$view->id}}">刪除</a>
	<a class="waves-effect waves-light btn blue darken-4 right" href="/campus/edit_view/{{$view->id}}" id="btn_edit">編輯</a>
    @endpermission
</div>
@stop
