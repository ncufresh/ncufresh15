<html>
    <head>
        <title>@yield('title')</title>
		<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
      	<link type="text/css" rel="stylesheet" href="{{ asset('css/layout.css') }}"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('favicon.png')}}" type="image/png">
		<meta charset="UTF-8">
		<style>
			#portal-img {
				background: url('{{asset("img/Untitled.png")}}');
				background-size: 65px;
			}
			#logo {
				background-image: url('{{asset("img/indexLogo.png")}}');
				background-size: 100% 100%;
			}
			#nop {
				opacity: 0;
			}
		</style>
		@yield('css')
    </head>
    <body>
		@if (Request::url() != url('/'))
		<nav>
		@else
		<nav id="home-nav">
		@endif
			<div class="nav-wrapper">
			<a href="{{url('/')}}" class="brand-logo">NCU Fresh</a>
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
				<li><a class='links' data-activates='nav-links' href="#">常用連結</a></li>
				<li><a href="#">關於我們</a></li>
				<ul id='nav-links' class='dropdown-content'>
					<li><a href="https://portal.ncu.edu.tw/login">portal入口</a></li>
					<li><a href="https://lms.ncu.edu.tw/q?pg=home_welcome&cp=2000">LMS系統</a></li>
					<li><a href="https://uncia.cc.ncu.edu.tw/dormnet/">宿網系統</a></li>
					<li><a href="http://volley.cc.ncu.edu.tw:8080/RepairSystem/index.do?action=news">宿舍修繕</a></li>
					<li><a href="http://passport.ncu.edu.tw/">服務學習網</a></li>
					<li><a href="http://love.adm.ncu.edu.tw/center/Gender_Equal/main/index.html">性平教育</a></li>
					<li><a href="http://www4.is.ncu.edu.tw/register/check/stdno_check.php">學號查詢</a></li>
					<li><a href="https://www.facebook.com/groups/2015MeetNcu/">2015 相遇中央大學</a></li>
					<li><a href="https://www.facebook.com/groups/802172676461763/?fref=ts">中央研究生Family</a></li>
				</ul>
			</ul>
			<ul class="side-nav" id="mobile-nav">
				<li><a href="{{ url('campus') }}">校園導覽</a></li>
				<li><a href="#">新生必讀</a></li>
				<li><a href="{{ url('life') }}">中大生活</a></li>
				<li class='no-padding'>
					<ul class="collapsible collapsible-accordion">
						<li class="bold">
							<a class="collapsible-header  waves-effect waves-teal">新生Q&amp;A</a>
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
							<a class="collapsible-header  waves-effect waves-teal">常用連結</a>
							<div class="collapsible-body" style="display: block;">
								<ul>
									<li><a href="https://portal.ncu.edu.tw/login">portal入口</a></li>
									<li><a href="https://lms.ncu.edu.tw/q?pg=home_welcome&cp=2000">LMS系統</a></li>
									<li><a href="https://uncia.cc.ncu.edu.tw/dormnet/">宿網系統</a></li>
									<li><a href="http://volley.cc.ncu.edu.tw:8080/RepairSystem/index.do?action=news">宿舍修繕</a></li>
									<li><a href="http://passport.ncu.edu.tw/">服務學習網</a></li>
									<li><a href="http://love.adm.ncu.edu.tw/center/Gender_Equal/main/index.html">性平教育</a></li>
									<li><a href="http://www4.is.ncu.edu.tw/register/check/stdno_check.php">學號查詢</a></li>
									<li><a href="https://www.facebook.com/groups/2015MeetNcu/">2015 相遇中央大學</a></li>
									<li><a href="https://www.facebook.com/groups/802172676461763/?fref=ts">中央研究生Family</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="#">關於我們</a></li>
			</ul>
			</div>
		</nav>
        <div id='container' class="nav-margin container z-depth-2">
			@if (Request::url() === url('/'))
				<div id='banner'>
					<div class='row banner-menu'>
						<div class='col s2'><a class='waves-effect waves-teal btn-flat' href='{{ url('campus') }}'>校園導覽</a></div>
						<div class='col s2'><a class='waves-effect waves-teal btn-flat' href='{{ url('document') }}'>新生必讀</a></div>
						<div class='col s4'>
                            <div id='nop'>yo</div>
                            <a id='logo' href='{{url('/')}}'></a>
                        </div>
						<div class='col s2'><a class='waves-effect waves-teal btn-flat' href="{{ url('life') }}">中大生活</a></div>
						<div class='col s2'><a class='waves-effect waves-teal btn-flat' href='{{ url('group')}}'>系所社團</a></div>
					</div>
					<div id='banner-img' class='row'>
					</div>
					<div class='row banner-menu'>
						<div class='col s2'><a class='waves-effect waves-teal btn-flat links' data-activates='qadropdown'>新生Q&amp;A</a>
							<ul id='qadropdown' class='dropdown-content'>
								<li><a href="{{ url('qa') }}">Q&amp;A</a></li>
								<li><a href="{{ url('qa/create?type=qa') }}">我要發問</a></li>
								<li><a href="{{ url('/qa/create?type=report') }}">問題回報</a></li>
							</ul>
						</div>
						<div class='col s2'><a class='waves-effect waves-teal btn-flat' href='{{ url('video') }}'>影音專區</a></div>
						<div class='col s2 offset-s4'><a class='waves-effect waves-teal btn-flat' href='{{ url('about')}}'>關於我們</a></div>
						<div class='col s2'><a class='links waves-effect waves-teal btn-flat' data-activates='banner-links'>常用連結</a></div>
						<ul id='banner-links' class='dropdown-content'>
							<li><a href="https://portal.ncu.edu.tw/login">portal入口</a></li>
							<li><a href="https://lms.ncu.edu.tw/q?pg=home_welcome&cp=2000">LMS系統</a></li>
							<li><a href="https://uncia.cc.ncu.edu.tw/dormnet/">宿網系統</a></li>
							<li><a href="http://volley.cc.ncu.edu.tw:8080/RepairSystem/index.do?action=news">宿舍修繕</a></li>
							<li><a href="http://passport.ncu.edu.tw/">服務學習網</a></li>
							<li><a href="http://love.adm.ncu.edu.tw/center/Gender_Equal/main/index.html">性平教育</a></li>
							<li><a href="http://www4.is.ncu.edu.tw/register/check/stdno_check.php">學號查詢</a></li>
							<li><a href="https://www.facebook.com/groups/2015MeetNcu/">2015 相遇中央大學</a></li>
							<li><a href="https://www.facebook.com/groups/802172676461763/?fref=ts">中央研究生Family</a></li>
						</ul>
					</div>
				</div>
			@endif
			<div id='content'>
		        @if (Request::url() != url('/'))
                    <div id="breadcrumbs">
                        @if (!isset($nobreadcrumb)) 
                            <a href="{{url('/')}}">首頁</a>
                        @endif
                        @foreach (\App\Helpers\SitemapHelper::getLocations() as $location)
                            &gt;
                            <a href="{{$location['url']}}">{{$location['name']}}</a>
                        @endforeach
                    </div>
                @endif
            	@yield('content')
			</div>
        </div>
		<footer class="page-footer" id='footer'>新生知訊網團隊 版權所有 © 2015 NCU Fresh All Rights Reserved</footer>
		<div id='portal'>
			<div id='portal-img'></div>
			<div id='portal-menu'>
				<a id='portal-trigger' class='dropdown-button btn' href='#' data-activates='menu-list'></a>
				<ul id='menu-list' class='dropdown-content'>
					<li><a href="#!">one</a></li>
					<li><a href="#!">two</a></li>
					<li class="divider"></li>
					<li><a href="#!">three</a></li>
				</ul>
			</div>
		</div>
		<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/layout.js') }}"></script>
		@yield('js')
    </body>
</html>
