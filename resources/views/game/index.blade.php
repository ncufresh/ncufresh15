@extends('layout')

@section('title', 'GAME')

@section('css')
@stop

@section('content')
<div id="gg" tabindex="0">
    <script type="text/javascript" src="{{ asset('js/game_js/game.js') }}"></script>
</div>


@stop

@section('js')
    <!--<script type="text/javascript" src="{{ asset('js/game_js/game.js') }}"></script>-->
@stop
