@extends('layout')

@section('title', 'login')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/login.css') }}"  media="screen,projection"/>
@stop

@section('js')
<!--<script src=''></script> -->
@stop

@section('content')
<div id="login-form" class="row">
    <form class="col s12" action="{{ url('/auth/login')}}" method="post">
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
        <h2>登入</h2>
        <div class="input-field row">
            <i class="material-icons prefix">account_circle</i>
            <input id="input_account" type="email" class="validate" name="email">
            <label for="input_account">電子郵件</label>
        </div>
        <div class="input-field row">
            <i class="material-icons prefix">vpn_key</i>
            <input id="input_password" type="password" class="validate" name="password">
            <label for="input_password">密碼</label>
        </div>
        <div class="input-field row">
            <a href="{{url('auth/register')}}">還沒有帳號嗎?點這裡註冊</a>
            <button class="btn waves-effect waves-light right indigo" type="submit">登入</button>
        </div>
    </form>
</div>
@stop
