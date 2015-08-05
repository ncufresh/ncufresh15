@extends('layout')

@section('title', 'Q&amp;A-瓶中信回覆')

@section('css')
@stop

@section('js')
<!--<script src=''></script> -->
<script src='{{ asset('js/select.js') }}'></script>
@stop

@section('content')
<div id="answer-form" class="row" style="padding: 0 10%;">
    <form class="col s12" action="/bottle/pm/{{$user->id}}" method="post">
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
        <a href="{{url('qa/questions')}}" class="waves-effect waves-light btn">
            <i class="material-icons left">input</i>返回問題列表
        </a>
        <h5>瓶中信回覆</h5>
        <span>收件者：</span><a href="/user/{{$user->id}}">{{$user->name}}</a>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="ans-content" class="materialize-textarea" name="content" length="400"></textarea>
                <label for="ans-content">內容</label>
            </div>
        </div>
        <div class="input-field row">
            <button class="btn waves-effect waves-light right indigo" type="submit">送出</button>
        </div>
    </form>
</div>
@stop
