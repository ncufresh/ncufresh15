@extends('layout')

@section('title', 'home')

@section('css')
@stop

@section('js')
<!--<script src=''></script> -->
@stop

@section('content')
content home
{{{ Auth::user()->name }}}
@stop
