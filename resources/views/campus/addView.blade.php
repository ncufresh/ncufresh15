@extends('campus/sidebar')

@section('main')
<div class="add_title">新增項目</div>
{!! Form::open(array('url'=>'/campus/new_view', 'method'=>'post', 'files' => true))!!}
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<select class="browser-default" id="view_id" name="view_id">
		<option value="" disabled selected>請選擇一個分類</option>
		<option value="0">行政</option>
		<option value="1">系館</option>
		<option value="2">中大美景</option>
		<option value="3">運動</option>
		<option value="4">飲食</option>
		<option value="5">住宿</option>
	</select>
	<div class="input-field col s12">
		<input type="text" class="validate" id="title" name="title">
		<label for="title">項目標題</label>
	</div>
	<div class="file-field input-field col s12">
		<div class="btn">
			<span>上傳圖片</span>
			<input type="file" accept="image/*" name="image_name">
		</div>
		<div class="file-path-wrapper">
		<input class="file-path validate" type="text">
		</div>
	</div>
	<div class="input-field col s12">
		<input type="text" class="validate" id="introduction" name="introduction">
		<label for="introduction">簡介</label>
		<span id="error">
			@if( isset($error) )
				{{ $error }}
			@endif
		</span>
		<button type="submit" class="btn waves-effect waves-light right" name="send">確認
			<i class="material-icons right">send</i>
		</button>
	</div>
{!! Form::close()!!}
@stop