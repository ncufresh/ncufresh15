@extends('document\document_layout')

@section('title', '公告')

@section('css')
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
@stop

@section('text')
<!--標題-->
@if($page_id_2 === 0)
	@if($page_id === "freshmen_week")
	<h4>新生週</h4>
	@elseif($page_id === "activity")
	<h4>輔導及活動專區</h4>
	@elseif($page_id === "daily")
	<h4>生活相關須知</h4>
	@elseif($page_id === "download")
	<h4>文件及下載專區</h4>
	@endif
@else
	@if($page_id === "university" && $page_id === 1)
	<h4>學籍(大學部)</h4>
	@elseif($page_id === "university" && $page_id === 2)
	<h4>繳費(大學部)</h4>
	@elseif($page_id === "university" && $page_id === 3)
	<h4>兵役(大學部)</h4>
	@elseif($page_id === "university" && $page_id === 4)
	<h4>住宿(大學部)</h4>
	@elseif($page_id === "university" && $page_id === 5)
	<h4>學生證(大學部)</h4>
	@elseif($page_id === "university" && $page_id === 6)
	<h4>其他(大學部)</h4>
	@elseif($page_id === "graduate" && $page_id === 1)
	<h4>學籍(研究所)</h4>
	@elseif($page_id === "graduate" && $page_id === 2)
	<h4>繳費(研究所)</h4>
	@elseif($page_id === "graduate" && $page_id === 3)
	<h4>兵役(研究所)</h4>
	@elseif($page_id === "graduate" && $page_id === 4)
	<h4>住宿(研究所)</h4>
	@elseif($page_id === "graduate" && $page_id === 5)
	<h4>學生證(研究所)</h4>
	@elseif($page_id === "graduate" && $page_id === 6)
	<h4>其他(研究所)</h4>
	@endif
@endif
<!--目錄-->
@foreach($all as $all)
<ul>
	<li><a href="/document/{{$all->page_id}}/{{$all->page_id_2}}/{{$all->id}}">{{ $all->title }}</a></li>
</ul>
@endforeach

@stop