@extends('department\list')

@section('title', '系所社團')

@section('main')
<div>
	<div class="col s1">
    	<a href="/department"><i class="small material-icons">navigate_before</i></a>
    </div>
    <div id="test1" class="col s12" style="padding: 30px;">
    	@foreach($list as $list)
    	<div class="group">
            <input name="id" type="hidden" value="{{ $list->id }}">
			<a id="showModal" class="modal-trigger waves-effect waves-light btn-large grey lighten-2 butSelect butGroup" href="#show">{{ $list->name }}</a>
		</div>
        @endforeach
    	<div id="show" class="modal modal-fixed-footer">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-content fullContent">
                
            </div>
            <div class="modal-footer">
                <a class=" modal-action modal-close waves-effect waves-green btn-flat" id="finishBut">關閉</a>
                <button class="modal-action modal-close waves-effect waves-light btn-flat" id="completeBut">完成</button>
                <a class="waves-effect waves-light btn-flat" id="editBut">編輯</a>
                <a class="waves-effect waves-light btn-flat red">刪除</a>
            </div>
        </div>
	</div>
</div>
@stop