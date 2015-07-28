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
		background-image: url("/img/life/food_background.png");
		background-size: 100% auto;
		background-repeat: no-repeat;
		position: relative;
	}
	#b:before{
		content:"";
		display:block;
		padding-top:120%;
	}
	/*.row{
		background-image: url("/img/life/food/food_new_background.png");
		background-size: 100% auto;
		background-repeat: no-repeat;
		position: relative;
	}
	.row:before{
		content:"";
		display:block;
		padding-top:120%;
	}*/
	#b1{
		background-image:url('/img/life/food/G14.png');
		top:6%;
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
		top:1%;
	}
	#b2{
		background-image:url('/img/life/food/9R.png');
		top:3%;
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
		top:-2%;
	}
	#b3{
		background-image:url('/img/life/food/7R.png');
		top:8%;
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
		top:3%;
	}
	#b4{
		background-image:url('/img/life/food/backhome.png');
		top:27%;
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
		top:22%;
	}
	#b5{
		background-image:url('/img/life/food/late_night.png');
		top:21%;
		right:25%;
		width:28%; 
	}
	#b5:before{
		content:"";
		display:block;
		padding-top:70%;
	}
	#b5:hover{
		width:38%;
		right:20%;
		top:16%;
	}
	#b6{
		background-image:url('/img/life/food/pancake.png');
		top:32%;
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
		top:27%;
	}
	#b7{
		background-image:url('/img/life/food/pine.png');
		top:40%;
		right:25%;
		width:26%; 
	}
	#b7:before{
		content:"";
		display:block;
		padding-top:80%;
	}
	#b7:hover{
		top:35%;
		right:20%;
		width:36%;
	}
	#b8{
		background-image:url('/img/life/food/crepe.png');
		bottom:20%;
		left:1%;
		width:28%;
	}
	#b8:before{
		content:"";
		display:block;
		padding-top:80%;
	}
	#b8:hover{
		bottom:15%;
		left:-4%;
		width:38%;
	}
	#b9{
		background-image:url('/img/life/food/cafe.png');
		bottom:8%;
		left:22%;
		width:28%;
	}
	#b9:before{
		content:"";
		display:block;
		padding-top:80%;
	}
	#b9:hover{
		bottom:3%;
		left:17%;
		width:38%;
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
	<div class="row">
		<div class="col s12 m4 l4">
			<h2>食</h2>
			<iframe width="180" height="200" src="https://www.youtube.com/embed/DlF-6DDZh3E" frameborder="0" allowfullscreen></iframe>
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