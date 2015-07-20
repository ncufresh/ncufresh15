<html>
    <head>
        <title>@yield('title')</title>
		<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="{{ asset('css/layout.css') }}"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<style>
			#portal-img {
				background: url('{{asset("img/Untitled.png")}}');
				background-size: 65px;
			}
			#banner-img {
				background: url('{{asset("img/banner.jpg")}}');
				background-size: 100% 100%;
			}
			#banner {
				box-shadow: 0px 1px 10px 0.5px grey;
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
			<nav id='nav-fixed' class='is-visible'>
				<div class="nav-wrapper">
					<a href="{{ url('/') }}" class="brand-logo">NCU Fresh</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="{{ url('campus') }}">校園導覽</a></li>
						<li><a href="#">新生必讀</a></li>
						<li><a href="#">中大生活</a></li>
						<li><a class='links' data-activates='nav-links' href="#">常用連結</a></li>
						<ul id='nav-links' class='dropdown-content'>
							<li><a href="#!">one</a></li>
							<li><a href="#!">two</a></li>
							<li class="divider"></li>
							<li><a href="#!">three</a></li>
						</ul>
						<li><a href="{{ url('group')}}">系所社團</a></li>
						<li><a id='nav-qa-trigger' data-activates='nav-qa' href="{{ url('qa') }}">新生Q&amp;A</a></li>
							<ul id='nav-qa' class='dropdown-content'>
								<li><a href="{{ url('qa') }}">Q&amp;A</a></li>
								<li><a href="{{ url('qa/create?type=qa') }}">我要發問</a></li>
								<li><a href="{{ url('/qa/create?type=report') }}">問題回報</a></li>
								<li class="divider"></li>
								<li><a href="{{ url('/qa/questions') }}">檢視問題</a></li>
								<li><a href="{{ url('/qa/answer') }}">新增Q&amp;A</a></li>
							</ul>
						<li><a href="{{ url('video2') }}">影音專區</a></li>
						<li><a href="#">關於我們</a></li>
					</ul>
				</div>
			</nav>
        <div id='container' class="nav-margin container z-depth-2">
		@endif
			@if (Request::url() === url('/'))
        <div id='container' class="container z-depth-2">
				<div id='banner'>
					<div class='row banner-menu'>
						<div class='col s2'><a class='waves-effect waves-teal btn-flat' href='{{ url('campus') }}'>校園導覽</a></div>
						<div class='col s2'><a class='waves-effect waves-teal btn-flat'>新生必讀</a></div>
						<div class='col s4'>
						<div id='nop'>yo</div>
						<a id='logo' href='{{url('/')}}'></a>
						</div>
						<div class='col s2'><a class='waves-effect waves-teal btn-flat'>中大生活</a></div>
						<div class='col s2'><a class='links waves-effect waves-teal btn-flat' data-activates='banner-links'>常用連結</a></div>
						<ul id='banner-links' class='dropdown-content'>
							<li><a href="#!">one</a></li>
							<li><a href="#!">two</a></li>
							<li class="divider"></li>
							<li><a href="#!">three</a></li>
						</ul>
					</div>
					<div id='banner-img' class='row'>
					</div>
					<div class='row banner-menu'>
						<div class='col s3'><a class='waves-effect waves-teal btn-flat' href='{{ url('group')}}'>系所社團</a></div>
						<div class='col s3'><a class='waves-effect waves-teal btn-flat links' data-activates='qadropdown'>新生Q&amp;A</a>
							<ul id='qadropdown' class='dropdown-content'>
								<li><a href="{{ url('qa') }}">Q&amp;A</a></li>
								<li><a href="{{ url('qa/create?type=qa') }}">我要發問</a></li>
								<li><a href="{{ url('/qa/create?type=report') }}">問題回報</a></li>
								<li class="divider"></li>
								<li><a href="{{ url('/qa/questions') }}">檢視問題</a></li>
								<li><a href="{{ url('/qa/answer') }}">新增Q&amp;A</a></li>
							</ul>
						</div>
						<div class='col s3'><a class='waves-effect waves-teal btn-flat' href='{{ url('video2') }}'>影音專區</a></div>
						<div class='col s3'><a class='waves-effect waves-teal btn-flat' href='{{ url('about')}}'>關於我們</a></div>
					</div>
				</div>
			@endif
			<div id='content'>
		        @if (Request::url() != url('/'))
                    <div id="breadcrumbs">
                        <a href="{{url('/')}}">首頁</a>
                        @foreach (\App\Helpers\SitemapHelper::getLocations() as $location)
                            &gt;
                            <a href="{{$location['url']}}">{{$location['name']}}</a>
                        @endforeach
                    </div>
                @endif
            	@yield('content')
			</div>
        </div>
		<footer class="page-footer" id='footer'>NCU Fresh© 2015 Copyright Text</footer>
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
