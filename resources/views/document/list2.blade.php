@extends('document\document_layout')

@section('title', '公告')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/document/document_layout.css') }}"  media="screen,projection"/>
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
@stop

@section('text')
<!--標題-->
@if($page_id_2 === 0)
	@if($page_id === "freshmen_week")
	<h5>新生週</h5>
	@elseif($page_id === "activity")
	<h5>輔導及活動專區</h5>
	@elseif($page_id === "daily")
	<h5>生活相關須知</h5>
	@elseif($page_id === "download")
	<h5>文件及下載專區</h5>
	@endif
@else
	@if($page_id === "university" && $page_id_2 === 1)
	<h5>重要日程(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 2)
	<h5>學籍(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 3)
	<h5>繳費(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 4)
	<h5>兵役(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 5)
	<h5>住宿(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 6)
	<h5>學生證(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 7)
	<h5>其他(大學部)</h5>

	@elseif($page_id === "graduate" && $page_id_2 === 1)
	<h5>重要日程(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 2)
	<h5>學籍(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 3)
	<h5>繳費(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 4)
	<h5>兵役(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 5)
	<h5>住宿(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 6)
	<h5>學生證(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 7)
	<h5>其他(研究所)</h5>
	@endif
@endif
<!--目錄-->
@foreach($all as $all)
<ul>
	<li><a href="/document/{{$all->page_id}}/{{$all->page_id_2}}/{{$all->id}}">{{ $all->title }}</a></li>
</ul>
@endforeach

@stop