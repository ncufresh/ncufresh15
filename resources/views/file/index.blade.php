@extends('layout')

@section('title', 'YOLO')
@section('css')
<style>
.card {
    overflow: unset;
}
</style>
@stop

@section('js')
<script>
$(document).ready(function(){
    $('ul.tabs').tabs();
    $("input:text").focus(function() { $(this).select(); } );
    $('.materialboxed').materialbox();
});
</script>
@stop

@section('content')
<div class="card-panel" style="margin:0;">
    <form action="{{url('file/store')}}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        {!! csrf_field() !!}
        <p>上傳檔案</p>
        <input type="file" name="fileName[]" multiple="multiple"/>
        <button class="waves-effect waves-light btn blue" type="submit">上傳</button>        
    </form>
</div>
<div>
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s6"><a class="active" href="#img-files">圖片</a></li>
                <li class="tab col s6"><a href="#files">文件</a></li>
            </ul>
        </div>
        <div id="img-files" class="col s12">
            @foreach($img_files as $file)
            <div class="col m4">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed" src="{{url('file/'.$file->url)}}" width="270" height="163"/>
                    </div>
                    <div class="card-action">
                        <span class="card-title grey-text text-darken-4">{{$file->name}}</span>
                        <div>
                            <input type="text" value="{{url('file/'.$file->url)}}"/>
                            <a href="{{url('file/'.$file->url)}}" class="blue-text">下載</a>
                            <a href="{{url('file/edit/'.$file->id)}}" class="blue-text">編輯</a>
                            <a href="{{url('file/delete/'.$file->id)}}" class="red-text">刪除</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div id="files" class="col s12">
            @foreach($files as $key => $file)
            <div class="col m4">
                <div class="card">
                    <div class="card-action center-align">
                        <i class="large material-icons">description</i>
                        <div class="card-title grey-text text-darken-4">
                            {{$file->name}}
                        </div>
                        <div>
                            <input type="text" value="{{url('file/'.$file->url)}}"/>
                            <a href="{{url('file/'.$file->url)}}" class="blue-text">下載</a>
                            <a href="{{url('file/edit/'.$file->id)}}" class="blue-text">編輯</a>
                            <a href="{{url('file/delete/'.$file->id)}}" class="red-text">刪除</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop
