@extends('campus/sidebar')

@section('main')
<div id="pictures">
	<img id="map" src="{{asset('img/campus/NCU_Campus.jpg')}}">
	<img id="small_map" src="{{asset('img/campus/map.jpg')}}">
	<img id="campus" src="{{asset('img/campus/tree.jpg')}}">
</div>
<div class="card blue lighten-4">
	<div class="card-content">
		<span id="campus_title" class="card-title black-text">行政大樓</span>
		<p id="campus_content">
			{{ $introduction }}
		</p>
	</div>
</div>
<form id="writeIntro" method="post">
<div class="row col s12">
	<div class="input-field">
		<textarea id="introduction" class="materialize-textarea" name="introduction"></textarea>
		<label id="label_intro" for="introduction">簡介</label>
		<input type="hidden" id="view_id" name="view_id" value="0">
		<span id="error"></span>
		<button type="submit" class="btn waves-effect waves-light right" name="send">確認
			<i class="material-icons right">send</i>
		</button>
	</div>
</div>
</form>
@stop