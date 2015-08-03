@extends('layout')

@section('title','中大生活-育')

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
		background-image:url({{ asset('/img/life/edu/teach_background.png') }});
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
		background-image:url({{ asset('/img/life/edu/1.jpg') }});
		top:12%;
		left:7%;
		width:15%; 
	}
	#b1:before{
		content:"";
		display:block;
		padding-top:80%;
	}
	#b1:hover{
		width:16%;
		
	}
	#b2{
		background-image:url({{ asset('/img/life/edu/2.jpg') }});
		top:17%;
		left:30%;
		width:14%; 
	}
	#b2:before{
		content:"";
		display:block;
		padding-top:70%;
	}
	#b2:hover{
		width:15%;
	}
	#b3{
		background-image:url({{ asset('/img/life/edu/3.png') }});
		top:12%;
		right:32%;
		width:16%; 
	}
	#b3:before{
		content:"";
		display:block;
		padding-top:140%;
	}
	#b3:hover{
		width:17%;
	}
	#b4{
		background-image:url({{ asset('/img/life/edu/4.png') }});
		top:15%;
		right:10%;
		width:11%; 
	}
	#b4:before{
		content:"";
		display:block;
		padding-top:100%;
	}
	#b4:hover{
		width:12%;
	}
	#b5{
		background-image:url({{ asset('/img/life/edu/5.jpg') }});
		top:31%;
		left:7%;
		width:18%;
	}
	#b5:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b5:hover{
		width:19%;
	}
	#b6{
		background-image:url({{ asset('/img/life/edu/6.jpg') }});
		top:35%;
		left:31%;
		width:15%;
	}
	#b6:before{
		content:"";
		display:block;
		padding-top:70%;
	}
	#b6:hover{
		width:16%;
	}
	#b7{
		background-image:url({{ asset('/img/life/edu/7.jpg') }});
		top:30%;
		right:32%;
		width:16%; 
	}
	#b7:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b7:hover{
		width:17%;
	}
	#b8{
		background-image:url({{ asset('/img/life/edu/8.jpg') }});
		top:34%;
		right:8%;
		width:15%; 
	}
	#b8:before{
		content:"";
		display:block;
		padding-top:70%;
	}
	#b8:hover{
		width:16%;
	}
	#b9{
		background-image:url({{ asset('/img/life/edu/9.jpg') }});
		bottom:36%;
		left:8%;
		width:14%;
	}
	#b9:before{
		content:"";
		display:block;
		padding-top:90%;
	}
	#b9:hover{
		width:15%;
	}
	#b10{
		background-image:url({{ asset('/img/life/edu/10.jpg') }});
		width:8%;
		bottom:36%;
		left:35%;
	}
	#b10:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b10:hover{
		width:9%;
	}
	#b11{
		background-image:url({{ asset('/img/life/edu/11.jpg') }});
		width:19%;
		right:29%;
		bottom:37%;
	}
	#b11:before{
		content:"";
		display:block;
		padding-top:60%;
	}
	#b11:hover{
		width:20%;
	}
	#b12{
		background-image:url({{ asset('/img/life/edu/12.jpg') }}); 
		width:14%;
		right:7%;
		bottom:37%;
	}
	#b12:before{
		content:"";
		display:block;
		padding-top:100%;
	}
	#b12:hover{
		width:15%;
	}
	#b13{
		background-image:url({{ asset('/img/life/edu/13.png') }});
		width:12%;
		left:8%;
		bottom:17%;
	}
	#b13:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b13:hover{
		width:13%;
	}
	#b14{
		background-image:url({{ asset('/img/life/edu/14.jpg') }});
		width:23%;
		bottom:16%;
		left:27%;
	}
	#b14:before{
		content:"";
		display:block;
		padding-top:50%;
	}
	#b14:hover{
		width:24%;
	}
	#b15{
		background-image:url({{ asset('/img/life/edu/15.jpg') }});
		width:12%;
		right:33%;
		bottom:18%;
	}
	#b15:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b15:hover{
		width:13%;
	}
	#b16{
		background-image:url({{ asset('/img/life/edu/16.png') }});
		width:15%;
		bottom:14%;
		right:7%;
	}
	#b16:before{
		content:"";
		display:block;
		padding-top:100%;
	}
	#b16:hover{
		width:16%;
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
		position: relative;
	}
	#video:before{
		content: "";
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
			<img src="{{ url('/img/life/edu/teach__word.png') }}" id="word">
			<div id="video">
				<iframe height="250" src="https://www.youtube.com/embed/bUk4wPqR1Og" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<body>
			<div class="col s12 m6 l6" id="b">
				<a class="puzzle" href="{{ url('life/15') }}" id="b1"></a>
				<a class="puzzle" href="{{ url('life/21') }}" id="b2"></a>
				<a class="puzzle" href="{{ url('life/20') }}" id="b3"></a>
				<a class="puzzle" href="{{ url('life/29') }}" id="b4"></a>
				<a class="puzzle" href="{{ url('life/16') }}" id="b5"></a>
				<a class="puzzle" href="{{ url('life/28') }}" id="b6"></a>
				<a class="puzzle" href="{{ url('life/24') }}" id="b7"></a>
				<a class="puzzle" href="{{ url('life/22') }}" id="b8"></a>
				<a class="puzzle" href="{{ url('life/27') }}" id="b9"></a>
				<a class="puzzle" href="{{ url('life/19') }}" id="b10"></a>
				<a class="puzzle" href="{{ url('life/23') }}" id="b11"></a>
				<a class="puzzle" href="{{ url('life/26') }}" id="b12"></a>
				<a class="puzzle" href="{{ url('life/25') }}" id="b13"></a>
				<a class="puzzle" href="{{ url('life/17') }}" id="b14"></a>
				<a class="puzzle" href="{{ url('life/18') }}" id="b15"></a>
				<a class="puzzle" href="{{ url('life/30') }}" id="b16"></a>
			</div>
		</body>	
	</div>	
@stop