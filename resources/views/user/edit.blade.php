@extends('layout')

@section('title', 'YOLO')
@section('css')
<style>
#test {
	height: 1000px;
}
</style>
@stop

@section('js')
<!--<script src=''></script> -->

@stop

@section('content')
<div id="edituser-form" class="row" style="padding: 0 10%;">
    <form class="col s12" action="{{url('user/update/'.$user->id)}}" method="post">
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
        <h2>修改使用者</h2>
        <div class="row input-field">
            <i class="material-icons prefix">account_circle</i>
            <input id="input_name" type="text" class="validate" name="name" value="{{Input::old('name')?Input::old('name'):$user->name}}">
            <label for="input_name">名稱</label>
        </div>
        <div class="row input-field">
            <i class="material-icons prefix">vpn_key</i>
            <input id="input_password" type="password" class="validate" name="password">
            <label for="input_password">密碼</label>
        </div>
        <div class="row input-field">
            <i class="material-icons prefix">vpn_key</i>
            <input id="input_password" type="password" class="validate" name="password_confirm">
            <label for="input_password">密碼確認</label>
        </div>
        <div class="row input-field">
            <i class="material-icons prefix">account_circle</i>
            <input id="input_student_id" type="text" class="validate" name="student_id" value="{{Input::old('student_id')?Input::old('student_id'):$user->student_id}}">
            <label for="input_student_id">學號</label>
        </div>
        <div class="row input-field">
            <i class="material-icons prefix">account_circle</i>
            <input id="input_department" type="text" class="validate" name="department">
            <label for="input_department">系所</label>
        </div>
        <div class="row input-field">
            <i class="material-icons prefix">account_circle</i>
            <input id="input_grade" type="text" class="validate" name="grade">
            <label for="input_grade">年級</label>
        </div>
        <div class="input-field row">
            <button class="btn waves-effect waves-light right indigo" type="submit">修改</button>
        </div>
    </form>
</div>
@stop
