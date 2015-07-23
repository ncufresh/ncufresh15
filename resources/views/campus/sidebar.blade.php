@extends('layout')

@section('title', '校園導覽')

@section('css')
<link href="{{ asset('css/campus/style.css') }}" rel="stylesheet">
@stop

@section('js')
<script src="{{ asset('js/campus/campus.js') }}"></script>
@stop

@section('content')
<div id="slidebar">
	<ul class="collapsible col" data-collapsible="accordion">
		<li>
			<a class="collapsible-header category black-text" href="/campus" id="category1">校園地圖</a>
		</li>
		<li>
			<a class="collapsible-header category black-text">行政</a>
			@foreach($campus as $item)
				@if($item->view_id==0)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
		<li>
			<a class="collapsible-header category black-text">系館</a>
			@foreach($campus as $item)
				@if($item->view_id==1)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
		<li>
			<a class="collapsible-header category black-text">中大美景</a>
			@foreach($campus as $item)
				@if($item->view_id==2)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
		<li>
			<a class="collapsible-header category black-text">運動</a>
			@foreach($campus as $item)
				@if($item->view_id==3)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
		<li>
			<a class="collapsible-header category black-text">飲食</a>
			@foreach($campus as $item)
				@if($item->view_id==4)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
		<li>
			<a class="collapsible-header category black-text">住宿</a>
			@foreach($campus as $item)
				@if($item->view_id==5)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
	</ul>
	<a class="waves-effect waves-light btn right" href="/campus/add_view">新增項目</a>
</div>
<div class="container" id="main">
	@yield('main')
</div>
@stop