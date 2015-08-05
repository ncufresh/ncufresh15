@extends('layout')

@section('title', '小遊戲')

@section('css')

<style>
    #gamecanvas{
        margin: 0px auto;
        outline: none;
        width: 640;
        height: 512;
    }
    canvas{
        border:5px solid black;
    }
</style>

@stop

@section('content')
<div id="gamecanvas" tabindex="0">
    
</div>
@stop

@section('js')

<!--everyone need upper than _main-->  
<script type="text/javascript" src="{{ asset('js/game_js/game_move.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_animation.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_img.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_map.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_draw.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_quiz.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_main.js') }}"></script>


<script type="text/javascript">
var id = <?php echo $userid; ?>;
//hide the scroll
$(function() {
    var btn = $("#gamecanvas");

    btn.focus(function(){
        //document.body.style.overflow="hidden";
        document.body.style.overflowY = "hidden";
    });

    btn.blur(function(){
        //document.body.style.overflow="scroll";
        document.body.style.overflowY = "scroll";
    });

});
</script>

@stop
