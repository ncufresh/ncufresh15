@extends('layout')

@section('title','輸入中大生活的資料')

@section('js')
<script src='{{ asset('js/select.js') }}'></script> <!--一定要引用才能顯示select-->
@stop

@section('content')
<div id="lifedescription" class="row" style="padding:0 10%;">
	<form class="col s12" action="{{isset($answer)?action('Life\LifeController@update',$answer->id):url('life/backstage')}}" method="post">
		{!! csrf_field() !!}
		<h2>新增中大生活的資料</h2>
		<div class="row">
			<div class="input-field col s3">  <!--選擇類別(食、住、育、樂、行)-->
				<select name="category">
					<option value="0" {{isset($answer)&&$answer->category==0?'selected="selected"':''}}>食</option>
					<option value="1" {{isset($answer)&&$answer->category==1?'selected="selected"':''}}>住</option>
					<option value="2" {{isset($answer)&&$answer->category==2?'selected="selected"':''}}>育</option>
					<option value="3" {{isset($answer)&&$answer->category==3?'selected="selected"':''}}>樂</option>
					<option vlaue="4" {{isset($answer)&&$answer->category==4?'selected="selected"':''}}>行</option>
				</select>
				<label>類別</label>
			</div>
			<div class="input-field col s9">  <!--輸入影片網址-->
				 <i class="material-icons prefix" style="font-size:2rem">info</i> 
				<input id="input_video" type="text" name="video" value="{{isset($answer)?$answer->video:''}}">
				<label for="input_video">影片網址</label>
			</div>
		</div>	
		<div class="row">  <!--輸入介紹的文字內容-->
			<div class="input-field col s12">
				 <i class="material-icons prefix">mode_edit</i>
				<input id="life_content" type="text" class="validate" name="content" value="{{isset($answer)?$answer->content:''}}">
				<label for="content">介紹的文字內容</label>
			</div>
		</div>
		<div class="input-field row">
			<div class="right-align">
				<button class="btn waves-effect waves-light" type="submit" name="action">Submit
					<i class="material-icons">send</i>
				</button>
			</div>	
		</div>  
	</form>
</div>
@stop