@extends('layout')

@section('title', 'Announcement')

@section('css')
<style>
.post-title {
	color: #0d47a1;
	font-weight: 600;
	margin-bottom: 1em;
}
.time-title {
	color: #bf360c;
}
.col.post-content {
	padding-top: 3%;
	line-height: 3em;
}
</style>
@stop

@section('js')
<!--<script src=''></script> -->

@stop

@section('content')
	@if ($type == "single")
		<div class='post-container'>
			<h5 class="post-title">{{$anns->title}}</h5>
			<div class='row'>
				<div class='col s12 m12 l12'><span class="time-title">發布日期:</span> {{$anns->created_at}}</div>
				<div class='col s12 m12 l12 post-content'>{!!nl2br($anns->content)!!}</div>
			</div>
		</div>
	@elseif ($type == "all")
		<h5 class="post-title">公告事項清單</h5>
		@foreach ($anns as $ann)
			<div class='row'>
				<div class='col s12 m12 l12'>
					<span class="time-title">* </span>
					<a href="{{url('ann').'/'.$ann->id}}">{{$ann->title}}</a>
				</div>
			</div>
		@endforeach
	@endif
@stop
