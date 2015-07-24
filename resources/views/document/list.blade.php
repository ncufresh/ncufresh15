@extends('document\document_layout')

@section('title', '公告')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/document/document_layout.css') }}"  media="screen,projection"/>
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
@stop

@section('text')
@if($page_id === "university")
<h4>大學部新生註冊須知</h4>
<ul>
	<li><a href="/document/university/1">學籍</a></li>
	<li><a href="/document/university/2">繳費</a></li>
	<li><a href="/document/university/3">兵役</a></li>
	<li><a href="/document/university/4">住宿</a></li>
	<li><a href="/document/university/5">學生證</a></li>
	<li><a href="/document/university/6">其他注意事項(大學部)</a></li>
</ul>
@elseif($page_id === "graduate")
<h4>研究所新生須知</h4>
<ul>
	<li><a href="/document/graduate/1">學籍</a></li>
	<li><a href="/document/graduate/2">繳費</a></li>
	<li><a href="/document/graduate/3">兵役</a></li>
	<li><a href="/document/graduate/4">住宿</a></li>
	<li><a href="/document/graduate/5">學生證</a></li>
	<li><a href="/document/graduate/6">其他注意事項(研究所)</a></li>
</ul>
@endif
@stop