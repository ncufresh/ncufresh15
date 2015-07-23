@extends('layout')

@section('title','中大生活-行')

@section('css')
<style>
	h2{
		color:blue;
	}
	#b{
		height: 100%;
		background-image: url("/img/life/traffic_background.png");
		background-size: 100% auto;
		background-repeat: no-repeat;
		position: relative;
	}

	.puzzle {
		position: absolute;
		background-size:100% auto;
		background-repeat:no-repeat;
		display:block;
		transition: all 0.5s;
	}
	#b1{
		background-image:url('/img/life/traffic/bus.png');
		top:1%;
		left:2%;
		width:35%;
		height:30%;
	}
	#b1:hover{
		width:45%;
		height:40%;
		left:-3%;
		top:-4%;
	}
	#b2{
		background-image:url('/img/life/traffic/school.png');
		top:2%;
		right:1%;
		width:59%;
		height:33%;
	}
	#b2:hover{
		width:69%;
		height:41%;
		right:-4%;
		top:-3%;
	}
	#b3{
		background-image:url('/img/life/traffic/train.png');
		top:22%;
		left:10%;
		width:26%;
		height:39%;	 
	}
	#b3:hover{
		width:30%;
		height:45%;
		left:5%;
		top:17%;
	}
	#b4{
		background-image:url('/img/life/traffic/THSR.png');
		bottom:11%;
		left:2%;
		width:32%;
		height:33%;
	}
	#b4:hover{
		width:42%;
		height:43%;
		bottom:6%;
		left:-3%;
	}
	
</style>
@stop

@section('content')
	<div class="row">
		<div class="col s12 m4 l4">
			<h2>住</h2>
		</div>
		<body>
			<div class="col s12 m8 l8" id="b">
				<a class="puzzle" href="{{ url('life/39') }}" id="b1"></a>
				<a class="puzzle" href="{{ url('life/42') }}" id="b2"></a>
				<a class="puzzle" href="{{ url('life/40') }}" id="b3"></a>
				<a class="puzzle" href="{{ url('life/41') }}" id="b4"></a>
				
			</div>
		</body>	
	</div>	
@stop