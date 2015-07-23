@extends('layout')

@section('title','中大生活')

@section('css')
<style>
	h1 {
		color:blue;
		/*margin: 0px auto;*/
	}
	.puzzle{
		position: absolute;
		background-size:100% auto;
		background-repeat: no-repeat;
		display: block;
		transition:all 0.5s; 
	}
	#b{
		height: 80%;
		width: 80%;
		background-image:url("img/life/lifebackground.png");
		background-size:100% auto;
		background-repeat:no-repeat;
		position: relative; 
		margin: 0% auto;
	}
	#b1{
		background-image:url('img/life/live.png');
		top:-5%;
		left:-4%;
		width:30%;
		height:55%;
	}
	#b1:hover{
		width:36%;
		height:70%;
		left:-9%;
		top:-10%;
	}
	#b2{
		background-image:url('img/life/traffic.png');
		right:-4%;
		top:-5%;
		width:38%;
		height: 56%;
	}
	#b2:hover{
		width:46%;
		height:64%;
		right:-9%;
		top:-10%;
	}
	#b3{
		background-image:url('img/life/food.png');
		top:23%;
		right:30%; 
		height:62%;
		width:36%;
	}
	#b3:hover{
		width:44%;
		height:70%;
		right:23%;
		top:19%;
	}
	#b4{
		background-image:url('img/life/edu.png');
		bottom:-17%;
		left:-4%;
		width:30%;
		height: 60%;
	}
	#b4:hover{
		width:38%;
		height:69%;
		left:-9%;
		bottom:-20%;
	}
	#b5{
		background-image:url('img/life/play.png');
		bottom:-8%;
		right:-3%; 
		width:34%;
		height:51%;
	}
	#b5:hover{
		width:42%;
		height:60%;
		right:-8%;
		bottom:-11%;
	}
</style>
@stop

@section('content')
<div class="row">
	<div style="text-align:center;">
		<h1>中大生活</h1>
	</div><br>

	<body>
		<div id="b">
				<a class="puzzle" href="{{url('life/category/live')}}" id="b1"></a>	
				<a class="puzzle" href="{{url('life/category/traffic')}}" id="b2"></a>	
			 <!--第一層圖片-->
				<a class="puzzle" href="{{url('life/category/food')}}" id="b3"></a>	
			<!--第二層圖片-->
				<a class="puzzle" href="{{url('life/category/edu')}}" id="b4"></a>	
				<a class="puzzle" href="{{url('life/category/play')}}" id="b5"></a>	
			<!--第三層圖片-->
		</div>	
	</body>

</div>  
	

@stop