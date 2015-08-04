@extends('layout')

@section('title', '關於我們')
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
	<div>
		<a id="ceo" class="btn modal-trigger bt" href="#modal1"><img class="border" src="img/about/ceo-border.png"></a>
	</div>
	<div id="modal1" class="modal">
	    <div class="modal-content">
			<a class="close modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons" style="font-size: 40px;">clear</i></a>
			<h3>執行組</h3>
			<img style="margin-left: 10%; width: 80%;" src="/img/about/ceo-2.jpg">
			<p>&emsp;&emsp;統籌整個知訊網的相關事宜，與學校各單位、各系學會、社團、學生組織協調；招募知訊網工人、規劃進度、預算、指引整個網站的年度大方向，擔任各組之間溝通橋梁，協同身邊這群一起努力的夥伴，為新生製作最好的知訊網。
			</p>
	    </div>
		<div class="modal-footer">
		</div>
	</div>
	<div>
		<a id="plan" class="btn modal-trigger bt" href="#modal2"><img class="border" src="img/about/plan-border.png"></a>
	</div>
	<div id="modal2" class="modal">
	    <div class="modal-content">
			<a class="close modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons" style="font-size: 40px;">clear</i></a>
			<h3>企劃組</h3>
			<img style="margin-left: 10%; width: 80%;" src="/img/about/plan-2.jpg">
			<p>&emsp;&emsp;決定知訊網的風格、配置網頁版面、美工樣式、還有網站內容，與各組協調知訊網的設計企劃，再監督美工與程設組實作，並呈現出理想中的知訊網。
			</p>
	    </div>
		<div class="modal-footer">
		</div>
	</div>
	<div>
		<a id="hack" class="btn modal-trigger bt" href="#modal3"><img class="border" src="img/about/hack-border.png"></a>
	</div>
	<div id="modal3" class="modal">
	    <div class="modal-content">
			<a class="close modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons" style="font-size: 40px;">clear</i></a>
			<h3>程設組</h3>
			<img style="margin-left: 10%; width: 80%;" src="/img/about/hack-2.jpg">
			<p>&emsp;&emsp;負責架構網站、撰寫程式，將整個知訊網推動的幕後功臣；程設組運用程式碼編織而成的知訊網，將帶給新生最好的知訊網體驗。
			</p>
	    </div>
		<div class="modal-footer">
		</div>
	</div>
	<div>
		<a id="art" class="btn modal-trigger bt" href="#modal4"><img class="border" src="img/about/art-border.png"></a>
	</div>
	<div id="modal4" class="modal">
	    <div class="modal-content">
			<a class="close modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons" style="font-size: 40px;">clear</i></a>
			<h3>美工組</h3>
			<img style="margin-left: 10%; width: 80%;" src="/img/about/art-2.jpg">
			<p>&emsp;&emsp;知訊網上可見之處皆是出自於他們筆下，與企劃組合作設計網站頁面，美工組繪製網站的各個頁面、和許多精美的圖片，努力為新生繪出最有活力的知訊網。
			</p>
	    </div>
		<div class="modal-footer">
		</div>
	</div>
	<div>
		<a id="video" class="btn modal-trigger bt" href="#modal5"><img class="border" src="img/about/video-border.png"></a>
	</div>
	<div id="modal5" class="modal">
	    <div class="modal-content">
			<a class="close modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons" style="font-size: 40px;">clear</i></a>
			<h3>影音組</h3>
			<img style="margin-left: 10%; width: 80%;" src="/img/about/video-2.jpg">
			<p>&emsp;&emsp;剪輯影片、編寫劇本、拍攝相片；影音組主要負責知訊網的影片製作，自己擔當導演拍攝影片，讓新生搶先體驗大學生活的樂趣。
			</p>
	    </div>
		<div class="modal-footer">
		</div>
	</div>
</div>
<div id="bottom">
<p style="position: absolute; top: 0; left: 0;">&emsp;&emsp;為歡迎大學新鮮人，新生知訊網，主打各項貼心服務，從飲食、住宿、交通、教育、藝文等主題出發的生活資訊;「系所社團」引領新生進入學術殿堂並見識中大人多采多姿的社團活動；「Q&A」讓諮商中心成為學生的最佳依靠；「影片專區」工作團隊為此精心打造兩部影片，它的創作目的是希望能藉由互動的方式傳達觀念給大一新生；「個人專區」功能強大，還有可愛的魚會陪你聊天唷，與大考放榜同步上線。</p>
</div>
@stop
