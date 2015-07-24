@extends('user.layout')

@section('title', 'YOLO')
@section('css')
<style>
.menu-btn {
    color: #fff;
}
.menu-btn i {
    font-size: 2.5em;
}

.item {
    background-size: 100% auto;
    background-repeat: no-repeat;
    position: fixed;
}

#treasure {
    background-image: url('/img/home/treasure.png');
    right: 20px;
    bottom: 20px;
    width: 200px;
    height: 200px;
}

#bottle {
    background-image: url('/img/home/bottle.png');
    left: 20px;
    bottom: 20px;
    width: 200px;
    height: 140px;
}
#information-btn {
    display: block;
    background-color: black;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 20px;
}

#avatar {
    width: 190px;
    height: 190px;
    float: left;
    background-size: 100% auto;
}
#detail {
    float: left;
    padding-left: 30px;
}

.modal-content {
    color: #fff;
    overflow: auto;
}
</style>
@stop

@section('js')
<script>
$(function() {
    $('.modal-trigger').leanModal();
});
</script>
@stop

@section('content')
<div id="bottle"   class="item"></div>
<div id="treasure" class="item"></div>
<a id="information-btn" class="modal-trigger" href="#modal-information"></a>
<!-- Modal Structure -->
<div id="modal-information" class="modal bottom-sheet">
    <div class="modal-content grey darken-4">
        <div id="avatar" style="background-image:url('https://scontent.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10982689_937546332932137_8667259228873020363_n.jpg?oh=0b8372e406050943e6b8c9305f7e9d1b&oe=56467A42');">
        </div>
        <div id="detail">
            <h4>{{$user->name}}</h4>
            <p>請投我一票</p>
            <a class="btn waves-light waves-effect blue">Vote</a>
        </div>
        <a href="#!" class="right modal-action modal-close waves-effect waves-light btn-flat red" style="color:#fff;">
            <i class="material-icons">settings_power</i>
        </a>
    </div>
</div>
@stop
