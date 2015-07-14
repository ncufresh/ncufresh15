@extends('campus/sidebar')

@section('main')
<div class="card blue lighten-4">
	<div class="card-content">
		<span id="campus_title" class="card-title black-text">行政大樓</span>
		<p id="campus_content">
		@foreach ($introductions as $introduction)
			@if ($introduction->view_id == 0)
				{{ $introduction->introduction }}<br>
			@endif
		@endforeach
		</p>
	</div>
</div>
<form id="newform" method="post">
<div class="row col s12">
	<div class="input-field">
		<textarea id="introduction" class="materialize-textarea" name="introduction"></textarea>
		<label for="introduction">簡介</label>
		<input type="hidden" id="view_id" name="view_id" value="0">
		<button type="submit" class="btn waves-effect waves-light right" name="send">確認
			<i class="material-icons right">send</i>
		</button>
	</div>
</div>
</form>
@stop