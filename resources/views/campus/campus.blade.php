@extends('campus/sidebar')

@section('main')
<div id="pictures">
	<img src="{{asset('img/campus/background.png')}}" id="campus">
	<img src="{{asset('img/campus/circle.png')}}" id="circle" class="tooltipped" data-position="top" data-delay="50" data-tooltip="中大圓環">
	@if(isset($index))
		<img src="{{asset('img/campus/working.png')}}" id="working" class="tooltipped" data-position="top" data-delay="50" data-tooltip="施工中...">
		<img src="{{asset('img/campus/baseball.png')}}" id="baseball" class="tooltipped" data-position="top" data-delay="50" data-tooltip="棒球場">
		<img src="{{asset('img/campus/hotel.png')}}" id="hotel" class="tooltipped" data-position="top" data-delay="50" data-tooltip="中大會館">
	@endif

	@foreach($campus as $item)
		@if( isset($index) || (isset($cate)&&$item->view_id==$cate) )
			@if($item->region=='sport7')
				<div id="volleyball">
					<a href="/campus/view/{{$item->id}}">
					<img src="{{asset('img/campus/'.$item->region.'-1.png')}}" id="{{$item->region}}-1" class="building tooltipped" data-position="top" data-delay="50" data-tooltip="{{$item->title}}"></a>
					<a href="/campus/view/{{$item->id}}">
					<img src="{{asset('img/campus/'.$item->region.'-2.png')}}" id="{{$item->region}}-2" class="building tooltipped" data-position="top" data-delay="50" data-tooltip="{{$item->title}}"></a>
				</div>
			@elseif($item->region=='sport8')
				<div id="basketball">
					<a href="/campus/view/{{$item->id}}">
					<img src="{{asset('img/campus/'.$item->region.'.png')}}" id="{{$item->region}}-1" class="building tooltipped" data-position="top" data-delay="50" data-tooltip="{{$item->title}}"></a>
					<a href="/campus/view/{{$item->id}}">
					<img src="{{asset('img/campus/'.$item->region.'.png')}}" id="{{$item->region}}-2" class="building tooltipped" data-position="top" data-delay="50" data-tooltip="{{$item->title}}"></a>
				</div>
			@else
				<a href="/campus/view/{{$item->id}}">
				<img src="{{asset('img/campus/'.$item->region.'.png')}}" id="{{$item->region}}" class="building tooltipped" data-position="top" data-delay="50" data-tooltip="{{$item->title}}"></a>
			@endif
		@endif
	@endforeach
</div>
@stop