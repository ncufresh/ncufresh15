@extends('layout')

@section('title', '系所社團')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/department/club.css') }}">
    <style type="text/css">
        #container {
            background: url('{{asset("img/department/background.png")}}');
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }
        #content {
            margin-bottom: 120px;
            padding: 20px;
            min-height: 1000px;
            background: url('{{asset("img/department/white.png")}}');
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }
    </style>
@stop
@section('js')
    <script type="text/javascript" src="{{ asset('js/department/departmentClub.js') }}"></script>
@stop

@section('content')
<div>
    <div>
        @foreach($content as $content)
        @endforeach
        <!--新增-->
        @permission('management')
        <div>
            <a class="waves-effect waves-light grey lighten-2 btn butSelect" href="/group/add">新增</a>
            <a class="waves-effect waves-light grey lighten-2 btn butSelect" href="/group/edit/{{ $content->id }}">編輯</a>
        </div>
        @endpermission
        <div class="col s1">
            <i class="small material-icons" onclick="goBack()">navigate_before</i>
        </div>
    </div>
    <div class="container">
    @if($sect === 1)
        <div class="row">
            <div class="col s12 m12 l12">
                <h3>{{ $content->name }}</h3>
                <p>{!! nl2br(htmlentities($content->content)) !!}</p>
            </div>
            @if(count($pictures) != 0)
            <div id="slider-container" class="col s12 m12 l12">
                <div class="slider">
                    <ul class="slides">
                        @foreach($pictures as $picture)
                        <li>
                            <img src="{{ asset('uploads/departments/'.$picture->picName.'') }}">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
        </div>
    @elseif($sect === 2)
        @permission('management')
        {!! Form::open(array('url'=>'/group/update', 'method'=>'post', 'files' => true))!!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $content->id }}">
            <input type="hidden" name="originName" value="{{ $content->name }}">
            <div class="row">
                <div class="input-field col s12">
                    <input name="name" id="name" type="text" class="validate" value="{{ $content->name }}">
                    <label for="name">名稱</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="content" id="textarea1" class="materialize-textarea" length="600">{{ $content->content }}</textarea>
                    <label for="textarea1">內容</label>
                </div>
            </div>
            @foreach($picture as $picture)
            @if($picture != null)
            <div>
                <p>
                    <input name="deleteImage[]" type="checkbox" id="deleteImage{{ $picture->id }}" value="{{ $picture->picName }}">
                    <label for="deleteImage{{ $picture->id }}">刪除</label>
                </p>
            </div>
            <div>
                <img class="contentIamge" src="{{ asset('uploads/departments/'.$picture->picName.'') }}">
            </div><br>
            @endif
            @endforeach
            <div class="file-field input-field">
                <input class="file-path validate" type="text">
                <div>
                <input name="fileName[]" id="file" type="file" class="validate" multiple="multiple" accept="image/*" onchange="getFileName(this.value)">
                    <label id="fileName" for="file">選擇圖片</label>
                </div>
            </div>
            <div>
                <button type="submit" class="waves-effect waves-light btn-large grey lighten-2 butSelect">送出</button>
            </div>
        {!! Form::close()!!}
        @endpermission
    @endif
    </div>
</div>
@stop