@extends('layout')

@section('title', '系所社團')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/department/club.css') }}">
	<style type="text/css">
		#container {
            background-image: url('{{asset("img/department/background1.png")}}'), url('{{asset("img/department/backgrounddown.png")}}');
            background-position: left top, left top;
            background-size: 100% auto;
            background-repeat: no-repeat, repeat;
        }
	</style>
@stop
@section('js')
	<script type="text/javascript" src="{{ asset('js/department/departmentClub.js') }}"></script>
@stop

@section('content')
<div>
	<!--新增-->
	@permission('management')
	<div>
		<a class="waves-effect waves-light grey lighten-2 btn butSelect" href="/group/add">新增</a>
	</div>
	@endpermission
	<div class="col s1">
    	<i class="small material-icons" onclick="goBack()">navigate_before</i>
    </div>
@if($page === 1)
	<!--總攬-->
	<div class="row">
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">系所</span>
				</div>
				<div class="card-content">
					<p>Introduction</p>
				</div>
				<div class="card-action">
					<a href="/group/departments">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">社團</span>
				</div>
				<div class="card-content">
					<p>Introduction</p>
				</div>
				<div class="card-action">
					<a href="/group/clubs">More</a>
				</div>
			</div>
		</div>
	</div>
@elseif($page === 2)
    <!--系所-->
    <div class="row">
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">文學院</span>
				</div>
				<div class="card-action">
				<a href="/group/departments/1">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">理學院</span>
				</div>
				<div class="card-action">
				<a href="/group/departments/2">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">工學院</span>
				</div>
				<div class="card-action">
				<a href="/group/departments/3">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">管理學院</span>
				</div>
				<div class="card-action">
				<a href="/group/departments/4">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">資訊電機學院</span>
				</div>
				<div class="card-action">
				<a href="/group/departments/5">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">地球科學學院</span>
				</div>
				<div class="card-action">
				<a href="/group/departments/6">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">客家學院</span>
				</div>
				<div class="card-action">
				<a href="/group/departments/7">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">生醫理工學院</span>
				</div>
				<div class="card-action">
				<a href="/group/departments/8">More</a>
				</div>
			</div>
		</div>
	</div>
@elseif($page === 3)
	<!--社團-->
    <div class="row">
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">學術性</span>
				</div>
				<div class="card-action">
				<a href="/group/clubs/1">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">康樂性</span>
				</div>
				<div class="card-action">
				<a href="/group/clubs/2">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">聯誼性</span>
				</div>
				<div class="card-action">
				<a href="/group/clubs/3">More</a>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-image">
					<img src="{{asset('img/department/no56p10.jpg')}}">
					<span class="card-title">服務性</span>
				</div>
				<div class="card-action">
				<a href="/group/clubs/4">More</a>
				</div>
			</div>
		</div>
	</div>
@elseif($page === 4)
    <!--新增-->
    @permission('management')
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
    @endpermission
@elseif($page === 5)
    <!--顯示內容-->
	<div class="row">
		@foreach($list as $list)
		<div class="col s12 m6 l4">
			<div class="card">
				<div class="card-image">
					<img src="{{ asset('uploads/departments/'.$list->showPicture()) }}" style="max-height: 200px;">
					<span class="card-title">{{ $list->name }}</span>
				</div>
				<div class="card-action">
					<a href="show/{{ $list->id }}">Enter</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endif
</div>
@stop