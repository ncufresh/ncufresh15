@extends('layout')

@section('title','輸入中大生活的資料')

@section('content')
<div class="row">
	<form class="col s12" action="">
		<div class="input-field col s12">  <!--選擇類別(食、住、育、樂、行)-->
			<select class="browser-default" id="choose">
				<option value="" display selected>選擇類別</option>
				<option value="1">食</option>
				<option value="2">住</option>
				<option value="3">育</option>
				<option value="4">樂</option>
				<option vlaue="5">行</option>
			</select>
		</div>	
		<div class="row">  <!--輸入介紹的文字內容-->
			<div class="input-field col s12">
				<input id="description" type="text" class="validate">
				<label for="description">介紹的文字內容</label>
			</div>
		</div>
		<div class="row">  <!--輸入影片網址-->
			<div class="input-field col s12">
				<input id="video" type="text">
				<label for="video">影片網址</label>
			</div>
		</div>
		<div class="input-field row">
			<button class="btn waves-effect waves-light right indigo" type="submit" name="action">提交</button>
		</div>
	</form>
</div>
@stop