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
    <form class="col s12" action="/qa/answer" method="post">
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
        <h2>新增Q&amp;A</h2>
        <div class="row">
            <div class="input-field col s3">
                <select name="category">
                    <option value="0">中大生活</option>
                    <option value="1">行政</option>
                    <option value="2">學務</option>
                    <option value="3">小遊戲</option>
                </select>
                <label>類別</label>
            </div>
            <div class="input-field col s9">
                <i class="material-icons prefix">account_circle</i>
                <input id="input_title" type="text" class="validate" name="title">
                <label for="input_title">標題</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="ans-content" class="materialize-textarea" name="content"></textarea>
                <label for="ans-content">內文</label>
            </div>
        </div>
        <div class="input-field row">
            <button class="btn waves-effect waves-light right indigo" type="submit">送出</button>
        </div>
    </form>
</div>
@stop
