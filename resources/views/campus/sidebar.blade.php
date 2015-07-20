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
<div id="slidebar">
<ul class="collapsible col" data-collapsible="accordion">
	<li>
		<a class="collapsible-header" href="/campus">校園地圖</a>
	</li>
	<li>
		<a class="collapsible-header">行政</a>
		<div class="collapsible-body collection"><a class="collection-item">行政大樓</a></div>
	</li>
	<li>
		<a class="collapsible-header">系館</a>
		<div class="collapsible-body collection"></div>
	</li>
	<li>
		<a class="collapsible-header">中大美景</a>
		<div class="collapsible-body collection"></div>
	</li>
	<li>
		<a class="collapsible-header">運動</a>
		<div class="collapsible-body collection"></div>
	</li>
	<li>
		<a class="collapsible-header">飲食</a>
		<div class="collapsible-body collection"></div>
	</li>
	<li>
		<a class="collapsible-header">住宿</a>
		<div class="collapsible-body collection"></div>
	</li>
</ul>
<a class="waves-effect waves-light btn right" href="/campus/add_view">新增項目</a>
</div>
<div class="container" id="main">
@yield('main')
</div>
@stop