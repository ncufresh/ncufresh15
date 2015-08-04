@extends('layout')

@section('title','中大生活-行')

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
		background-image:url({{ asset('/img/life/traffic/traffic_background.png') }});
		background-size: 100% auto;
		background-repeat: no-repeat;
		position: relative;
		margin-top:13%;
	}
	#b:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b1{
		background-image:url({{ asset('/img/life/traffic/bus.png') }});
		top:-14%;
		left:-4%;
		width:35%;
	}
	#b1:before{
		content:"";
		display:block;
		padding-top:90%;
	}
	#b1:hover{
		width:45%;
		left:-9%;
		top:-19%;
	}
	#b2{
		background-image:url({{ asset('/img/life/traffic/school.png') }});
		top:-15%;
		right:1%;
		width:59%;
	}
	#b2:before{
		content:"";
		display:block;
		padding-top:62%;
	}
	#b2:hover{
		width:69%;
		right:-4%;
		top:-20%;
	}
	#b3{
		background-image:url({{ asset('/img/life/traffic/train.png') }});
		top:18%;
		left:5%;
		width:26%;	 
	}
	#b3:before{
		content:"";
		display:block;
		padding-top:150%;
	}
	#b3:hover{
		width:36%;
		left:0%;
		top:13%;
	}
	#b4{
		background-image:url({{ asset('/img/life/traffic/THSR.png') }});
		bottom:8%;
		left:-7%;
		width:32%;
	}
	#b4:before{
		content:"";
		display:block;
		padding-top:125%;
	}
	#b4:hover{
		width:42%;
		bottom:3%;
		left:-12%;
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
		content: "";
		display:block;
		padding-top: 2%;
	}
	iframe{
		width:112%;
		margin:2% auto;
	}
	@media only screen and (max-width:600px){
		#b{
			margin-top:9%;
		}
		#b1{
			left:-1%;
		}
		#b1:hover{
			left:-6%;
		}
		#b4{
			left:-2%;
		}
		#b4:hover{
			left:-7%;
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
			<img src="{{ url('/img/life/traffic/traffic_word.png') }}" id="word">
			<div id="video">
				<iframe height="250" src="https://www.youtube.com/embed/b7bGleYmFcA" frameborder="0" allowfullscreen></iframe>
			</div>	
		</div>
		<body>
			<div class="col s12 m6 l6" id="b">
				<a class="puzzle" href="{{ url('life/38') }}" id="b1"></a>
				<a class="puzzle" href="{{ url('life/41') }}" id="b2"></a>
				<a class="puzzle" href="{{ url('life/39') }}" id="b3"></a>
				<a class="puzzle" href="{{ url('life/40') }}" id="b4"></a>
			</div>
		</body>	
	</div>	
@stop