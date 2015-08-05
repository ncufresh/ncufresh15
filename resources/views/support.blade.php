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
			max-width:500px;
			height:600px;
			float: left;
		}
		#content_right{
			max-width:500px;
			height:600px;
			float: left;
		}
		#content_center{
			max-width:500px;
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
			min-width: 500px;
			max-width: 500px;
			width: 500px;
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
				<div>
					<label class="big">Google Chrome</label>
				</div>
			</div>
			<div class="content">
				<label class="middle con">由Google公司開發的網頁瀏覽器，Chrome的整體發展目標是提升穩定性、速度和安全性，並創造出簡單且有效率的使用者介面CNET旗下的Download.com網站評筆為2008年最佳Windows應用程式，CSS3 Selectors Test中 578 項全部通過。</label>
			</div>
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
				<div>
					<label class="big">Firefox</label>
				</div>
			</div>
			<div class="content">
				<label class="middle">是由Mozilla基金會與開放源碼社群共同開發的網頁瀏覽器，每年都被媒體PC Magazine選為年度最佳瀏覽器，市佔率僅次於微軟的IE， Firefox擁有分頁瀏覽、拼字檢查、即時書籤、下載管理員及自訂搜尋引擎等功能。</label>
			</div><br>
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
				<div>
					<label class="big">Opera</label>
				</div>
			</div>
			<div class="content">
				<label class="middle">Opera支援多種操作系統，如Windows、Linux、Mac、FreeBSD、Solaris、BeOS、OS/2、QNX等，此外，Opera還有手機用的版本（Opera Mini和Opera Mobile），也支援多語言，包括簡體中文和繁體中文。</label>
			</div><br>
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