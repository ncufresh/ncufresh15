@extends('layout')

@section('title','中大生活-食')

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
		background-image:url({{ asset('/img/life/food/food_background.png') }});
		background-size: 100% auto;
		background-repeat: no-repeat;
		position: relative;
		margin-top:17%;
	}
	#b:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b1{
		background-image:url({{ asset('/img/life/food/G14.png') }});
		top:-9%;
		left:6%;
		width:26%; 
	}
	#b1:before{
		content:"";
		display:block;
		padding-top:100%;
	}
	#b1:hover{
		width:36%;
		left:1%;
		top:-14%;
	}
	#b2{
		background-image:url({{ asset('/img/life/food/9R.png') }});
		top:-13%;
		right:32%;
		width:31%; 
	}
	#b2:before{
		content:"";
		display:block;
		padding-top:70%;
	}
	#b2:hover{
		width:41%;
		right:27%;
		top:-18%;
	}
	#b3{
		background-image:url({{ asset('/img/life/food/7R.png') }});
		top:-5%;
		right:2%;
		width:28%;
	}
	#b3:before{
		content:"";
		display:block;
		padding-top:80%;
	}
	#b3:hover{
		width:38%;
		right:-3%;
		top:-8%;
	}
	#b4{
		background-image:url({{ asset('/img/life/food/backhome.png') }});
		top:14%;
		left:17%;
		width:23%; 
	}
	#b4:before{
		content:"";
		display:block;
		padding-top:100%;
	}
	#b4:hover{
		width:33%;
		left:12%;
		top:9%;
	}
	#b5{
		background-image:url({{ asset('/img/life/food/late_night.png') }});
		top:8%;
		right:29%;
		width:28%; 
	}
	#b5:before{
		content:"";
		display:block;
		padding-top:70%;
	}
	#b5:hover{
		width:38%;
		right:24%;
		top:3%;
	}
	#b6{
		background-image:url({{ asset('/img/life/food/pancake.png') }});
		top:22%;
		right:1%;
		width:27%; 
	}
	#b6:before{
		content:"";
		display:block;
		padding-top:70%;
	}
	#b6:hover{
		width:37%;
		right:-4%;
		top:17%;
	}
	#b7{
		background-image:url({{ asset('/img/life/food/pine.png') }});
		top:26%;
		right:29%;
		width:26%; 
	}
	#b7:before{
		content:"";
		display:block;
		padding-top:80%;
	}
	#b7:hover{
		top:21%;
		right:24%;
		width:36%;
	}
	#b8{
		background-image:url({{ asset('/img/life/food/crepe.png') }});
		bottom:25%;
		left:1%;
		width:28%;
	}
	#b8:before{
		content:"";
		display:block;
		padding-top:80%;
	}
	#b8:hover{
		bottom:20%;
		left:-4%;
		width:38%;
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
	@media only screen and (max-width:600px){
		#b{
			margin-top:9%;
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
			<img src="{{ url('/img/life/food/food_word.png') }}" id="word">
			<div id="video">
				<iframe height="250" src="https://www.youtube.com/embed/HRPXCxIs3os" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<body>
			<div class="col s12 m6 l6" id="b">
				<a class="puzzle" href="{{ url('life/8') }}" id="b1"></a>
				<a class="puzzle" href="{{ url('life/3') }}" id="b2"></a>
				<a class="puzzle" href="{{ url('life/4') }}" id="b3"></a>
				<a class="puzzle" href="{{ url('life/6') }}" id="b4"></a>
				<a class="puzzle" href="{{ url('life/5') }}" id="b5"></a>
				<a class="puzzle" href="{{ url('life/1') }}" id="b6"></a>
				<a class="puzzle" href="{{ url('life/7') }}" id="b7"></a>
				<a class="puzzle" href="{{ url('life/2') }}" id="b8"></a>
			</div>
		</body>	
	</div>	
@stop