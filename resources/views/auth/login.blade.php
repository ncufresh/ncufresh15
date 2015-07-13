@extends('layout')

@section('title', 'YOLO')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/login.css') }}"  media="screen,projection"/>
@stop

@section('js')
<!--<script src=''></script> -->
@stop

@section('content')
<div id="login-form" class="row">
    <form class="col s12" action="/auth/login" method="post">
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
        <h2>Login</h2>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="input-field row">
            <i class="material-icons prefix">account_circle</i>
            <input id="input_account" type="email" class="validate" name="email">
            <label for="input_account">Account</label>
        </div>
        <div class="input-field row">
            <i class="material-icons prefix">vpn_key</i>
            <input id="input_password" type="password" class="validate" name="password">
            <label for="input_password">Password</label>
        </div>
        <div class="input-field row">
            <button class="btn waves-effect waves-light right indigo" type="submit">Login
                <i class="material-icons">send</i>
            </button>
        </div>
    </form>
</div>
@stop
