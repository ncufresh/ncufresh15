@extends('document.document_layout')

@section('text')
<!--標題-->
@if($page_id_2 === 0)
	@if($page_id === "freshmen_week")
	<h5 class="page_title">新生週</h5>
	@elseif($page_id === "activity")
	<h5 class="page_title">輔導及活動專區</h5>
	@elseif($page_id === "daily")
	<h5 class="page_title">生活相關須知</h5>
	@elseif($page_id === "download")
	<h5 class="page_title">文件及下載專區</h5>
	@endif
@else
	@if($page_id === "university" && $page_id_2 === 1)
	<h5 class="page_title">重要日程(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 2)
	<h5 class="page_title">學籍(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 3)
	<h5 class="page_title">繳費(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 4)
	<h5 class="page_title">兵役(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 5)
	<h5 class="page_title">住宿(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 6)
	<h5 class="page_title">學生證(大學部)</h5>
	@elseif($page_id === "university" && $page_id_2 === 7)
	<h5 class="page_title">其他(大學部)</h5>

	@elseif($page_id === "graduate" && $page_id_2 === 1)
	<h5 class="page_title">重要日程(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 2)
	<h5 class="page_title">學籍(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 3)
	<h5 class="page_title">繳費(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 4)
	<h5 class="page_title">兵役(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 5)
	<h5 class="page_title">住宿(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 6)
	<h5 class="page_title">學生證(研究所)</h5>
	@elseif($page_id === "graduate" && $page_id_2 === 7)
	<h5 class="page_title">其他(研究所)</h5>
	@endif
@endif
<!--目錄-->
@foreach($all as $all)
<ul>
	<li><a href="/document/{{$all->page_id}}/{{$all->page_id_2}}/{{$all->id}}">{{ $all->title }}</a></li>
</ul>
@endforeach

@stop