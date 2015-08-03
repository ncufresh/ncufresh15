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
        <style>
            #wrapper {
                background-image: url('/img/banner/2.jpg');
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
                <li><a href="#">新生必讀</a></li>
                <li><a href="#">中大生活</a></li>
                <li class='no-padding' style="line-height:64px;">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header  waves-effect waves-teal">常用連結</a>
                            <div class="collapsible-body" style="display: block;">
                                <ul>
                                    <li><a href="#">Link1</a></li>
                                    <li><a href="#">Link2</a></li>
                                    <li><a href="#">Link3</a></li>
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
                <li><a href="{{ url('video2') }}">影音專區</a></li>
                <li><a href="#">關於我們</a></li>
            </ul>
            @yield('content')
        </div>
		<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/layout.js') }}"></script>
		@yield('js')
    </body>
</html>
