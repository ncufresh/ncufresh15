<html>
    <head>
        <title>Page Not Found</title>
		<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!--<link type="text/css" rel="stylesheet" href="{{ asset('css/layout.css') }}"  media="screen,projection"/> -->
		<!--Let browser know website is optimized for mobile-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('favicon.png')}}" type="image/png">
		<meta charset="UTF-8">
		<style>
			#body {
				min-height: 80%;
				text-align: center;
				padding-top: 3%;
				color: #333333;
			}
			nav {
				background-color: #2196f3 !important;
			}
			footer {
				background-color: black !important;
				color: white;
				text-align: center;
				padding-bottom: 20px;
			}
			#error-icon {
				font-size: 10em;
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
			 body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
			}

			main {
				flex: 1 0 auto;
			}

			@media only screen and (max-width: 600px) {
				#msg1 {
					width: 100%;
					margin-left: 0;
				}
			}
		</style>
    </head>
    <body>
		<nav>
			<div class="nav-wrapper">
			<a href="{{url('/')}}" class="brand-logo">NCU Fresh</a>
			<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="{{ url('campus') }}">校園導覽</a></li>
				<li><a href="{{ url('document') }}">新生必讀</a></li>
				<li><a href="{{ url('life') }}">中大生活</a></li>
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
				</ul>
				<li><a href="{{ url('video') }}">影音專區</a></li>
				<li><a href="#">關於我們</a></li>
			</ul>
			<ul class="side-nav" id="mobile-nav">
				<li><a href="{{ url('campus') }}">校園導覽</a></li>
				<li><a href="#">新生必讀</a></li>
				<li><a href="{{ url('life') }}">中大生活</a></li>
				<li class='no-padding'>
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
				<li><a href="#">關於我們</a></li>
			</ul>
			</div>
		</nav>
		<main>
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
		<footer class="page-footer" id='footer'>新生知訊網團隊 版權所有 © 2015 NCU Fresh All Rights Reserved</footer>
		<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
		<!--<script type="text/javascript" src="{{ asset('js/layout.js') }}"></script>-->
		<script>
			$(document).ready(function(){
				$('.links').dropdown({
					constrain_width: true, // Does not change width of dropdown to that of the activator
					hover: true, // Activate on hover
					belowOrigin: true // Displays dropdown below the button
				});
				$("#nav-qa-trigger").dropdown({
					constrain_width: false,
					hover: true,
					belowOrigin: true
				});
				$(".button-collapse").sideNav();
			});
		</script>
    </body>
</html>
