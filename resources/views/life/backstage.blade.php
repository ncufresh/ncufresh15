@extends('layout')

@section('title','編輯中大生活的資料')

@section('js')
<script src='{{ asset('js/select.js') }}'></script> <!--一定要引用才能顯示select-->
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    $(function() {
        CKEDITOR.replace('ans-content');
    });
</script>
@stop

@section('content')
<div id="lifedescription" class="row" style="padding:0 10%;">
	<form class="col s12" action="{{action('Life\LifeController@update',$show->id)}}" method="post">
		{!! csrf_field() !!}   <!--驗證身分-->
		<div class="row">
			<a href="{{ url('life/'.$show->id) }}" class="btn waves-effect waves-light"><i class="material-icons left">list</i>返回</a>
		</div>
		<h2>編輯中大生活的資料</h2>
		<div class="row">
			<div class="input-field col s3">  <!--選擇類別(食、住、育、樂、行)-->
				<select name="category">
				@foreach($category as $key=>$value) <!--$key是儲存'food'，$value是儲存'食'--> <!--selected="selected"是預先設定此值-->
					<option value="{{$key}}" {{$show->category==$key?'selected="selected"':''}}>{{$value}}</option>
				@endforeach	
				</select>
				<label>類別</label>
			</div>
			<div class="input-field col s9">  <!--輸入影片網址-->
				 <i class="material-icons prefix" style="font-size:2rem">info</i> 
				<input id="input_video" type="text" name="video" value="{{$show->video}}">
				<label for="input_video">影片網址</label>
			</div>
		</div>	
		<div class="row">  <!--輸入介紹的文字內容-->
			<div class="input-field col s12">
				<textarea id="ans-content" name="content">{{$show->content}}</textarea>
			</div>
		</div>
		<div class="input-field row">
			<div class="right-align">
				<button class="btn waves-effect waves-light" type="submit" name="action1">Submit
					<i class="material-icons">send</i>
				</button>
			</div>	
		</div>  
	</form>
</div>
<div class="row" style="padding:0 10%">
	<form action="{{url('life/addpic/'.$show->id)}}" method="post">
		{!! csrf_field() !!}
		<div class="row">
			<div class="input-field col s12">
				<i class="material-icons prefix" style="font-size:2rem">person_pin</i>
				<input id="input_pictures" type="text" name="url">
				<label>圖片的網址</label>
			</div>
		</div>	
		<div class="input-field row">
			<div class="right-align">
				<button class="btn waves-effect waves-light" type="submit" name="action2">Submit
					<i class="material-icons">send</i>
				</button>
			</div>	
		</div>
	</form>
	<div class="row">
		<div class="center-align">	
			@foreach($pictures as $picture)
			<div class="col s6">
				<img src="{{$picture->url}}" width="100%">
				<a class="btn-floating btn-large waves-effect waves-light red" href="{{url('life/delpic/'.$picture->id)}}"><i class="material-icons">delete</i>刪除</a>
			</div>
			@endforeach
		</div>
	</div>		
</div>
@stop