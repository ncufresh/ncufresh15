@extends('department\list')

@section('title', '系所社團')

@section('main')
<div>
    <div id="test1" class="col s12" style="padding: 30px;">
    	<div class="group">
			<label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup" onclick="clickCate(2)">系所</label>
			<label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup" onclick="clickCate(3)">社團</label>
		</div>
    </div>
    <div id="test2" class="col s12" style="padding: 30px;">
    	<div class="col s1">
    		<i class="small material-icons" onclick="clickCate(1)">navigate_before</i>
    	</div>
    	<div class="group">
			<a href="/department/1"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">文學院</label></a>
			<a href="/department/2"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">理學院</label></a>
		</div>
		<div class="group">
			<a href="/department/3"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">工學院</label></a>
			<a href="/department/4"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">管理學院</label></a>
		</div>
		<div class="group">
			<a href="/department/5"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">資訊電機學院</label></a>
			<a href="/department/6"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">地球科學學院</label></a>
		</div>
		<div class="group">
			<a href="/department/7"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">客家學院</label></a>
			<a href="/department/8"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">生醫理工學院</label></a>
		</div>
	</div>
    <div id="test3" class="col s12" style="padding: 30px;">
    	<div class="col s1">
    		<i class="small material-icons" onclick="clickCate(1)">navigate_before</i>
    	</div>
    	<div class="group">
			<a href="/department/9"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">學術性</label></a>
			<a href="/department/10"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">康樂性</label></a>
		</div>
		<div class="group">
			<a href="/department/11"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">聯誼性</label></a>
			<a href="/department/12"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">服務性</label></a>
		</div>
		<div class="group">
			<a href="/department/13"><label class="waves-effect waves-light btn-large grey lighten-2 butSelect butGroup">系學會</label></a>
		</div>
    </div>
    <div id="test4" class="col s12" style="padding: 30px;">
    	<div class="col s1">
    		<i class="small material-icons" onclick="clickCate(1)">navigate_before</i>
    	</div>
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
				<button type="submit" class="waves-effect waves-light btn-large grey lighten-2 butSelect">確認上傳</button>
			</div>
		{!! Form::close()!!}
    </div>
</div>
@stop