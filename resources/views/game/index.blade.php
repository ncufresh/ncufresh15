@extends('layout')

@section('title', 'GAME')

@section('css')
@stop

@section('content')
<div id="gg" tabindex="0">
    
</div>




@stop

@section('js')

<!--_img need upper than _main-->  
<script type="text/javascript" src="{{ asset('js/game_js/game_img.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/game_js/game_main.js') }}"></script>



<script type="text/javascript">
//hide the scroll
$(function() {
    var btn = $("#gg");

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
