@extends('campus/sidebar')

@section('main')
<div id="pictures">
	<img src="{{asset('img/campus/background.png')}}" id="campus">
	<img src="{{asset('img/campus/circle.png')}}" id="circle">
	<img src="{{asset('img/campus/working.png')}}" id="working">
	<img src="{{asset('img/campus/baseball.png')}}" id="baseball">
	<img src="{{asset('img/campus/hotel.png')}}" id="hotel">

	@foreach($campus as $item)
		@if( isset($index) || (isset($cate)&&$item->view_id==$cate) )
			@if($item->region=='sport7')
				<div id="volleyball">
					<a href="/campus/view/{{$item->id}}">
					<img src="{{asset('img/campus/'.$item->region.'-1.png')}}" id="{{$item->region}}-1" class="building"></a>
					<a href="/campus/view/{{$item->id}}">
					<img src="{{asset('img/campus/'.$item->region.'-2.png')}}" id="{{$item->region}}-2" class="building"></a>
				</div>
			@elseif($item->region=='sport8')
				<div id="basketball">
					<a href="/campus/view/{{$item->id}}">
					<img src="{{asset('img/campus/'.$item->region.'.png')}}" id="{{$item->region}}-1" class="building"></a>
					<a href="/campus/view/{{$item->id}}">
					<img src="{{asset('img/campus/'.$item->region.'.png')}}" id="{{$item->region}}-2" class="building"></a>
				</div>
			@else
				<a href="/campus/view/{{$item->id}}">
				<img src="{{asset('img/campus/'.$item->region.'.png')}}" id="{{$item->region}}" class="building"></a>
			@endif
		@endif
	@endforeach
<!--@for($i=1; $i<=11; $i++)
<img src="{{asset('img/campus/administration'.$i.'.png')}}" id="administration{{$i}}" class="building">
@endfor

@for($i=1; $i<=16; $i++)
<img src="{{asset('img/campus/department'.$i.'.png')}}" id="department{{$i}}" class="building">
@endfor

@for($i=1; $i<=7; $i++)
<img src="{{asset('img/campus/view'.$i.'.png')}}" id="view{{$i}}" class="building">
@endfor

@for($i=1; $i<=9; $i++)
@if($i==7)
<div id="volleyball">
	<img src="{{asset('img/campus/sport'.$i.'-1.png')}}" id="sport{{$i}}-1" class="building">
	<img src="{{asset('img/campus/sport'.$i.'-2.png')}}" id="sport{{$i}}-2" class="building">
</div>
@elseif($i==8)
<div id="basketball">
	<img src="{{asset('img/campus/sport'.$i.'.png')}}" id="sport{{$i}}-1" class="building">
	<img src="{{asset('img/campus/sport'.$i.'.png')}}" id="sport{{$i}}-2" class="building">
</div>
@else
<img src="{{asset('img/campus/sport'.$i.'.png')}}" id="sport{{$i}}" class="building">
@endif
@endfor

@for($i=1; $i<=7; $i++)
<img src="{{asset('img/campus/food'.$i.'.png')}}" id="food{{$i}}" class="building">
@endfor

@for($i=1; $i<=13; $i++)
<img src="{{asset('img/campus/live'.$i.'.png')}}" id="live{{$i}}" class="building">
@endfor-->

</div>
@stop