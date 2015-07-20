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
		<div class="row">
			<div class="col s4">
				<a href="{{url('life/category/food')}}">
					<img src="/css/life/main.png" width="300" height="300">
				</a>	
			</div> 		
			<div class="col s4 offset-s4">
				<a href="{{url('life/category/traffic')}}">
					<img src="/css/life/main.png" width="300" height="300" usemap="#p3">	
				</a>	
			</div>
		</div> <!--第一層圖片-->

		<div class="row">
			<div class="col s4 offset-s4">
				<a href="{{url('life/category/live')}}">
					<img src="/css/life/main.png" width="300" height="300" usemap="#p5">	
				</a>	
			</div>
		</div><!--第二層圖片-->

		<div class="row">
			<div class="col s4">
				<a href="{{url('life/category/edu')}}">
					<img src="/css/life/main.png" width="300" height="300" usemap="#p7">	
				</a>	
			</div>		
			<div class="col s4 offset-s4">
				<a href="{{url('life/category/play')}}">
					<img src="/css/life/main.png" width="300" height="300" usemap="#p9">
				</a>	
			</div>
		</div><!--第三層圖片-->
	</body>

</div>  
	

@stop