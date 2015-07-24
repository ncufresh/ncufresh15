@extends('document\document_layout')

@section('title', '公告')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/document/document_layout.css') }}"  media="screen,projection"/>
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/document/page.js') }}"></script>
@stop

@section('text')
<h5>{{$title}}</h5>
<div>
	{{$content}}

</div>
@stop