@extends('layout')

@section('title', 'QAQ')

@section('css')
@stop

@section('js')
<!--<script src=''></script> -->
<script src='{{ asset('js/select.js') }}'></script>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    $(function() {
        CKEDITOR.replace('ans-content');
    });
</script>
@stop

@section('content')
<div id="answer-form" class="row" style="padding: 0 10%;">
    <a href="{{url('qa/questions')}}" class="waves-effect waves-light btn">
        <i class="material-icons left">input</i>返回問題列表
    </a>
    <form class="col s12" action="{{isset($answer)?action('QaController@update', $answer->id):url('qa/answer')}}" method="post">
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
        @if (isset($answer))
            <h2>編輯Q&amp;A</h2>
        @else
            <h2>新增Q&amp;A</h2>
        @endif
        <div class="row">
            <div class="input-field col s3">
                <select name="category">
                    <option value="0" {{isset($answer)&&$answer->category==0?'selected="selected"':''}}>中大生活</option>
                    <option value="1" {{isset($answer)&&$answer->category==1?'selected="selected"':''}}>行政</option>
                    <option value="2" {{isset($answer)&&$answer->category==2?'selected="selected"':''}}>學務</option>
                    <option value="3" {{isset($answer)&&$answer->category==3?'selected="selected"':''}}>小遊戲</option>
                </select>
                <label>類別</label>
            </div>
            <div class="input-field col s9">
                <i class="material-icons prefix" style="font-size:1">account_circle</i>
                <input id="input_title" type="text" class="validate" name="title" value="{{isset($answer)?$answer->title:''}}">
                <label for="input_title">標題</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <textarea id="ans-content" name="content">{{isset($answer)?$answer->content:''}}</textarea>
            </div>
        </div>
        <div class="input-field row">
            <button class="btn waves-effect waves-light right indigo" type="submit">送出</button>
        </div>
    </form>
</div>
@stop
