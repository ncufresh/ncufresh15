<html>
<head>
	<title>瀏覽器不支援</title>
	<style type="text/css">
		body {
			font-family:"Times New Roman",Georgia,Serif;
			margin: 0% 0%;
		}
		#sitebody{
		　	width:100%;
		　	padding:2% 2%;
			background-color: #ffffff;
			height: 650px;
		}
		#content_left{
			width:32%;
			height:600px;
			float: left;
		}
		#content_right{
			width:32%;
			height:600px;
			float: left;
		}
		#content_center{
			width:32%;
			height:600px;
			float: left;
		}
		.title {
			padding: 2% 0%;
			background-color: #4a4a4a;
			color: #ffffff;
		}
		img {
			height: 250px;
		}
		.center {
			text-align: center;
		}
		.bigger {
			font-size: 30px;
		}
		.big {
			font-size: 26px;
		}
		.middle {
			font-size: 16px;
		}
		.content {
			padding: 10%;
		}
		.con {
			min-width: 400px;
			max-width: 400px;
			width: 400px;
		}
		a:link {
			text-decoration:none;
		}
		a:visited {
			text-decoration:none;
		}
		a:hover {
			text-decoration:none;
		}
		a:active {
			text-decoration:none;
		}
		.btn {
			background: #3595de;
			border-radius: 5px;
			border: 2px solid;
			border-top-color: #eee; 
			border-left-color: #eee;
			border-right-color: #949596;
			border-bottom-color: #949596;
			color: #ffffff;
			font-size: 20px;
			padding: 10px 20px 10px 20px;
		}

	</style>
</head>
<body>
	<div class="center title">
		<label class="bigger">若您無法正常開啟此網頁，請您更換您的瀏覽器</label>
	</div>
	<br>
	<div id="sitebody">
　		<div id="content_left">
			<div class="center">
				<div>
					<img src="{{asset('img/chrome.png')}}" style="max-height: 250px;">
				</div>
			</div>
            <br>
			<div class="center">
				<a href="https://www.google.com.tw/chrome/browser/desktop/index.html" class="btn">
					下載Chrome
				</a>
			</div>
			
		</div>
　		<div id="content_center">
			<div class="center">
				<div>
					<img src="{{asset('img/firefox.png')}}" style="max-height: 250px;">
				</div>
			</div>
            <br>
			<div class="center">
				<a href="https://www.mozilla.org/zh-TW/firefox/new/" class="btn">
					下載Firefox
				</a>
			</div>
		</div>
　		<div id="content_right">
			<div class="center">
				<div>
					<img src="{{asset('img/opera.png')}}" style="max-height: 250px;">
				</div>
			</div>
            <br>
			<div class="center">
				<a href="http://www.opera.com/zh-tw" class="btn">
					下載Opera
				</a>
			</div>
		</div>
	</div>
	<div class="title center">
		<label>新生知訊網團隊 版權所有 © 2015 NCU Fresh All Rights Reserved</label>
	</div>
</body>
</html>
