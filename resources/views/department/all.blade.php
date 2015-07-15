@extends('layout')

@section('title', '系所社團')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/department/club.css') }}">
@stop
@section('js')
	<script type="text/javascript" src="{{ asset('js/department/departmentClub.js') }}"></script>
@stop

@section('content')
<div>
	<div class="row">
    	<a href="/department/backstage">返回後台</a><br>
    </div>
    <div id="test1" class="col s12" style="padding: 30px;">
    	@foreach($content as $content)
    	<div class="group">
			<label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">{{ $content->name }}</label>
		</div>
		@endforeach
	</div>
</div>
@stop