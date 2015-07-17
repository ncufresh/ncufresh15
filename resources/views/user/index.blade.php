@extends('layout')

@section('title', 'YOLO')
@section('css')
<style>
tbody>tr:hover {
    background-color: #f2f2f2;
}
</style>
@stop

@section('js')
<!--<script src=''></script> -->
@stop

@section('content')
<table>
    <thead>
        <tr>
            <th>帳號</th>
            <th>名稱</th>
            <th>學號</th>
            <th>系所</th>
            <th>年級</th>
            <th>權限</th>
            <th>創立時間</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->email}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->student_id}}</td>
                <td>{{$user->department}}</td>
                <td>{{$user->grade}}</td>
                <td>{{isset($user->getRoles()[0]) ? $user->getRoles()[0]->name : '9527'}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    <a class="waves-effect waves-light btn grey darken-3" href="{{url('user/edit/'.$user->id)}}">編輯</a>
                    <a class="waves-effect waves-light btn red" href="{{url('user/delete/'.$user->id)}}">刪除</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="center-align">
    @include('pagination.default', ['paginator' => $users])
</div>
@stop
