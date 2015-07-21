@extends('campus/sidebar')

@section('main')
<div class="add_title">新增項目</div>
{!! Form::open(array('url'=>'/campus/new_view', 'method'=>'post', 'files' => true))!!}
	<select class="browser-default" id="view_id" name="view_id">
		<option value="" disabled selected>請選擇一個分類</option>
		<option value="0">行政</option>
		<option value="1">系館</option>
		<option value="2">中大美景</option>
		<option value="3">運動</option>
		<option value="4">飲食</option>
		<option value="5">住宿</option>
	</select>
	<div class="file-field input-field col s12">
		<div class="btn">
			<span>File</span>
			{!!Form::file('image_name')!!}
		</div>
		<div class="file-path-wrapper">
		<input class="file-path validate" type="text">
		</div>
		<button type="submit" class="btn waves-effect waves-light right" name="send">確認
			<i class="material-icons right">send</i>
		</button>
		
	</div>
	<input type="hidden" id="title" value="title" name="title">
		<input type="hidden" id="introduction" value="introduction" name="introduction">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
{!! Form::close()!!}
<div id="show">
	@if (isset($introduction))
	{{$introduction}}
	@endif
</div>
@stop