@extends('campus/sidebar')

@section('js')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    $(function() {
        CKEDITOR.replace('introduction');
    });
</script>
@stop

@section('main')
<div id="campus_title">新增項目</div>
{!! Form::open(array('url'=>'/campus/add_view', 'method'=>'post', 'files' => true))!!}
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<select class="browser-default" id="view_id" name="view_id">
		<option value="" disabled selected>分類</option>
		<option value="0">行政</option>
		<option value="1">系館</option>
		<option value="2">中大美景</option>
		<option value="3">運動</option>
		<option value="4">飲食</option>
		<option value="5">住宿</option>
	</select>
	<select class="browser-default" id="region_id" name="region_id">
		<option value="" disabled selected>區域</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<div class="input-field" id="title">
		<input type="text" class="validate" name="title" id="title_name">
		<label for="title_name" id="item_name">項目標題</label>
	</div>
	<div class="file-field input-field">
		<div class="btn">
			<span>上傳圖片</span>
			<input type="file" accept="image/*" name="image_name">
		</div>
		<div class="file-path-wrapper">
		<input class="file-path validate" type="text">
		</div>
	</div>
	<div class="input-field">
		<textarea name="introduction"></textarea>
	</div>
	<div class="input-field">
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