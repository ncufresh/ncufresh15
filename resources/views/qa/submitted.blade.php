@extends('layout')

@section('title', 'Q&amp;A')

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
    @if (Auth::check())
        <p class="center-align">你的問題我們已經收到了，將會回覆到<a href="{{url('user/'.Auth::user()->id)}}">個人專區</a>的瓶中信，並且整理過後張貼在Q&A。</p>
    @else
        <p class="center-align">你的問題我們已經收到了，將會回覆到個人專區的瓶中信，並且整理過後張貼在Q&A。</p>
    @endif
</div>
@stop
