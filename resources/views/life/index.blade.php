@extends('layout')

@section('title','中大生活')

@section('css')
<style>
h1 {
	color:blue;
	/*margin: 0px auto;*/
}
</style>
@stop

@section('content')
<div class="row">
	<div class="col center-align" style="width:15%">	
		<a href="/" style="font-size:150%">首頁</a>
	</div>
	<div class="col center-align" style="width:15%">
		<a href="/life" style="font-size:150%">中大生活</a>
	</div><br>
	<div style="text-align:center;">
		<h1>中大生活</h1>
	</div><br>

	<body>
		<div style="text-align:center;">
			<img src="/css/life/210690924.jpg" width="500" height="700" usemap="#pic">
			<map name="pic">
				<area shape="circle" coords="250,125,100" href="http://www.cinemablend.com/images/facebook/news/68524/68524.jpg">
			</map>
		</div><br>
		
		<div class="col s4">
			<img src="/css/life/main.png" width="300" height="300" usemap="#p1">
			<map name="p1">
				<area shape="rect" coords="0,0,300,300" href="{{url('lifefood')}}">
			</map>
		</div> 		
		<div class="col s4">
			<img src="/css/life/main.png" width="300" height="300" usemap="#p2">
		</div>
		<div class="col s4">
			<img src="/css/life/main.png" width="300" height="300" usemap="#p3">	
			<map name="p3">
				<area shape="rect" coords="0,0,300,300" href="{{url('lifetransport')}}">
			</map>
		</div><br> <!--第一層圖片-->

		<div class="col s4">
			<img src="/css/life/main.png" width="300" height="300" usemap="#p4">
		</div>		
		<div class="col s4">
			<img src="/css/life/main.png" width="300" height="300" usemap="#p5">
			<map name="p5">
				<area shape="rect" coords="0,0,300,300" href="{{url('lifelive')}}">
			</map>	
		</div>
		<div class="col s4">
			<img src="/css/life/main.png" width="300" height="300" usemap="#p6">	
		</div><br><!--第二層圖片-->

		<div class="col s4">
			<img src="/css/life/main.png" width="300" height="300" usemap="#p7">	
			<map name="p7">
				<area shape="rect" coords="0,0,300,300" href="{{url('lifeeducation')}}">
			</map>
		</div>		
		<div class="col s4">
			<img src="/css/life/main.png" width="300" height="300" usemap="#p8">	
		</div>
		<div class="col s4">
			<img src="/css/life/main.png" width="300" height="300" usemap="#p9">
			<map name="p9">
				<area shape="rect" coords="0,0,300,300" href="{{url('lifeplay')}}">
			</map>
		</div><br><!--第三層圖片-->
	</body>

</div>  
	

@stop