@extends('layout')

@section('title', 'register')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/login.css') }}"  media="screen,projection"/>
@stop

@section('js')
<!--<script src=''></script> -->
@stop

@section('content')
<div id="login-form" class="row">
    <form class="col s12" action="{{ url('/auth/register')}}" method="post">
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
        <h2>註冊</h2>
        <div class="input-field row">
            <i class="material-icons prefix">perm_identity</i>
            <input id="input_name" type="text" class="validate" name="name">
            <label for="input_name">姓名</label>
        </div>
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
            <i class="material-icons prefix">vpn_key</i>
            <input id="input_password_confirmation" type="password" class="validate" name="password_confirmation">
            <label for="input_password_confirmation">確認密碼</label>
        </div>
        <div class="input-field row">
            <i class="material-icons prefix">account_circle</i>
            <input id="input_student_id" type="text" class="validate" name="student_id">
            <label for="input_student_id">學號</label>
        </div>
        <div class="input-field row">
            <a href="{{url('auth/login')}}">已經有帳號嗎?點這裡登入</a>
            <button class="btn waves-effect waves-light right indigo" type="submit">註冊</button>
        </div>
    </form>
</div>
@stop
