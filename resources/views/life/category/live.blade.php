@extends('layout')

@section('title','中大生活-住')

@section('css')
<style>
	h2{
		color:blue;
	}
	#b{
		height: 100%;
		background-image: url("/img/life/livebackground.png");
		background-size: 100% auto;
		background-repeat: no-repeat;
		position: relative;
	}

	.puzzle {
		position: absolute;
		background-size:100% auto;
		background-repeat:no-repeat;
		width:30%;
		height:30%;
		display:block;
		transition: all 0.5s;
	}
	#b1{
		background-image:url('/img/life/live/G4.png');
		top:1%;
		left:2%;
	}
	#b1:hover{
		width:40%;
		height: 40%;
		left:-3%;
		top:-4%;
	}
	#b2{
		background-image:url('/img/life/live/G1.png');
		top:2%;
		right:1%;
	}
	#b2:hover{
		width:40%;
		height: 40%;
		right:-4%;
		top:-3%;
	}
	#b3{
		background-image:url('/img/life/live/B9.png');
		top:34%;
		left:-1%;
		width:21%; 
	}
	#b3:hover{
		width:31%;
		height: 44%;
		left:-6%;
		top:29%;
	}
	#b4{
		background-image:url('/img/life/live/B7.png');
		top:34%;
		right:-1%;
		width:25%;
	}
	#b4:hover{
		width:35%;
		height:44%;
		right:-6%;
		top:29%;
	}
	#b5{
		background-image:url('/img/life/live/B11.png');
		bottom:-3%;
		left:2%;
		width:35%;
	}
	#b5:hover{
		width:45%;
		height: 40%;
		left:-5%;
		bottom:-15%;
	}
	#b6{
		background-image:url('/img/life/live/B3.png');
		bottom:2%;
		right:4%;
	}
	#b6:hover{
		width:40%;
		height: 40%;
		right:-4%;
		bottom:-5%;
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
				<a class="puzzle" href="{{ url('life/15') }}" id="b1"></a>
				<a class="puzzle" href="{{ url('life/14') }}" id="b2"></a>
				<a class="puzzle" href="{{ url('life/12') }}" id="b3"></a>
				<a class="puzzle" href="{{ url('life/11') }}" id="b4"></a>
				<a class="puzzle" href="{{ url('life/13') }}" id="b5"></a>
				<a class="puzzle" href="{{ url('life/10') }}" id="b6"></a>
			</div>
		</body>	
	</div>	
@stop