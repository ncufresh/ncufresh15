@extends('layout')

@section('title', '鳏蘛捰们')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/about.css')}}" />
@stop
@section('js')
<!--<script src=''></script> -->
<script>
$(document).ready(function(){
	$('.modal-trigger').leanModal();
});
</script>

@stop

@section('content')
<div id="top">
</div>
@stop
