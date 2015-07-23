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
	<!--新增-->
	<div>
		<a class="waves-effect waves-light grey lighten-2 btn butSelect" href="/group/add">新增</a>
	</div>
	<div class="col s1">
    	<i class="small material-icons" onclick="goBack()">navigate_before</i>
    </div>
@if($page === 1)
	<!--總攬-->
    <div class="secPuzzle">
    	<div class="group row groupPuzzle">
			<a href="/group/departments">
	    		<div class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
	    			<i class="material-icons large">account_balance</i>
    				<label class="puzzle1Text">系所</label>
    			</div>
    		</a>
    		<a href="/group/clubs">
	    		<div class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
	    			<i class="material-icons large">supervisor_account</i>
    				<label class="puzzle1Text">社團</label>
    			</div>
    		</a>
		</div>
    </div>
@elseif($page === 2)
    <!--系所-->
    <div class="secPuzzle">
    	<div class="group row groupPuzzle">
			<a href="/group/departments/1">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">文學院</label>
				</div>
			</a>
			<a href="/group/departments/2">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">理學院</label>
				</div>
			</a>
			<a href="/group/departments/3">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">工學院</label>
				</div>
			</a>
			<a href="/group/departments/4">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">管理學院</label>
				</div>
			</a>
			<a href="/group/departments/5">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">資訊電機學院</label>
				</div>
			</a>
			<a href="/group/departments/6">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">地球科學學院</label>
				</div>
			</a>
			<a href="/group/departments/7">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">客家學院</label>
				</div>
			</a>
			<a href="/group/departments8">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">生醫理工學院</label>
				</div>
			</a>
		</div>
	</div>
@elseif($page === 3)
	<!--社團-->
    <div class="secPuzzle">
    	<div class="group row groupPuzzle">
			<a href="/group/clubs/1">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">學術性</label>
				</div>
			</a>
			<a href="/group/clubs/2">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">康樂性</label>
				</div>
			</a>
			<a href="/group/clubs/3">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">聯誼性</label>
				</div>
			</a>
			<a href="/group/clubs/4">
				<div  class="col s12 m12 l6 puzzle1 waves-effect waves-grey">
					<label class="puzzle1Text">服務性</label>
				</div>
			</a>
		</div>
    </div>
@elseif($page === 4)
    <!--新增-->
    <div>
    	{!! Form::open(array('url'=>'/group/new', 'method'=>'post', 'files' => true))!!}
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label>選擇類別</label>
			<div class="input-field col s12">
			    <select name="cateValue" style="display: block;">
			      	<option value="" disabled selected>社團</option>
			      	<option value="1">學術性</option>
			      	<option value="2">康樂性</option>
			      	<option value="3">聯誼性</option>
			      	<option value="4">服務性</option>
			      	<option value="" disabled selected>系所</option>
			      	<option value="5">文學院</option>
			      	<option value="6">理學院</option>
			      	<option value="7">工學院</option>
			      	<option value="8">管理學院</option>
			      	<option value="9">資訊電機學院</option>
			      	<option value="10">地球科學學院</option>
			      	<option value="11">客家學院</option>
			      	<option value="12">生醫理工學院</option>
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
      			<input name="fileName[]" id="file" type="file" class="validate" multiple="multiple" accept="image/*" onchange="getFileName(this.value)">
        			<label id="fileName" for="file">選擇圖片</label>
      			</div>
   			</div>
			<div>
				<button type="submit" class="waves-effect waves-light btn-large grey lighten-2 butSelect">確認</button>
			</div>
		{!! Form::close()!!}
    </div>
@elseif($page === 5)
    <!--顯示內容-->
    <div class="secPuzzle">
    	<div class="group row groupPuzzle">
       		@foreach($list as $list)
       		    <a href="show/{{ $list->id }}">
       		    	<div  class="col s12 m6 l3 puzzle2 waves-effect waves-grey">
       		    		<label class="puzzle2Text">{{ $list->name }}</label>
       		    	</div>
       		    </a>
       		@endforeach
       	</div>
    </div>
@endif
</div>
@stop