@extends('layout')

@section('title','中大生活-育')

@section('css')
<style>
	h2{
		color:blue;
	}
	#b{
		height: 100%;
		background-image: url("/img/life/edu_background.png");
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
		background-image:url('/img/life/food/G14.png');
		top:6%;
		left:6%;
		width:26%;
		height:30%; 
	}
	/*#b1:hover{
		width:36%;
		height:40%;
		left:1%;
		top:1%;
	}*/
	#b2{
		background-image:url('/img/life/food/9R.png');
		top:3%;
		right:32%;
		width:31%;
		height:30%; 
	}
	/*#b2:hover{
		width:41%;
		height:40%;
		right:27%;
		top:-2%;
	}*/
	#b3{
		background-image:url('/img/life/food/7R.png');
		top:8%;
		right:2%;
		width:28%;
		height:30%; 
	}
	/*#b3:hover{
		width:38%;
		height:40%;
		right:-3%;
		top:3%;
	}*/
	#b4{
		background-image:url('/img/life/food/backhome.png');
		top:27%;
		left:17%;
		width:23%;
		height:30%; 
	}
	/*#b4:hover{
		width:33%;
		height:40%;
		left:12%;
		top:22%;
	}*/
	#b5{
		background-image:url('/img/life/food/late_night.png');
		top:21%;
		right:25%;
		width:28%;
		height:30%; 
	}
	/*#b5:hover{
		width:38%;
		height:40%;
		right:20%;
		top:16%;
	}*/
	#b6{
		background-image:url('/img/life/food/pancake.png');
		top:32%;
		right:1%;
		width:27%;
		height:30%; 
	}
	/*#b6:hover{
		width:37%;
		height:40%;
		right:-4%;
		top:27%;
	}*/
	#b7{
		background-image:url('/img/life/food/pine.png');
		top:40%;
		right:25%;
		width:26%;
		height:30%; 
	}
	/*#b7:hover{
		top:35%;
		right:20%;
		width:36%;
		height:40%; 
	}*/
	#b8{
		background-image:url('/img/life/food/crepe.png');
		bottom:8%;
		left:1%;
		width:28%;
		height:30%; 
	}
	/*#b8:hover{
		bottom:3%;
		left:-4%;
		width:38%;
		height:40%;
	}*/
	#b9{
		background-image:url('/img/life/food/cafe.png');
		bottom:-5%;
		left:21%;
		width:28%;
		height:30%; 
	}
	/*#b9:hover{
		bottom:-10%;
		left:16%;
		width:38%;
		height:40%;
	}*/
</style>
@stop

@section('content')
	<div class="row">
		<div class="col s12 m4 l4">
			<h2>育</h2>
		</div>
		<body>
			<div class="col s12 m8 l8" id="b">
				<a class="puzzle" href="{{ url('life/8') }}" id="b1"></a>
				<a class="puzzle" href="{{ url('life/3') }}" id="b2"></a>
				<a class="puzzle" href="{{ url('life/4') }}" id="b3"></a>
				<a class="puzzle" href="{{ url('life/6') }}" id="b4"></a>
				<a class="puzzle" href="{{ url('life/5') }}" id="b5"></a>
				<a class="puzzle" href="{{ url('life/1') }}" id="b6"></a>
				<a class="puzzle" href="{{ url('life/7') }}" id="b7"></a>
				<a class="puzzle" href="{{ url('life/2') }}" id="b8"></a>
				<a class="puzzle" href="{{ url('life/9') }}" id="b9"></a>
			</div>
		</body>	
	</div>	
@stop