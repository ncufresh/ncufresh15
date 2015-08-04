@extends('document.document_layout')

@section('text')
<h5 class="page_title">104校曆</h5>
<iframe src="{{url('/files/calendar104.pdf')}}" frameborder="0" width="100%" height="100%" scrolling="auto" style="width: 100%;"></iframe>
@stop
