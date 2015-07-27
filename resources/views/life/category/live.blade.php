@extends('layout')

@section('title','中大生活-住')

@section('css')
<style>
	h2{
		color:blue;
	}
	.puzzle {
		position: absolute;
		background-size:100% auto;
		background-repeat:no-repeat;
		display:block;
		transition: all 0.5s;
	}
	#b{
		background-image: url("/img/life/livebackground.png");
		background-size: 100% auto;
		background-repeat: no-repeat;
		position: relative;
	}
	#b:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b1{
		background-image:url('/img/life/live/G4.png');
		top:1%;
		left:2%;
		width:30%;
	}
	#b1:before{
		content:"";
		display:block;
		padding-top:90%;
	}
	#b1:hover{
		width:40%;
		left:-3%;
		top:-4%;
	}
	#b2{
		background-image:url('/img/life/live/G1.png');
		top:2%;
		right:15%;
		width:30%;
	}
	#b2:before{
		content:"";
		display:block;
		padding-top:80%;
	}
	#b2:hover{
		width:40%;
		right:10%;
		top:-3%;
	}
	#b3{
		background-image:url('/img/life/live/B9.png');
		top:34%;
		left:-1%;
		width:21%; 
	}
	#b3:before{
		content:"";
		display:block;
		padding-top:150%;
	}
	#b3:hover{
		width:31%;
		left:-6%;
		top:29%;
	}
	#b4{
		background-image:url('/img/life/live/B7.png');
		top:34%;
		right:-1%;
		width:25%;
	}
	#b4:before{
		content:"";
		display:block;
		padding-top:110%;
	}
	#b4:hover{
		width:35%;
		right:-6%;
		top:29%;
	}
	#b5{
		background-image:url('/img/life/live/B11.png');
		bottom:12%;
		left:4%;
		width:35%;
	}
	#b5:before{
		content:"";
		display:block;
		padding-top:60%;
	}
	#b5:hover{
		width:45%;
		left:-1%;
		bottom:7%;
	}
	#b6{
		background-image:url('/img/life/live/B3.png');
		bottom:10%;
		right:8%;
		width:30%;
	}
	#b6:before{
		content:"";
		display:block;
		padding-top:90%;
	}
	#b6:hover{
		width:40%;
		right:3%;
		bottom:5%;
	}
	iframe{
		width:100%;
		margin:30% auto;
		margin-top:77%;
	}
	iframe:before{
		content:"";
		display:block;
		padding-top:50%;
	}
</style>
@stop

@section('content')
	<div class="row">
		<div class="col s12 m4 l4">
			<h2>住</h2>
			<iframe width="180" height="200" src="https://www.youtube.com/embed/bUk4wPqR1Og" frameborder="0" allowfullscreen></iframe>
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