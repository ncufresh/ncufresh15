@extends('user.layout')

@section('title', '個人專區')
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

.creature {
    transition: top 5s ease-in-out, left 5s ease-in-out, transform .2s;
    display: inline-block;
    position: fixed;
    z-index: 100;
    background-size: 100% 100%;
}

#sand {
    background: linear-gradient(#C9BC9C, #B28247);
    left:0;
    bottom: 20px;
    width: 100%;
    height: 90px;
}

#sg1 {
    background-image: url('/img/home/sg1.png');
    left: 20%;
    bottom: 50px;
    width: 250px;
    height: 257px;
}

#sg2 {
    background-image: url('/img/home/sg2.png');
    right: 20px;
    bottom: 100px;
    width: 238px;
    height: 234px;
}

#shell {
    background-image: url('/img/home/shell.png');
    left: 40%;
    bottom: 30px;
    width: 250px;
    height: 197px;
}

#treasure {
    background-image: url('/img/home/treasure.png');
    right: 15%;
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
    background-size: cover;
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
}

.bg-item {
    background-size: 100% 100%;
	background-color: rgba(0,0,0,0.5);
	height: 100%;
}

#bg-tab>.row {
	height: 40%;
	margin-top: 10px;
}

#dec-tab > .row {
    height: 80%;
}

.dec-item {
	height: 100%;
    background-size: 80% auto;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
}

.dec-item:hover h5 {
    color: #fff;
}

#food1 {
    background-image: url('/img/home/food1.png');
}

.food1 {
  cursor: url('/img/home/food1.gif'), auto;
}

#food2 {
    background-image: url('/img/home/food2.png');
}

.food2 {
  cursor: url('/img/home/food2.gif'), auto;
}

#bg-alt {
    background-image: 
    @if ($background->bg1_1)
    url('/img/home/bg/alt_1.png'),
    @endif
    @if ($background->bg1_2)
    url('/img/home/bg/alt_2.png'),
    @endif
    @if ($background->bg1_3)
    url('/img/home/bg/alt_3.png'),
    @endif
    @if ($background->bg1_4)
    url('/img/home/bg/alt_4.png'),
    @endif
    url('/img/home/bg/alt_back.png')
    ;
}
#bg-f {
    background-image: 
    @if ($background->bg2_1)
    url('/img/home/bg/f_1.png'),
    @endif
    @if ($background->bg2_2)
    url('/img/home/bg/f_2.png'),
    @endif
    @if ($background->bg2_3)
    url('/img/home/bg/f_3.png'),
    @endif
    @if ($background->bg2_4)
    url('/img/home/bg/f_4.png'),
    @endif
    url('/img/home/bg/f_back.png')
    ;
}
#bg-g14 {
    background-image: 
    @if ($background->bg3_1)
    url('/img/home/bg/g14_1.png'),
    @endif
    @if ($background->bg3_2)
    url('/img/home/bg/g14_2.png'),
    @endif
    @if ($background->bg3_3)
    url('/img/home/bg/g14_3.png'),
    @endif
    @if ($background->bg3_4)
    url('/img/home/bg/g14_4.png'),
    @endif
    url('/img/home/bg/g14_back.png')
    ;
}
#bg-sea {
    background-image: 
    @if ($background->bg4_1)
    url('/img/home/bg/sea_1.png'),
    @endif
    @if ($background->bg4_2)
    url('/img/home/bg/sea_2.png'),
    @endif
    @if ($background->bg4_3)
    url('/img/home/bg/sea_3.png'),
    @endif
    @if ($background->bg4_4)
    url('/img/home/bg/sea_4.png'),
    @endif
    url('/img/home/bg/sea_back.png')
    ;
}
</style>
@stop

@section('js')
<script>
$(function() {
    $('.modal-trigger').leanModal();
    @if ($isHome)
	$('ul.tabs').tabs();
    $("#treasure").click(function(){
        $("#chest-wrapper").show();
    });
    $("#chest-wrapper").click(function(e){
        e.stopImmediatePropagation();
        e.preventDefault();
        if (e.target.id === "chest-wrapper"){
            $(this).fadeOut();
        }
    });
    @endif

    $('#wrapper').click(function() {
        $('body').removeClass('food1');
        $('body').removeClass('food2');
    });
    $('#food1').click(function() {
        $('body').removeClass('food2');
        $('body').addClass('food1');
        $('#chest-wrapper').hide();
    });
    $('#food2').click(function() {
        $('body').removeClass('food1');
        $('body').addClass('food2');
        $('#chest-wrapper').hide();
    });

    $('#bg-alt').click(function() {
        changeBackground(0);
    });
    $('#bg-f').click(function() {
        changeBackground(1);
    });
    $('#bg-g14').click(function() {
        changeBackground(2);
    });
    $('#bg-sea').click(function() {
        changeBackground(3);
    });
    function changeBackground(bg) {
        console.log('change to ' + bg);
        $.ajax({
            url: '/user/chbg/' + bg,
            type: 'GET',
            success: function(data) {
              if (data.result) {
                $('#wrapper').css({'background-image': 'url(/img/banner/'+data.newbg+'.jpg)'});
              }
            }
        }); 
    }
});
</script>
@if ($isHome)
<script src="/js/bottle.js"></script>
@endif
@stop

@section('content')
<input type="hidden" value="{{$user->id}}" id="user_id"/>
<!-- decorations -->
<div id="sand" class="item"></div>
@if ($decoration->sg1)
<div id="sg1" class="item"></div>
@endif
@if ($decoration->sg2)
<div id="sg2" class="item"></div>
@endif
@if ($decoration->shell)
<div id="shell" class="item"></div>
@endif
@if ($decoration->chest)
<div id="treasure" class="item"></div>
@endif

<div id="bottle"   class="item"></div>
<a id="information-btn" class="modal-trigger center-align" href="#modal-information">
    <i class="material-icons" style="color: #fff;">keyboard_arrow_up</i>
</a>
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
            @if ($isHome)
            <a class="btn waves-light waves-effect blue" href="{{url("user/edit")."/".$user->id}}">編輯個人資料</a>
            @endif
        </div>
        <a href="#!" class="right modal-action modal-close waves-effect waves-light btn-flat red" style="color:#fff;">
            <i class="material-icons">settings_power</i>
        </a>
    </div>
</div>
<div id="chest-wrapper">
	<div id="chest-modal">
		<div class="row">
			<div id="chest-tab-container" class="col s12">
				<ul class="tabs">
					<li class="tab col s3"><a class="active" href="#bg-tab">背景拼圖</a></li>
					<li class="tab col s3"><a href="#dec-tab">魚飼料</a></li>
					<li class="tab col s3"><a href="#letter-tab">收到的瓶中信</a></li>
				</ul>
			</div>
			<div id="bg-tab" class="col s12">
				<div class="row">
					<div class="col s12 m6 bg-padding"><div id="bg-alt" class="bg-item"></div></div>
					<div class="col s12 m6 bg-padding"><div id="bg-f" class="bg-item"></div></div>
				</div>
				<div class="row">
					<div class="col s12 m6 bg-padding"><div id="bg-g14" class="bg-item"></div></div>
					<div class="col s12 m6 bg-padding"><div id="bg-sea" class="bg-item"></div></div>
				</div>
			</div>
            <div id="dec-tab" class="col s12">
                <div class="row">
                    <div id="food1" class="col s4 offset-s1 dec-item">
                        <h5 class="center-align">成長飼料*{{$decoration->growth_food}}</h5>
                    </div>
                    <div id="food2" class="col s4 offset-s2 dec-item">
                        <h5 class="center-align">進化飼料*{{$decoration->level_food}}</h5>
                    </div>
                </div>
            </div>
            <div id="letter-tab" class="col s12" style="overflow: auto;height: 90%;">
                <ul class="collection">
                    @foreach ($bottles as $bottle)
                    <li class="collection-item">
                        {!! nl2br(e($bottle->content)) !!}
                    </li>
                    @endforeach
                </ul>
            </div>
		</div>
	</div>
</div>
<div id="c0" class="creature"></div>
<div id="c1" class="creature"></div>
<div id="c2" class="creature"></div>
<div id="c3" class="creature"></div>
@stop
