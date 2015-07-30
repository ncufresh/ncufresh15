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
		background-image:url('/img/life/live/live_background.png');
		background-size: 59% auto;
		background-repeat: no-repeat;
		position: relative;
		margin-top:19%;
		left:7%;
	}
	#b:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b1{
		background-image:url('/img/life/live/G4.png');
		top:-24%;
		left:-12%;
		width:30%;
	}
	#b1:before{
		content:"";
		display:block;
		padding-top:90%;
	}
	#b1:hover{
		width:40%;
		left:-17%;
		top:-29%;
	}
	#b2{
		background-image:url('/img/life/live/G1.png');
		top:-21%;
		right:29%;
		width:30%;
	}
	#b2:before{
		content:"";
		display:block;
		padding-top:80%;
	}
	#b2:hover{
		width:40%;
		right:24%;
		top:-26%;
	}
	#b3{
		background-image:url('/img/life/live/B9.png');
		top:19%;
		left:-21%;
		width:21%; 
	}
	#b3:before{
		content:"";
		display:block;
		padding-top:153%;
	}
	#b3:hover{
		width:31%;
		left:-26%;
		top:16%;
	}
	#b4{
		background-image:url('/img/life/live/B7.png');
		top:19%;
		right:15%;
		width:25%;
	}
	#b4:before{
		content:"";
		display:block;
		padding-top:110%;
	}
	#b4:hover{
		width:35%;
		right:10%;
		top:15%;
	}
	#b5{
		background-image:url('/img/life/live/B11.png');
		bottom:21%;
		left:-9%;
		width:35%;
	}
	#b5:before{
		content:"";
		display:block;
		padding-top:60%;
	}
	#b5:hover{
		width:45%;
		left:-14%;
		bottom:16%;
	}
	#b6{
		background-image:url('/img/life/live/B3.png');
		bottom:21%;
		right:28%;
		width:30%;
	}
	#b6:before{
		content:"";
		display:block;
		padding-top:92%;
	}
	#b6:hover{
		width:40%;
		right:23%;
		bottom:16%;
	}
	#word{
		width:78%;
		padding-top:6%;
	}
	#word:before{
		content:"";
		display:block;
		padding-top:100%;
	}
	#video{
		width:80%;
		position:relative;
	}
	#video:before{
		content:"";
		display:block;
		padding-top:2%;
	}
	iframe{
		width:112%;
		margin:2% auto;
	}
	@media only screen and (max-width: 600px){
		#b{
			background-image:url('/img/life/live/live_background.png');
			background-size: 60% auto;
			background-repeat: no-repeat;
			position: relative;
			margin-top:19%;
			left:19%;
		}
		iframe{
			width:120%;
			height:250px;
			margin:15% auto;
		}

	}
</style>
@stop

@section('content')
	<div class="row" style="background-color:rgb(214,237,237)">
		<div class="col s12 m6 l6">
			<img src="{{ url('/img/life/live/live_word.png') }}" id="word" >
			<div id="video">
				<iframe height="250" src="https://www.youtube.com/embed/bUk4wPqR1Og" frameborder="0" allowfullscreen></iframe>
			</div>	
		</div>
		<body>
			<div class="col s12 m6 l6" id="b">
				<a class="puzzle" href="{{ url('life/14') }}" id="b1"></a>
				<a class="puzzle" href="{{ url('life/13') }}" id="b2"></a>
				<a class="puzzle" href="{{ url('life/11') }}" id="b3"></a>
				<a class="puzzle" href="{{ url('life/10') }}" id="b4"></a>
				<a class="puzzle" href="{{ url('life/12') }}" id="b5"></a>
				<a class="puzzle" href="{{ url('life/9') }}" id="b6"></a>
			</div>
		</body>	
	</div>	
@stop