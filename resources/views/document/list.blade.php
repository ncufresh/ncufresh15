@extends('document.document_layout')

@section('text')
<!--標題-->
@if($page_id_2 === 0)
	@if($page_id === "freshmen_week")
	<h5 class="page_title">新生週</h5>
	@elseif($page_id === "activity")
	<h5 class="page_title">輔導及活動專區</h5>
	@elseif($page_id === "daily")
	<h5 class="page_title">學習及生活相關須知</h5>
	@endif
@else
	@if ($page_id === "university" && $page_id_2 == 1)
	<h5 class="page_title">重要日程</h5>
	@elseif($page_id === "university" && $page_id_2 == 2)
	<h5 class="page_title">學籍</h5>
	@elseif($page_id === "university" && $page_id_2 == 3)
	<h5 class="page_title">繳費</h5>
	@elseif($page_id === "university" && $page_id_2 == 4)
	<h5 class="page_title">兵役</h5>
	@elseif($page_id === "university" && $page_id_2 == 5)
	<h5 class="page_title">住宿</h5>
	@elseif($page_id === "university" && $page_id_2 == 6)
	<h5 class="page_title">學生證</h5>
	@elseif($page_id === "university" && $page_id_2 == 7)
	<h5 class="page_title">其他注意事項</h5>

	@elseif($page_id === "graduate" && $page_id_2 == 1)
	<h5 class="page_title">重要日程</h5>
	@elseif($page_id === "graduate" && $page_id_2 == 2)
	<h5 class="page_title">學籍</h5>
	@elseif($page_id === "graduate" && $page_id_2 == 3)
	<h5 class="page_title">繳費</h5>
	@elseif($page_id === "graduate" && $page_id_2 == 4)
	<h5 class="page_title">兵役</h5>
	@elseif($page_id === "graduate" && $page_id_2 == 5)
	<h5 class="page_title">住宿</h5>
	@elseif($page_id === "graduate" && $page_id_2 == 6)
	<h5 class="page_title">學生證</h5>
	@elseif($page_id === "graduate" && $page_id_2 == 7)
	<h5 class="page_title">其他注意事項</h5>
	@endif
@endif
<!--目錄-->
<div class="list_menu">
<ul>
	@foreach($all as $all)
	<li class="list_3"><a href="/document/{{$all->page_id}}/{{$all->page_id_2}}/{{$all->id}}">{{ $all->title }}</a></li>
	@endforeach
</ul>

</div>
@stop
