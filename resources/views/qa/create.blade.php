@extends('layout')

@section('title', 'QAQ')

@section('css')
@stop

@section('js')
<!--<script src=''></script> -->
<script src='{{ asset('js/select.js') }}'></script>
@stop

@section('content')
<div id="answer-form" class="row" style="padding: 0 10%;">
    <form class="col s12" action="/qa/create" method="post">
        {!! csrf_field() !!}
        @if (count($errors) > 0)
            <div id="error-msg" class="card-panel red">
                <i class="material-icons right close-btn" onclick="$('#error-msg').fadeOut();">close</i>
                <ul style="margin:0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        <a href="{{url('qa')}}" class="waves-effect waves-light btn">
            <i class="material-icons left">input</i>返回Q&amp;A
        </a>
        @if ($type == "qa")
            <h2>我要發問</h2>
        @else
            <h2>問題回報</h2>
        @endif
        <div class="row">
            @if ($type == "qa")
            <div class="input-field col s3">
                <select name="category">
                    <option value="0">中大生活</option>
                    <option value="1">行政</option>
                    <option value="2">學務</option>
                    <option value="3">小遊戲</option>
                </select>
                <label>類別</label>
            </div>
            @else
                <input type="hidden" name="category" value="4">
            @endif
            <div class="input-field col {{$type == "qa" ? "s9" : "s12"}}">
                <i class="material-icons prefix">account_circle</i>
                <input id="input_title" type="text" class="validate" name="title" value="{{Input::old('title')}}">
                <label for="input_title">標題</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="ans-content" class="materialize-textarea" name="content"></textarea>
                <label for="ans-content">問題描述</label>
            </div>
        </div>
        <div class="input-field row">
            <button class="btn waves-effect waves-light right indigo" type="submit">送出</button>
        </div>
    </form>
</div>
@stop
