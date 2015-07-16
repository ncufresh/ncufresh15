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
    	    	<li class="tab col s3" style="display: none;"><a href="#test1" class="active" id="mainTrue">總覽</a></li>
    	    	<li class="tab col s3" style="display: none;"><a href="#test2" id="departmentTrue">修改系所</a></li>
    	    	<li class="tab col s3" style="display: none;"><a href="#test3" id="clubTrue">修改社團</a></li>
    	    	<li class="tab col s3"><a href="#test4">新增</a></li>
      		</ul>
    	</div><br>
    </div>
    @yield('main')
</div>
@stop