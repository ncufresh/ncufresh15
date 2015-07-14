@extends('layout')

@section('title', '校園導覽')

@section('css')
<meta name="_token" content="{{ csrf_token() }}">
<link href="{{ asset('css/campus/style.css') }}" rel="stylesheet">
@stop

@section('js')
<script src="{{ asset('js/campus/renew.js') }}"></script>
@stop

@section('content')
<div class="row">
<ul class="collapsible col s3" data-collapsible="accordion">
	<li>
		<div class="collapsible-header">行政</div>
		<div class="collapsible-body collection">
			<a class="collection-item" id="0">行政大樓</a>
			<a class="collection-item" id="1">總圖書館</a>
			<a class="collection-item" id="2">舊圖/學務處</a>
			<a class="collection-item" id="3">志希館(電算中心)</a>
			<a class="collection-item" id="4">國鼎圖書資料館</a>
			<a class="collection-item" id="5">綜教館(語言中心)</a>
			<a class="collection-item" id="6">校史館</a>
			<a class="collection-item" id="7">大講堂</a>
			<a class="collection-item" id="8">據德樓</a>
			<a class="collection-item" id="9">游藝館</a>
			<a class="collection-item" id="10">藝文中心</a>
			<a class="collection-item" id="11">志道樓</a>
			<a class="collection-item" id="12">中央大學郵局</a>
		</div>
	</li>
	<li>
		<div class="collapsible-header">系館</div>
		<div class="collapsible-body collection">
			<a class="collection-item" id="13">文學一館</a>
			<a class="collection-item" id="14">文學二館</a>
			<a class="collection-item" id="15">工程一館</a>
			<a class="collection-item" id="16">工程二館</a>
			<a class="collection-item" id="17">工程三館</a>
			<a class="collection-item" id="18">工程四館</a>
			<a class="collection-item" id="19">工程五館</a>
			<a class="collection-item" id="20">科學一館</a>
			<a class="collection-item" id="21">科學二館</a>
			<a class="collection-item" id="22">科學三館</a>
			<a class="collection-item" id="23">科學四館(健雄館)</a>
			<a class="collection-item" id="24">科學五館</a>
			<a class="collection-item" id="25">人文社會科學大樓(黑盒子)</a>
			<a class="collection-item" id="26">客家學院大樓</a>
			<a class="collection-item" id="27">國鼎光電大樓</a>
			<a class="collection-item" id="28">管理二館</a>
			<a class="collection-item" id="29">鴻經館</a>
		</div>
	</li>
	<li>
		<div class="collapsible-header">中大十景</div>
		<div class="collapsible-body collection">
			<a class="collection-item" id="30">中大路上</a>
			<a class="collection-item" id="31">筆墨紙硯</a>
			<a class="collection-item" id="32">情人步道</a>
			<a class="collection-item" id="33">綠草如茵</a>
			<a class="collection-item" id="34">太極銅雕</a>
			<a class="collection-item" id="35">烏龜池畔</a>
			<a class="collection-item" id="36">中大湖景</a>
			<a class="collection-item" id="37">百花川語</a>
			<a class="collection-item" id="38">松濤書閣</a>
			<a class="collection-item" id="39">女舍廣場</a>
		</div>
	</li>
	<li>
		<div class="collapsible-header">運動</div>
		<div class="collapsible-body collection">
			<a class="collection-item" id="40">溜冰場</a>
			<a class="collection-item" id="41">羽球館</a>
			<a class="collection-item" id="42">網球館</a>
			<a class="collection-item" id="43">田徑場</a>
			<a class="collection-item" id="44">攀岩場</a>
			<a class="collection-item" id="45">排球場</a>
			<a class="collection-item" id="46">籃球場</a>
			<a class="collection-item" id="47">室內游泳池</a>
		</div>
	</li>
	<li>
		<div class="collapsible-header">飲食</div>
		<div class="collapsible-body collection">
			<a class="collection-item">七舍餐廳</a>
			<a class="collection-item">九舍餐廳</a>
			<a class="collection-item">松苑餐廳</a>
			<a class="collection-item">小木屋</a>
			<a class="collection-item">校園café</a>
			<a class="collection-item">女14地下廣場</a>
		</div>
	</li>
	<li>
		<div class="collapsible-header">住宿</div>
		<div class="collapsible-body collection">
			<a class="collection-item">國際學生宿舍</a>
			<a class="collection-item">研究生宿舍</a>
			<a class="collection-item">中大會館</a>
			<a class="collection-item">男三舍</a>
			<a class="collection-item">男五舍</a>
			<a class="collection-item">男六舍</a>
			<a class="collection-item">男七舍</a>
			<a class="collection-item">男九舍</a>
			<a class="collection-item">男十一舍</a>
			<a class="collection-item">男十二舍</a>
			<a class="collection-item">男十三舍</a>
			<a class="collection-item">女一～四舍</a>
			<a class="collection-item">女五舍</a>
			<a class="collection-item">女十四舍</a>
		</div>
	</li>
</ul>
<div class="container col s9">
@yield('main')
</div>
</div>
@stop