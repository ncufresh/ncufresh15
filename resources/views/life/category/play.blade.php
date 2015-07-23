@extends('layout')

@section('title','中大生活-樂')

@section('css')
<style>
	h2{
		color:blue;
	}
	#b{
		height: 100%;
		background-image: url("/img/life/play_background.png");
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
		background-image:url('/img/life/play/movie.png');
		top:11%;
		left:2%;
		width:30%;
		height:30%; 
	}
	#b1:hover{
		width:40%;
		height:40%;
		left:-3%;
		top:6%;
	}
	#b2{
		background-image:url('/img/life/play/night.png');
		top:2%;
		right:38%;
		width:27%;
		height:30%; 
	}
	#b2:hover{
		width:37%;
		height:40%;
		right:33%;
		top:-3%;
	}
	#b3{
		background-image:url('/img/life/play/stone.png');
		top:18%;
		right:8%;
		width:30%;
		height:30%; 
	}
	#b3:hover{
		width:40%;
		height:40%;
		right:3%;
		top:13%;
	}
	#b4{
		background-image:url('/img/life/play/home.png');
		top:40%;
		left:2%;
		width:30%;
		height:30%; 
	}
	#b4:hover{
		width:40%;
		height:40%;
		left:-3%;
		top:35%;
	}
	#b5{
		background-image:url('/img/life/play/KTV.png');
		bottom:22%;
		right:4%;
		width:26%;
		height:30%; 
	}
	#b5:hover{
		width:36%;
		height:40%;
		right:-1%;
		bottom:17%;
	}
	#b6{
		background-image:url('/img/life/play/float.png');
		bottom:5%;
		left:14%;
		width:25%;
		height:30%; 
	}
	#b6:hover{
		width:32%;
		height:38%;
		left:9%;
		bottom:0%;
	}
	#b7{
		background-image:url('/img/life/play/NOVA.png');
		bottom:1%;
		right:20%;
		width:34%;
		height:30%; 
	}
	#b7:hover{
		bottom:-4%;
		right:15%;
		width:44%;
		height:40%; 
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
				<a class="puzzle" href="{{ url('life/32') }}" id="b1"></a>
				<a class="puzzle" href="{{ url('life/34') }}" id="b2"></a>
				<a class="puzzle" href="{{ url('life/35') }}" id="b3"></a>
				<a class="puzzle" href="{{ url('life/38') }}" id="b4"></a>
				<a class="puzzle" href="{{ url('life/33') }}" id="b5"></a>
				<a class="puzzle" href="{{ url('life/36') }}" id="b6"></a>
				<a class="puzzle" href="{{ url('life/37') }}" id="b7"></a>
			</div>
		</body>	
	</div>	
@stop