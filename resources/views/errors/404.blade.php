<html>
    <head>
        <title>Page not found</title>
		<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
      	<link type="text/css" rel="stylesheet" href="{{ asset('css/layout.css') }}"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="icon" href="{{asset('icon.png')}}" type="image/png">
		<meta charset="UTF-8">
		<meta property="og:title" content="中央大學|2015 新生知訊網" />
		<meta property="og:site_name" content="新生知訊網"/>
		<meta property="og:image" content="{{asset('img/ogp.jpg')}}"/>
		<meta property="og:description" content="為歡迎大學新鮮人，新生知訊網，主打各項貼心服務，從飲食、住宿、交通、教育、藝文等主題出發的生活資訊，與大考放榜同步上線"/>
		<meta property="og:type" content="article">
		<style>
			#body {
				min-height: 80%;
				text-align: center;
				padding-top: 3%;
				color: #333333;
			}
			#msg1 {
				background-image: url("{{asset('img/404.png')}}");
				width: 50%;
				margin-left: 25%;
				background-size: 100% 100%;
				position: relative;
			}
			#msg1:before {
				content: "";
				display: block;
				padding-top: 80%;
			}
			#msg2 {
				font-size: 1.5em;
			}
			#logo {
				background-image: url('{{asset("img/indexLogo.png")}}');
				background-size: 85% 85%;
				background-repeat: no-repeat;
			}
			#nop {
				opacity: 0;
			}
			.banner-menu .s4{
				padding-left: 2% !important;
			}
			@font-face {
				font-family: 'Material Icons';
				font-style: normal;
				font-weight: 400;
				src:
				url({{ asset('font/MaterialIcons-Regular.woff2')}}) format('woff2'),
				url({{ asset('/font/MaterialIcons-Regular.woff')}}) format('woff'),
				url({{ asset('/font/MaterialIcons-Regular.ttf')}}) format('truetype');
			}

			.material-icons {
				font-family: 'Material Icons';
				font-weight: normal;
				font-style: normal;
				font-size: 24px;
				line-height: 1;
				letter-spacing: normal;
				text-transform: none;
				display: inline-block;
				word-wrap: normal;
				-moz-font-feature-settings: 'liga';
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				text-rendering: optimizeLegibility;
				-moz-osx-font-smoothing: grayscale;
				font-feature-settings: 'liga';
			}
			.brand-logo {
				width: 142px;
				background-image: url("{{asset('img/navLogo.png')}}");
				background-repeat: no-repeat;
				background-position-y: 6px;
			}
		</style>
		@yield('css')
    </head>
    <body>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-10121863-1', 'auto');
          ga('send', 'pageview');

        </script>
		@if (Request::url() != url('/'))
		<nav>
		@else
		<nav id="home-nav">
		@endif
			<div class="nav-wrapper">
			<a href="{{url('/')}}" class="brand-logo">&nbsp;</a>
			<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="{{ url('campus') }}">校園導覽</a></li>
				<li><a href="{{ url('document') }}">新生必讀</a></li>
				<li><a href="{{ url('life') }}">中大生活</a></li>
				<li><a href="{{ url('group')}}">系所社團</a></li>
				<li><a id='nav-qa-trigger' data-activates='nav-qa' href="{{ url('qa') }}">新生Q&amp;A</a></li>
				<ul id='nav-qa' class='dropdown-content'>
					<li><a href="{{ url('qa') }}">Q&amp;A</a></li>
					<li><a href="{{ url('qa/create?type=qa') }}">我要發問</a></li>
					<li><a href="{{ url('/qa/create?type=report') }}">問題回報</a></li>
				</ul>
				<li><a href="{{ url('video') }}">影音專區</a></li>
				<li><a class='nav-links' data-activates='nav-links' href="#">常用連結</a></li>
				<li><a href="{{ url('about')}}">關於我們</a></li>
				<ul id='nav-links' class='dropdown-content'>
					<li><a target="_blank" href="http://www.ncu.edu.tw/">中大首頁</a></li>
					<li><a target="_blank" href="https://portal.ncu.edu.tw/login">portal入口</a></li>
					<li><a target="_blank" href="https://lms.ncu.edu.tw/q?pg=home_welcome&cp=2000">LMS系統</a></li>
					<li><a target="_blank" href="https://uncia.cc.ncu.edu.tw/dormnet/">宿網系統</a></li>
					<li><a target="_blank" href="http://volley.cc.ncu.edu.tw:8080/RepairSystem/index.do?action=news">宿舍修繕</a></li>
					<li><a target="_blank" href="http://passport.ncu.edu.tw/">服務學習網</a></li>
					<li><a target="_blank" href="http://140.115.184.179/gender">性平教育</a></li>
					<li><a target="_blank" href="http://www4.is.ncu.edu.tw/register/check/stdno_check.php">學號查詢</a></li>
					<li><a target="_blank" href="https://www.facebook.com/groups/2015MeetNcu/">2015 相遇中央大學</a></li>
					<li><a target="_blank" href="https://www.facebook.com/groups/802172676461763/?fref=ts">中央研究生Family</a></li>
				</ul>
			</ul>
			<ul class="side-nav" id="mobile-nav">
				<li><a href="{{ url('/') }}">首頁</a></li>
				<li><a href="{{ url('campus') }}">校園導覽</a></li>
				<li><a href="{{ url('document')}}">新生必讀</a></li>
				<li><a href="{{ url('life') }}">中大生活</a></li>
				<li class='no-padding'>
					<ul class="collapsible collapsible-accordion">
						<li class="bold">
							<a class="collapsible-header  waves-effect waves-light">新生Q&amp;A</a>
							<div class="collapsible-body" style="display: block;">
								<ul>
									<li><a href="{{ url('qa') }}">Q&amp;A</a></li>
									<li><a href="{{ url('qa/create?type=qa') }}">我要發問</a></li>
									<li><a href="{{ url('/qa/create?type=report') }}">問題回報</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="{{ url('group')}}">系所社團</a></li>
				<li><a href="{{ url('video') }}">影音專區</a></li>
				<li class='no-padding'>
					<ul class="collapsible collapsible-accordion">
						<li class="bold">
							<a class="collapsible-header  waves-effect waves-light">常用連結</a>
							<div class="collapsible-body" style="display: block;">
								<ul>
                                    <li><a target="_blank" href="http://www.ncu.edu.tw/">中大首頁</a></li>
                                    <li><a target="_blank" href="https://portal.ncu.edu.tw/login">portal入口</a></li>
                                    <li><a target="_blank" href="https://lms.ncu.edu.tw/q?pg=home_welcome&cp=2000">LMS系統</a></li>
                                    <li><a target="_blank" href="https://uncia.cc.ncu.edu.tw/dormnet/">宿網系統</a></li>
                                    <li><a target="_blank" href="http://volley.cc.ncu.edu.tw:8080/RepairSystem/index.do?action=news">宿舍修繕</a></li>
                                    <li><a target="_blank" href="http://passport.ncu.edu.tw/">服務學習網</a></li>
                                    <li><a target="_blank" href="http://140.115.184.179/gender">性平教育</a></li>
                                    <li><a target="_blank" href="http://www4.is.ncu.edu.tw/register/check/stdno_check.php">學號查詢</a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/groups/2015MeetNcu/">2015 相遇中央大學</a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/groups/802172676461763/?fref=ts">中央研究生Family</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="{{ url('about')}}">關於我們</a></li>
			</ul>
			</div>
		</nav>
		<main style="flex: 1 0 auto;">
			<div id="body">
				<div class="row">
					<div id="msg1" class="col s12"></div>
					<div id="msg2" class="col s12">
						<span>您所查詢的頁面不存在</span><br/>
						<span>如果有任何問題， 歡迎 <a href="mailto:ncufreshweb@gmail.com" target="_top">向我們反應</a></span>
					</div>
				</div>
			</div>
		</main>
		<footer class="page-footer" id='footer'>國立中央大學2015新生知訊網團隊 版權所有 © 2015 NCU Fresh All Rights Reserved<br/>建議使用Chrome、Firefox或者IE11等瀏覽器，以獲得最佳體驗</footer>
		<a id='portal' class="dropdown-button btn-flat" href="#" data-activates="menu-list">
				<!--<a id='portal-trigger' class='dropdown-button btn' href='#' data-activates='menu-list'></a> -->
		</a>
		<ul id='menu-list' class='dropdown-content' style="min-width: 120px; position: fixed;">
			@if (Auth::check())
				<li><a href="{{ url('/user/').'/'.Auth::user()->id }}">個人專區</a></li>
			@endif
			<li><a href="{{ url('/game') }}">小遊戲</a></li>
			<li class="divider"></li>
			@if (Auth::check())
				<li><a href="{{ url('/auth/logout') }}">登出</a></li>
			@else
				<li><a href="{{ url('/auth/login') }}">登入</a></li>
				<li><a href="{{ url('/auth/register') }}">註冊</a></li>
			@endif
		</ul>
		<!--[if lte IE 8]>
			<script src="https://raw.githubusercontent.com/zhangxinxu/ieBetter.js/master/ieBetter.js"></script>
		<![endif]-->
		<!--<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>-->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.timer.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/fish.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/layout.js') }}"></script>
		@yield('js')
    </body>
</html>
