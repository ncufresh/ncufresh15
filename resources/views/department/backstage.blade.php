@extends('layout')

@section('title', '系所社團')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/department/club.css') }}">
@stop
@section('js')
	<script type="text/javascript" src="{{ asset('js/department/departmentClub.js') }}"></script>
@stop

@section('content')
<div>
	<div class="row">
    	<div class="col s12">
    	  	<ul class="tabs">
    	    	<li class="tab col s3"><a href="#test1">修改系所</a></li>
    	    	<li class="tab col s3"><a class="active" href="#test2">修改社團</a></li>
    	    	<li class="tab col s3"><a href="#test3">新增</a></li>
      		</ul>
    	</div><br>
    </div>
    <div id="test1" class="col s12" style="padding: 30px;">
    	<div class="group">
			<a href="1"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">文學院</label></a>
			<a href="2"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">理學院</label></a>
		</div>
		<div class="group">
			<a href="3"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">工學院</label></a>
			<a href="4"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">管理學院</label></a>
		</div>
		<div class="group">
			<a href="5"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">資訊電機學院</label></a>
			<a href="6"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">地球科學學院</label></a>
		</div>
		<div class="group">
			<a href="7"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">客家學院</label></a>
			<a href="8"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">生醫理工學院</label></a>
		</div>
	</div>
    <div id="test2" class="col s12" style="padding: 30px;">
    	<div class="group">
			<a href="9"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">學術性</label></a>
			<a href="10"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">康樂性</label></a>
		</div>
		<div class="group">
			<a href="11"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">聯誼性</label></a>
			<a href="12"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">服務性</label></a>
		</div>
		<div class="group">
			<a href="13"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">系學會</label></a>
		</div>
    </div>
    <div id="test3" class="col s12" style="padding: 30px;">
    	{!! Form::open(array('url'=>'/department/new', 'method'=>'post', 'files' => true))!!}
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label>選擇類別</label>
			<div class="input-field col s12">
			    <select name="cateValue" style="display: block;">
			      	<option value="" disabled selected>社團</option>
			      	<option value="1">學術性</option>
			      	<option value="2">康樂性</option>
			      	<option value="3">聯誼性</option>
			      	<option value="4">服務性</option>
			      	<option value="5">系學會</option>
			      	<option value="" disabled selected>系所</option>
			      	<option value="6">文學院</option>
			      	<option value="7">理學院</option>
			      	<option value="8">工學院</option>
			      	<option value="9">管理學院</option>
			      	<option value="10">資訊電機學院</option>
			      	<option value="11">地球科學學院</option>
			      	<option value="12">客家學院</option>
			      	<option value="13">生醫理工學院</option>
			    </select>
			</div>
			<div class="row">
			   	<div class="input-field col s12">
			     	<input name="clubName" id="name" type="text" class="validate">
			     	<label for="name">名稱</label>
			   	</div>
			</div>
			<div class="row">
        	  	<div class="input-field col s12">
        	    	<textarea name="clubContent" id="textarea1" class="materialize-textarea" length="600"></textarea>
        	   		<label for="textarea1">內容</label>
        	  	</div>
        	</div>
			<div class="file-field input-field">
      			<input class="file-path validate" type="text">
      			<div>
      			<input name="fileName[]" id="file" type="file" class="validate" multiple="multiple" onchange="getFileName(this.value)">
        			<label id="fileName" for="file">選擇圖片</label>
      			</div>
   			</div>
			<div>
				<label id="butUp" class="waves-effect waves-light btn-large grey lighten-2 butSelect">圖片上傳</label>
			</div>
			<div>
				<button type="submit" class="waves-effect waves-light btn-large grey lighten-2 butSelect">確認上傳</button>
			</div>
		{!! Form::close()!!}
    </div>
</div>
@stop