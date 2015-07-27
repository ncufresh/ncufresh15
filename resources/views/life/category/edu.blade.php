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
		background-image:url('/img/life/edu/.png');
		top:6%;
		left:6%;
		width:26%; 
	}
	#b1:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	/*#b1:hover{
		width:36%;
		left:1%;
		top:1%;
	}*/
	#b2{
		background-image:url('/img/life/edu/.png');
		top:3%;
		right:32%;
		width:31%; 
	}
	#b2:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	/*#b2:hover{
		width:41%;
		right:27%;
		top:-2%;
	}*/
	#b3{
		background-image:url('/img/life/edu/.png');
		top:8%;
		right:2%;
		width:28%; 
	}
	#b3:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	/*#b3:hover{
		width:38%;
		right:-3%;
		top:3%;
	}*/
	#b4{
		background-image:url('/img/life/edu/.png');
		top:27%;
		left:17%;
		width:23%; 
	}
	#b4:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	/*#b4:hover{
		width:33%;
		left:12%;
		top:22%;
	}*/
	#b5{
		background-image:url('/img/life/edu/.png');
		top:21%;
		right:25%;
		width:28%;
		height:30%; 
	}
	#b5:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	/*#b5:hover{
		width:38%;
		right:20%;
		top:16%;
	}*/
	#b6{
		background-image:url('/img/life/edu/.png');
		top:32%;
		right:1%;
		width:27%;
	}
	#b6:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	/*#b6:hover{
		width:37%;
		right:-4%;
		top:27%;
	}*/
	#b7{
		background-image:url('/img/life/edu/.png');
		top:40%;
		right:25%;
		width:26%; 
	}
	#b7:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	/*#b7:hover{
		top:35%;
		right:20%;
		width:36%;
	}*/
	#b8{
		background-image:url('/img/life/edu/.png');
		bottom:8%;
		left:1%;
		width:28%; 
	}
	#b8:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	/*#b8:hover{
		bottom:3%;
		left:-4%;
		width:38%;
	}*/
	#b9{
		background-image:url('/img/life/edu/.png');
		bottom:-5%;
		left:21%;
		width:28%;
	}
	#b9:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	/*#b9:hover{
		bottom:-10%;
		left:16%;
		width:38%;
	}*/
	#b10{
		background-image:url('/img/life/edu/.png');
	}
	#b10:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b11{
		background-image:url('/img/life/edu/.png');
	}
	#b11:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b12{
		background-image:url('/img/life/edu/.png');
	}
	#b12:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b13{
		background-image:url('/img/life/edu/.png');
	}
	#b13:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b14{
		background-image:url('/img/life/edu/.png');
	}
	#b14:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b15{
		background-image:url('/img/life/edu/.png');
	}
	#b15:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	#b16{
		background-image:url('/img/life/edu/.png');
	}
	#b16:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	iframe{
		width:100%;
		height:19%;
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