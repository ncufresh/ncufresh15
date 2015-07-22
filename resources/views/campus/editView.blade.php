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
<div id="campus_title">編輯項目</div>
{!! Form::open(array('url'=>'/campus/edit_view/'.$view->id, 'method'=>'post', 'files' => true))!!}
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<select class="browser-default" id="view_id" name="view_id">
		<option value="" disabled selected>分類</option>
		<option value="0" {{isset($view)&&$view->view_id==0?'selected="selected"':''}}>行政</option>
		<option value="1" {{isset($view)&&$view->view_id==1?'selected="selected"':''}}>系館</option>
		<option value="2" {{isset($view)&&$view->view_id==2?'selected="selected"':''}}>中大美景</option>
		<option value="3" {{isset($view)&&$view->view_id==3?'selected="selected"':''}}>運動</option>
		<option value="4" {{isset($view)&&$view->view_id==4?'selected="selected"':''}}>飲食</option>
		<option value="5" {{isset($view)&&$view->view_id==5?'selected="selected"':''}}>住宿</option>
	</select>
	<select class="browser-default" id="region_id" name="region_id">
		<option value="" disabled selected>區域</option>
		<option value="0" {{isset($view)&&$view->region_id==0?'selected="selected"':''}}>0</option>
		<option value="1" {{isset($view)&&$view->region_id==1?'selected="selected"':''}}>1</option>
		<option value="2" {{isset($view)&&$view->region_id==2?'selected="selected"':''}}>2</option>
		<option value="3" {{isset($view)&&$view->region_id==3?'selected="selected"':''}}>3</option>
		<option value="4" {{isset($view)&&$view->region_id==4?'selected="selected"':''}}>4</option>
		<option value="5" {{isset($view)&&$view->region_id==5?'selected="selected"':''}}>5</option>
	</select>
	<div class="input-field" id="title">
		<input type="text" class="validate" name="title" id="title_name" value="{{isset($view)?$view->title:''}}">
		<label for="title_name" id="item_name">項目標題</label>
	</div>
	<div class="pictures">
		<img id="view" src="{{ asset('uploads/campus/'.$view->picName) }}">
	</div>
	<div class="file-field input-field">
		<div class="btn">
			<span>更改圖片</span>
			<input type="file" accept="image/*" name="image_name">
		</div>
		<div class="file-path-wrapper">
		<input class="file-path validate" type="text">
		</div>
	</div>
	<div class="input-field">
		<textarea name="introduction">
			@if( isset($view) )
				{!! $view->introduction !!}
			@endif
		</textarea>
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