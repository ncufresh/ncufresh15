@extends('document\document_layout')

@section('title', '公告')

@section('css')
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/document/page.js') }}"></script>
@stop

@section('text')
<h3>{{$title}}</h3>
<div>
	{{$content}}

</div>
@stop