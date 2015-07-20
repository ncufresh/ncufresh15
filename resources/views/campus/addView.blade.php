@extends('campus/sidebar')

@section('main')
<h3>新增項目</h3>
<form class="col s12">
	<select class="browser-default">
		<option value="" disabled selected>請選擇一個分類</option>
		<option value="0">行政</option>
		<option value="1">系館</option>
		<option value="2">中大美景</option>
		<option value="3">運動</option>
		<option value="4">飲食</option>
		<option value="5">住宿</option>
	</select>
	<div class="input-field col s12">
		<textarea id="introduction" class="materialize-textarea"></textarea>
		<label for="introduction">簡介內容</label>
	</div>
</form>
@stop