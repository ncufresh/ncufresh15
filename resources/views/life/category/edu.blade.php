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
		background-image: url("/img/life/edu_background.png");
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
		background-image:url('/img/life/edu/1.png');
		top:13%;
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
		background-image:url('/img/life/edu/2.png');
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
		background-image:url('/img/life/edu/3.png');
		top:13%;
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
		background-image:url('/img/life/edu/4.png');
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
		background-image:url('/img/life/edu/5.png');
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
		background-image:url('/img/life/edu/6.png');
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
		background-image:url('/img/life/edu/7.png');
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
		background-image:url('/img/life/edu/8.png');
		top:34%;
		right:9%;
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
		background-image:url('/img/life/edu/9.png');
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
		background-image:url('/img/life/edu/10.png');
		width:8%;
		bottom:37%;
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
		background-image:url('/img/life/edu/11.png');
		width:19%;
		right:29%;
		bottom:38%;
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
		background-image:url('/img/life/edu/12.png');
		width:14%;
		right:8%;
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
		background-image:url('/img/life/edu/13.png');
		width:12%;
		left:9%;
		bottom:19%;
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
		background-image:url('/img/life/edu/14.png');
		width:23%;
		bottom:18%;
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
		background-image:url('/img/life/edu/15.png');
		width:12%;
		right:33%;
		bottom:20%;
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
		background-image:url('/img/life/edu/16.png');
		width:15%;
		bottom:15%;
		right:9%;
	}
	#b16:before{
		content:"";
		display:block;
		padding-top:100%;
	}
	#b16:hover{
		width:16%;
	}
	iframe{
		width:100%;
		margin-top: 77%;
		margin:30% auto;
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
			<h2>育</h2>
			<iframe width="180" height="200" src="https://www.youtube.com/embed/bUk4wPqR1Og" frameborder="0" allowfullscreen></iframe>
		</div>
		<body>
			<div class="col s12 m8 l8" id="b">
				<a class="puzzle" href="{{ url('life/16') }}" id="b1"></a>
				<a class="puzzle" href="{{ url('life/22') }}" id="b2"></a>
				<a class="puzzle" href="{{ url('life/21') }}" id="b3"></a>
				<a class="puzzle" href="{{ url('life/30') }}" id="b4"></a>
				<a class="puzzle" href="{{ url('life/17') }}" id="b5"></a>
				<a class="puzzle" href="{{ url('life/29') }}" id="b6"></a>
				<a class="puzzle" href="{{ url('life/25') }}" id="b7"></a>
				<a class="puzzle" href="{{ url('life/23') }}" id="b8"></a>
				<a class="puzzle" href="{{ url('life/28') }}" id="b9"></a>
				<a class="puzzle" href="{{ url('life/20') }}" id="b10"></a>
				<a class="puzzle" href="{{ url('life/24') }}" id="b11"></a>
				<a class="puzzle" href="{{ url('life/27') }}" id="b12"></a>
				<a class="puzzle" href="{{ url('life/26') }}" id="b13"></a>
				<a class="puzzle" href="{{ url('life/18') }}" id="b14"></a>
				<a class="puzzle" href="{{ url('life/19') }}" id="b15"></a>
				<a class="puzzle" href="{{ url('life/31') }}" id="b16"></a>
			</div>
		</body>	
	</div>	
@stop