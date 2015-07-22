@extends('layout')

@section('title', 'YOLO')
@section('css')
@stop

@section('js')
@stop

@section('content')
<div class="card-panel row">
    <div class="col m12 l6">
        @if ($file->is_img)
            <img src="{{url('file/'.$file->url)}}" width="100%"/>
        @endif
    </div>
    <div class="col m12 l6">
        <form action="{{url('file/update/'.$file->id)}}" method="POST">
            {!! csrf_field() !!}
            <span>檔案名稱</span>
            <input type="text" name="name" value="{{$file->name}}"/>
            <button class="waves-effect waves-light btn blue right" type="submit">修改</button>
        </form>
    </div>
</div>
@stop
