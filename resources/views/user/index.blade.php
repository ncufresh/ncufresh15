@extends('layout')

@section('title', '使用者列表')
@section('css')
<style>
tbody>tr:hover {
    background-color: #f2f2f2;
    cursor: pointer;
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
            @role('admin')
                <th>權限</th>
                <th>創立時間</th>
                <th>操作</th>
            @endrole
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr onclick="document.location='{{url('user/'.$user->id)}}';">
                <td>{{$user->email}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->student_id}}</td>
                @role('admin')
                    <td>{{isset($user->getRoles()[0]) ? $user->getRoles()[0]->name : '9527'}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <a class="waves-effect waves-light btn grey darken-3" href="{{url('user/edit/'.$user->id)}}">編輯</a>
                        <a class="waves-effect waves-light btn red" href="{{url('user/delete/'.$user->id)}}">刪除</a>
                    </td>
                @endrole
            </tr>
        @endforeach
    </tbody>
</table>
<div class="center-align">
    @include('pagination.default', ['paginator' => $users])
</div>
@stop
