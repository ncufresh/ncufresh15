@extends('department\list')

@section('title', '系所社團')

@section('main')
<div>
	<div class="col s1">
    	<a href="/department"><i class="small material-icons">navigate_before</i></a>
    </div>
    <div id="test1" class="col s12" style="padding: 30px;">
    	@foreach($content as $content)
    	<div class="group">
			<a class="modal-trigger waves-effect waves-light btn-large grey lighten-2 butSelect butGroup" href="#show{{$content->id}}">{{ $content->name }}</a>
		</div>
    	<div id="show{{$content->id}}" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>{{ $content->name }}</h4>
                <p>{{ ($content->content) }}</p>
            </div>
            <div class="modal-footer">
                <button class="modal-action modal-close waves-effect waves-light btn-flat">關閉</button>
                <a class="waves-effect waves-light btn-flat">編輯</a>
                <a class="waves-effect waves-light btn-flat red">刪除</a>
            </div>
        </div>
		@endforeach
	</div>
</div>
@stop