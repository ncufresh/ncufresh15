@extends('campus/sidebar')

@section('main')
<div id="pictures">
	<img src="{{asset('img/campus/background.png')}}" id="campus">
	<!--@foreach($campus as $item)
		@if( isset($index) || (isset($cate)&&$item->view_id==$cate) )
			<a href="/campus/view/{{$item->id}}">
			<img src="{{asset('img/campus/'.$item->region.'.png')}}" id="{{$item->region}}" class="building"></a>
		@endif
	@endforeach-->
@for($i=1; $i<=11; $i++)
<img src="{{asset('img/campus/administration'.$i.'.png')}}" id="administration{{$i}}" class="building">
@endfor
@for($i=1; $i<=5; $i++)
<img src="{{asset('img/campus/department'.$i.'.png')}}" id="department{{$i}}" class="building">
@endfor
</div>
@stop