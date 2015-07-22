@extends('layout')

@section('title', 'GAME')

@section('css')

<style>
    body{ background-color: ivory; }
    canvas{border:1px solid red;}
</style>

@stop

@section('content')
<div id="gamecanvas" tabindex="0">
    
</div>

@stop

@section('js')

<!--everyone need upper than _main-->  
<script type="text/javascript" src="{{ asset('js/game_js/game_img.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_move.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_draw.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_animation.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_quiz.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_main.js') }}"></script>


<script type="text/javascript">
//hide the scroll
$(function() {
    var btn = $("#gamecanvas");

    btn.focus(function(){
        console.log("Click");
        document.body.style.overflow="hidden";
    });

    btn.blur(function(){
        console.log("UnClick");
        document.body.style.overflow="scroll";
    });

});
</script>

@stop
