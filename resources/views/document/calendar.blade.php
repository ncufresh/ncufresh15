@extends('document\document_layout')

@section('title', '公告')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/document/document_layout.css') }}"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="{{ asset('css/document/page.css') }}"  media="screen,projection"/>
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/document/page.js') }}"></script>
@stop

@section('text')
<h5>104校曆</h5>
<div>
	<iframe src="/files/calendar104.pdf" frameborder="0" width="550" height="900" scrolling="auto"></iframe>
</div>
@stop