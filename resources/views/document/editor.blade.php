@extends('document\document_layout')

@section('title', '公告編輯')

@section('css')
<style type="text/css">
td {
	  border: 1px solid #989090;
}
</style>
@stop

@section('text')
<div id="ckeditor">
	<form id="document-form">
		<label>類別</label>
	    <select class="browser-default">
	    	<option value="" disabled selected>大學部新生註冊須知</option>
	    	<option value="1">學籍</option>
	    	<option value="2">繳費</option>
	    	<option value="3">兵役</option>
	    	<option value="4">住宿</option>
	    	<option value="5">學生證</option>
	    	<option value="6">其他</option>
	    	<option value="" disabled selected>研究所新生須知</option>
	    	<option value="7">學籍</option>
	    	<option value="8">繳費</option>
	    	<option value="9">兵役</option>
	    	<option value="10">住宿</option>
	    	<option value="11">學生證</option>
	    	<option value="12">其他</option>
	    	<option value="13" >輔導及活動專區</option>
	    	<option value="14" >生活相關須知</option>
	    	<option value="15">文件及下載專區</option>
	    </select>
		<div class="row">
			<div class="input-field col s12">
				<input id="title" type="text" class="validate" >
				<label for="title" data-error="wrong" data-success="right">標題</label>
			</div>
		</div>
	    <textarea name="editor1" id="editor1" rows="10" cols="80" ></textarea>
	    <input type="button" value="完成" id="text_done">
	</form>
</div>
<div id="text"></div>
@stop

@section('js')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/document/editor.js') }}"></script>
@stop