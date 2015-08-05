<html>
    <head>
        <title>@yield('title')</title>
		<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Let browser know website is optimized for mobile-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="icon" href="{{asset('icon.png')}}" type="image/png">
        <style>
            #wrapper {
                background-image: url('/img/banner/{{$user->background}}.jpg');
                background-size: 100% auto;
                height: 100%;
            }
            #menu-btn {
                position: fixed;
                left: 20px;
                top: 20px;
            }
        </style>
		@yield('css')
    </head>
    <body>
        <div id="wrapper">
            <a href="#" id="menu-btn" data-activates="mobile-nav" class="button-collapse btn-floating btn-large red lighten-1"><i class="material-icons">menu</i></a>
            <ul class="side-nav" id="mobile-nav">
                <li><a href="{{ url('/') }}">首頁</a></li>
                <li><a href="{{ url('campus') }}">校園導覽</a></li>
                <li><a href="{{ url('document')}}">新生必讀</a></li>
                <li><a href="{{ url('life')}}">中大生活</a></li>
                <li class='no-padding' style="line-height:64px;">
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
                <li class='no-padding' style="line-height:64px;">
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
                <li><a href="{{ url('about')}}">關於我們</a></li>
            </ul>
            @yield('content')
        </div>
		<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/user.js') }}"></script>
		@yield('js')
    </body>
</html>
