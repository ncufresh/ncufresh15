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
    display: none;
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
    border-radius: 50%;
    border: 5px solid #555;
}
#detail {
    float: left;
    padding-left: 30px;
	max-width: 70%;
}

.modal-content.grey {
    color: #fff;
    overflow: auto;
}
#next-btn {
    display: none;
}
#chest-modal {
	background: url("/img/chest_background.png");
	background-size: 100% 100%;
    height: 78%;
    max-height: 78%;
	margin-top: 5%;
    margin-left: 15%;
    width: 70%;
}
#chest-wrapper {
	position: fixed;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.5);
	display: none;
	top: 0;
	left: 0;
	z-index: 1500;
}

#chest-tab-container {
	padding: 0;
}

.bg-padding {
	padding: 15px;
	height: 100%;
	max-width: 500px;
}

.bg-item {
	background-color: rgba(0,0,0,0.5);
	height: 100%;
}

#bg-tab>.row {
	height: 40%;
	margin-top: 10px;
}
</style>
@stop

@section('js')
<script>
$(function() {
    $('.modal-trigger').leanModal();
	$('ul.tabs').tabs();
});
$("#chest-trigger").click(function(){
	$("#chest-wrapper").show();
});
$("#chest-wrapper").click(function(e){
	e.stopImmediatePropagation();
	e.preventDefault();
	if (e.target.id === "chest-wrapper"){
		$(this).hide();
	}
});
</script>
@if ($isHome)
<script src="/js/bottle.js"></script>
@endif
@stop

@section('content')
<div id="bottle"   class="item"></div>
<div id="treasure" class="item"></div>
<a id="information-btn" class="modal-trigger" href="#modal-information"></a>
<!-- Modal Structure -->
<div id="question-modal" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4 id="question-head">請先回答問題</h4>
        <p id="question-body">A bunch of text</p>
        <div id="question-options">
        </div>
        <button id="choose-btn" class="btn waves-effect waves-light disabled">
            <i class="material-icons left">thumb_up</i>
            就決定是你了
        </button>
        <button id="next-btn" class="btn waves-effect waves-light">
            <i class="material-icons left">play_arrow</i>
            下一題
        </button>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
</div>
<div id="write-modal" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>寫些什麼吧</h4>
        <div class="input-field col s12">
          <textarea id="textarea-content" class="materialize-textarea"></textarea>
          <label for="textarea-content">Textarea</label>
        </div>
        <button id="write-btn" class="btn waves-effect waves-light">
            <i class="material-icons left">play_arrow</i>
            送出
        </button>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
</div>
<div id="modal-information" class="modal bottom-sheet">
    <div class="modal-content grey darken-4">
		@if (isset($user->avatar))
			<div id="avatar" style="background-image:url('{{asset("avatar/".$user->avatar)}}');"></div>
		@else
			<div id="avatar" class="default-avatar" style="background-image:url('{{asset("img/default-user-image.png")}}');"></div>
		@endif
        <div id="detail">
            <h4>{{$user->name}}</h4>
            <p>&nbsp;{!!nl2br(e($user->quote))!!}</p>
            <a class="btn waves-light waves-effect blue" href="{{url("user/edit")."/".$user->id}}">Edit Profile</a>
        </div>
        <a href="#!" class="right modal-action modal-close waves-effect waves-light btn-flat red" style="color:#fff;">
            <i class="material-icons">settings_power</i>
        </a>
    </div>
</div>
<a id="chest-trigger" class="waves-effect waves-light btn ">Chest</a>
<div id="chest-wrapper">
	<div id="chest-modal">
		<div class="row">
			<div id="chest-tab-container" class="col s12">
				<ul class="tabs">
					<li class="tab col s3"><a class="active" href="#bg-tab">T</a></li>
					<li class="tab col s3"><a href="#dec-tab">Test 2</a></li>
					<li class="tab col s3"><a href="#letter-tab">Test 4</a></li>
				</ul>
			</div>
			<div id="bg-tab" class="col s12">
				<div class="row">
					<div class="col s12 m6 bg-padding"><div class="bg-item"></div></div>
					<div class="col s12 m6 bg-padding"><div class="bg-item"></div></div>
				</div>
				<div class="row">
					<div class="col s12 m6 bg-padding"><div class="bg-item"></div></div>
					<div class="col s12 m6 bg-padding"><div class="bg-item"></div></div>
				</div>
			</div>
			<div id="dec-tab" class="col s12">Test 2</div>
			<div id="letter-tab" class="col s12">Test 4</div>
		</div>
	</div>
</div>
@stop
