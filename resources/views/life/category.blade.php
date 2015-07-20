@extends('layout')

@section('title','中大生活-類別')

@section('css')
<style>
h2{
	color:blue;
}
</style>
@stop

@section('content')
	<div class="row">
		<div class="col s4">
			<h2>{{$category}}</h2>
		</div>
		<div class="col s8">
			<ul>
				@foreach($introduces as $introduce)
					<li>
						<a href="{{url('life/'.$introduce->id)}}">
							{{$introduce->name}}
						</a>
					</li>
				@endforeach
			</ul>
		</div>	
	</div>	
@stop