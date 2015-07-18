@extends('layout')

@section('title', 'QAQ')

@section('css')
@stop

@section('js')
@stop

@section('content')
<div id="answer-form" class="row" style="padding: 0 10%;">
    <a href="{{url('qa')}}" class="center-align waves-effect waves-light btn">
        <i class="material-icons left">input</i>返回Q&amp;A
    </a>
    <h3 class="center-align"><i class="large material-icons">done</i></h3>
    <h3 class="center-align">問題提交成功</h3>
    <p class="center-align">你的問題我們已經收到了，整理過後會回覆在Q&amp;A。</p>
</div>
@stop
