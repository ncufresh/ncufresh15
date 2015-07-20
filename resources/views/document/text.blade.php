@extends('document\document_layout')

@section('title', '公告')

@section('css')
@stop

@section('js')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
$(function() {
	CKEDITOR.replace( 'editor1' );
	var data = CKEDITOR.instances.editor1.getData();
	console.log(data);

/*
	$(#text_done).click(function(){
		var data = CKEDITOR.instances.editor1.getData();
   		console.log(data);
	})*/
});
</script>
@stop

@section('text')
<form>
    <textarea name="editor1" id="editor1" rows="10" cols="80">
        This is my textarea to be replaced with CKEditor.
    </textarea>
    <form>
    	<input type="submit" value="完成" id="text_done">
    </form>
</form>
@stop