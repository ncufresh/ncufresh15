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
	<div>
		<a id="ceo" class="btn modal-trigger" href="#modal1"><img style="position: relative; height: 100%; left: -30px;" src="https://lh6.googleusercontent.com/ZN3H8-oOYAFnDlgwaOyC24sOTEVx7Pt9jczadHSqUp-WWdAVHE0ff55P6DJl4NzPEVgBFw=w1342-h523"></a>
	</div>
	<div id="modal1" class="modal">
	    <div class="modal-content">
			<a class="close modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">clear</i></a>
			<h3>執行組</h3>
			<div class="divider"></div>
			<p>統籌整個知訊網的相關事宜，與學校各單位、各系學會、社團、學生組織協調；招募知訊網工人、規劃進度、預算、指引整個網站的年度大方向，擔任各組之間溝通橋梁，協同身邊這群一起努力的夥伴，為新生製作最好的知訊網。
			</p>
	    </div>
		<div class="modal-footer">
		</div>
	</div>
	<div>
		<a id="plan" class="btn modal-trigger" href="#modal2"><img style="position: relative; height: 100%; left: -38px;" src="https://lh4.googleusercontent.com/ZPsKoiB80j3TFRY5o2kFPMjqUmNXCaVRv7yk8z5Gl7hZ-2_FFfqsp7HykvQ0tqFL7vBuBA=w1342-h523"></a>
	</div>
	<div id="modal2" class="modal">
	    <div class="modal-content">
			<a class="close modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">clear</i></a>
			<h3>企劃組</h3>
			<div class="divider"></div>
			<p>決定知訊網的風格、配置網頁版面、美工樣式、還有網站內容，與各組協調知訊網的設計企劃，再監督美工與程設組實作，並呈現出理想中的知訊網。
			</p>
	    </div>
		<div class="modal-footer">
		</div>
	</div>
	<div>
		<a id="hack" class="btn modal-trigger" href="#modal3"></a>
	</div>
	<div id="modal3" class="modal">
	    <div class="modal-content">
			<a class="close modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">clear</i></a>
			<h3>程設組</h3>
			<div class="divider"></div>
			<p>負責架構網站、撰寫程式，將整個知訊網推動的幕後功臣；程設組運用程式碼編織而成的知訊網，將帶給新生最好的知訊網體驗。
			</p>
	    </div>
		<div class="modal-footer">
		</div>
	</div>
	<div>
		<a id="art" class="btn modal-trigger" href="#modal4"></a>
	</div>
	<div id="modal4" class="modal">
	    <div class="modal-content">
			<a class="close modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">clear</i></a>
			<h3>美工組</h3>
			<div class="divider"></div>
			<p>知訊網上可見之處皆是出自於他們筆下，與企劃組合作設計網站頁面，美工組繪製網站的各個頁面、和許多精美的圖片，努力為新生繪出最有活力的知訊網。
			</p>
	    </div>
		<div class="modal-footer">
		</div>
	</div>
	<div>
		<a id="video" class="btn modal-trigger" href="#modal5"></a>
	</div>
	<div id="modal5" class="modal">
	    <div class="modal-content">
			<a class="close modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">clear</i></a>
			<h3>影音組</h3>
			<div class="divider"></div>
			<p>剪輯影片、編寫劇本、拍攝相片；影音組主要負責知訊網的影片製作，自己擔當導演拍攝影片，讓新生搶先體驗大學生活的樂趣。
			</p>
	    </div>
		<div class="modal-footer">
		</div>
	</div>
</div>
<div id="bottom">
</div>
@stop
