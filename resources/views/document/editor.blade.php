@extends('document.document_layout')

@section('title', '公告編輯')

@section('css')
@stop

@section('text')
<div id="ckeditor">
	<form id="document-form">
	    <textarea name="editor1" id="editor1" rows="10" cols="80" ></textarea>
	    <input type="submit" value="完成" id="text_done" onclick="save()">
	</form>
</div>
@stop

@section('js')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/document/editor.js') }}"></script>
@stop
