@extends('layout')

@section('title', '校園導覽')

@section('css')
<link href="{{ asset('css/campus/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/campus/map.css') }}" rel="stylesheet">
@stop

@section('js')
<script src="{{ asset('js/campus/campus.js') }}"></script>
@stop

@section('content')
<div id="slidebar">
	<ul class="collapsible col" data-collapsible="accordion">
		<li>
			<a class="collapsible-header {{isset($index)?'here':'category'}}" href="/campus">校園地圖</a>
		</li>
		<li>
			<a href="/campus/0" class="collapsible-header
				{{ (isset($view)&&$view->view_id==0) || (isset($cate)&&$cate==0) ?'here active':'category'}}">行政</a>
			@foreach($campus as $item)
				@if($item->view_id==0)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/view/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
		<li>
			<a href="/campus/1" class="collapsible-header
				{{ (isset($view)&&$view->view_id==1) || (isset($cate)&&$cate==1) ?'here active':'category'}}">系館</a>
			@foreach($campus as $item)
				@if($item->view_id==1)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/view/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
		<li>
			<a href="/campus/2" class="collapsible-header
				{{ (isset($view)&&$view->view_id==2) || (isset($cate)&&$cate==2) ?'here active':'category'}}">中大景點</a>
			@foreach($campus as $item)
				@if($item->view_id==2)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/view/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
		<li>
			<a href="/campus/3" class="collapsible-header
				{{ (isset($view)&&$view->view_id==3) || (isset($cate)&&$cate==3) ?'here active':'category'}}">運動</a>
			@foreach($campus as $item)
				@if($item->view_id==3)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/view/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
		<li>
			<a href="/campus/4" class="collapsible-header
				{{ (isset($view)&&$view->view_id==4) || (isset($cate)&&$cate==4) ?'here active':'category'}}">飲食</a>
			@foreach($campus as $item)
				@if($item->view_id==4)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/view/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
		<li>
			<a href="/campus/5" class="collapsible-header
				{{ (isset($view)&&$view->view_id==5) || (isset($cate)&&$cate==5) ?'here active':'category'}}">住宿</a>
			@foreach($campus as $item)
				@if($item->view_id==5)
					<div class="collapsible-body collection">
						<a class="collection-item" href="/campus/view/{{$item->id}}">{{ $item->title }}</a>
					</div>
				@endif
			@endforeach
		</li>
	</ul>
	<a class="waves-effect waves-light btn right" href="/campus/add_view">新增</a>
</div>
<div class="container" id="main">
	@yield('main')
</div>
@stop