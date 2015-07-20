@extends('layout')

@section('title', '校園導覽')

@section('css')
<link href="{{ asset('css/campus/style.css') }}" rel="stylesheet">
@stop

@section('js')
<script src="{{ asset('js/campus/renew.js') }}"></script>
<script src="{{ asset('js/campus/show_map.js') }}"></script>
<script src="{{ asset('js/campus/write_intro.js') }}"></script>
@stop

@section('content')
<div class="row">
<ul class="collapsible col" id="slidebar" data-collapsible="accordion">
	<li>
		<div class="collapsible-header">行政</div>
		<div class="collapsible-body collection"></div>
	</li>
	<li>
		<div class="collapsible-header">系館</div>
		<div class="collapsible-body collection"></div>
	</li>
	<li>
		<div class="collapsible-header">中大美景</div>
		<div class="collapsible-body collection"></div>
	</li>
	<li>
		<div class="collapsible-header">運動</div>
		<div class="collapsible-body collection"></div>
	</li>
	<li>
		<div class="collapsible-header">飲食</div>
		<div class="collapsible-body collection"></div>
	</li>
	<li>
		<div class="collapsible-header">住宿</div>
		<div class="collapsible-body collection"></div>
	</li>
</ul>
<div class="container" id="main">
@yield('main')
</div>
</div>
@stop