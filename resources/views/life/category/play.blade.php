@extends('layout')

@section('title','中大生活-樂')

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
		background-image:url('/img/life/play/movie.png');
		top:11%;
		left:2%;
		width:30%;
	}
	#b1:before{
		content:"";
		display:block;
		padding-top:70%;
	}
	#b1:hover{
		width:40%;
		left:-3%;
		top:6%;
	}
	#b2{
		background-image:url('/img/life/play/night.png');
		top:2%;
		right:38%;
		width:27%; 
	}
	#b2:before{
		content:"";
		display:block;
		padding-top:100%;
	}
	#b2:hover{
		width:37%;
		right:33%;
		top:-3%;
	}
	#b3{
		background-image:url('/img/life/play/stone.png');
		top:18%;
		right:8%;
		width:30%;
	}
	#b3:before{
		content:"";
		display:block;
		padding-top:90%;
	}
	#b3:hover{
		width:40%;
		right:3%;
		top:13%;
	}
	#b4{
		background-image:url('/img/life/play/home.png');
		top:40%;
		left:2%;
		width:30%; 
	}
	#b4:before{
		content:"";
		display:block;
		padding-top:100%;
	}
	#b4:hover{
		width:40%;
		left:-3%;
		top:35%;
	}
	#b5{
		background-image:url('/img/life/play/KTV.png');
		bottom:25%;
		right:4%;
		width:26%;
	}
	#b5:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b5:hover{
		width:36%;
		right:-1%;
		bottom:20%;
	}
	#b6{
		background-image:url('/img/life/play/float.png');
		bottom:8%;
		left:14%;
		width:25%;
	}
	#b6:before{
		content:"";
		display:block;
		padding-top:130%;
	}
	#b6:hover{
		width:32%;
		left:9%;
		bottom:3%;
	}
	#b7{
		background-image:url('/img/life/play/NOVA.png');
		bottom:6%;
		right:20%;
		width:34%;
	}
	#b7:before{
		content:"";
		display:block;
		padding-top:80%;
	}
	#b7:hover{
		bottom:1%;
		right:15%;
		width:44%;
	}
	iframe{
		width:100%;
		margin:77% auto;
	}
	iframe:before{
		content:"";
		display:block;
		padding-top:50%;
	}
</style>
@stop

@section('content')
	<div class="row" style="background-color:rgb(241,237,237)">
		<div class="col s12 m6 l6">
			<iframe width="180" height="200" src="https://www.youtube.com/embed/eZFKf0C7UZ4" frameborder="0" allowfullscreen></iframe>
		</div>
		<body>
			<div class="col s12 m6 l6" id="b">
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