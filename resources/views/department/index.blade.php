@extends('layout')

@section('title', '系所社團')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/department/club.css') }}">
@stop

@section('content')
<div>
	<div class="selection" id="sel1">
		<label class="bigFont" onclick="select_cate(1)">系所</label>
	</div>
	<div class="selection" id="sel2">
		<label class="bigFont" onclick="select_cate(2)">社團</label>
	</div>
	<div class="selection" id="sel3">
		<a class="btn-floating btn-large waves-effect waves-light grey lighten-1" onclick="newClub()"><i class="material-icons">add</i></a>
	</div>
</div><br><br><br>
<div id="replace_place"></div>
@stop

@section('js')
	<script type="text/javascript" src="{{ asset('js/department/departmentClub.js') }}"></script>
@stop
