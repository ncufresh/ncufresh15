@extends('document.document_layout')

@section('text')
<h5 class="page_title">{{$title}}</h5>
<div>
	{!! $content !!}
</div>
@stop