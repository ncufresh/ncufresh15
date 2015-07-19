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
{{$user->name}}
{{$user->email}}
{{$user->student_id}}
@stop
