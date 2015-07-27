@extends('layout')

@section('title', '系所社團')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/department/club.css') }}">
@stop
@section('js')
	<script type="text/javascript" src="{{ asset('js/department/departmentClub.js') }}"></script>
@stop

@section('content')
<div>
	<!--admin-->
	@permission('management')
	<div>
		<a class="waves-effect waves-light grey lighten-2 btn butSelect" href="/group/add">新增</a>
	</div>
	@endpermission
@if($page === 1)
	<!--總攬-->
	<div class="row">
		<div class="col s12 m6 l6">
			<a href="/group/departments">
				<div class="card">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/shisuo.png')}}">
						<span class="card-title">系所</span>
					</div>
				</div>
			</a>
		</div>
		<div class="col s12 m6 l6">
			<a href="/group/clubs">
				<div class="card">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/club.png')}}">
						<span class="card-title">社團</span>
					</div>
				</div>
			</a>
		</div>
	</div>
@elseif($page === 2)
    <!--系所-->
    <div class="row">
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/departments/1">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/lecture.png')}}">
						<span class="card-title">文學院</span>
					</div>
				</a>
				<div class="card-content cardCon1">
					<p>為校內唯一的人文學院，推廣校區的人文精神及素養責無旁貸。除每學期固定提供大一國文、大一外語及歷史課程外，各系所均開設全校性的課程供學生選修，並有功能齊全、設備完善的視聽教室及語言教室供全校師生使用。</p>
				</div>
			</div>
			
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/departments/2">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/science.png')}}">
						<span class="card-title">理學院</span>
					</div>
				</a>
				<div class="card-content cardCon1">
					<p>為校內成立的第一所學院，具有優良傳統，並不斷創新進步。現有專任教師118位，學生1700位。此外，尚有複雜系統、薄膜技術、數學與理論物理和探測器四個研究中心。</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/departments/3">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/engineer.png')}}">
						<span class="card-title">工學院</span>
					</div>
				</a>
				<div class="card-content cardCon1">
					<p>目前共設三系五所，學系分工適宜，並依社會及產業需求調整，採高品質精緻教育理念，使學生得以接受適當完整的工程教育，有助於長遠的發展。</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/departments/4">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/management.png')}}">
						<span class="card-title">管理學院</span>
					</div>
				</a>
				<div class="card-content cardCon1">
					<p>管理學院各單位以專業分工的理念，掌握社會之脈動，理論與實務並重，朝國際化、資訊化、多元化的方向發展，各系所表現優異，為國內僅有執行教育部卓越計畫的兩所管理學院之一。</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/departments/5">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/electrical.png')}}">
						<span class="card-title">資訊電機學院</span>
					</div>
				</a>
				<div class="card-content cardCon1">
					<p>學院教師學有專精，參與軟體、學習科技、通訊系統等校級研究中心，以及教育部資助的卓越計畫，與數項學界科專計畫、跨部會國家型計畫。自成立以來，致力於創造優質的學習與研究環境，以培養具創新思維與倫理道德之專業研究人才，俾使資訊電機學院能成為對全國、世界具影響力之指標學院。</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/departments/6">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/earth.png')}}">
						<span class="card-title">地球科學學院</span>
					</div>
				</a>
				<div class="card-content cardCon1">
					<p>是台灣唯一的地球科學學院，成立於民國八十七年，是由原先設於理學院下之地球科學相關系所整合設立。經多年的成長，本院已成台灣在地球科學整合型的研究及教學的基地及重鎮。奉獻於認識地球、了解地球、愛護地球的教育和研究。</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/departments/7">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/hakka.png')}}">
						<span class="card-title">客家學院</span>
					</div>
				</a>
				<div class="card-content cardCon1">
					<p>成立於2003年8月，為全球首創之客家學院，向來秉持「客家本質」研究為目標，提供完整的客家元素以利客家文化的保存、推廣及永續發展。本學院強調以人文社會科學方法論進行客家研究，並以和諧多元為論述主軸，期盼帶動國內外客家學術研究風氣，建構科際整合的「客家學」。</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/departments/8">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/health.png')}}">
						<span class="card-title">生醫理工學院</span>
					</div>
				</a>
				<div class="card-content cardCon1">
					<p>成立於2013年，現為國立中央大學最新的學院。以跨領域理念整合基礎與臨床生醫研究， 並配合國家之六大新興產業計畫 中之「生物科技產業」與「醫療照護產業」發展研究。</p>
				</div>
			</div>
		</div>
	</div>
@elseif($page === 3)
	<!--社團-->
    <div class="row">
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/clubs/1">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/shaishu.png')}}">
						<span class="card-title">學術性</span>
					</div>
				</a>
				<div class="card-content cardCon2">
					<p>學術性社團，豐富的知識涵養，充實著所有的參與者; 學藝性社團包羅萬象，不論您是對美術、攝影、寫作、研究等活動的熱愛，還是對宗教的追求，您都可以在這裡找到您的歸屬。
<br>「學，就像一隻鑽頭，去開掘知識的深井。問，就像一把鑰匙，去啟開疑團的大門。」一起加入學術性社團，與我們一起教學相長吧~</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/clubs/2">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/kangle.png')}}">
						<span class="card-title">康樂性</span>
					</div>
				</a>
				<div class="card-content cardCon2">
					<p>康樂性社團提倡正當休閒康樂活動，以活潑的方式帶給大家歡樂和收穫。<br>
「Play more , Learn more」只要您有對於學習的熱情，參與康樂性社團，您會學到最適合您的專業知識與技能。</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/clubs/3">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/liani.png')}}">
						<span class="card-title">聯誼性</span>
					</div>
				</a>
				<div class="card-content cardCon2">
					<p>聯誼性社團集合了全校來自同一地區的學生，以每一地區為單位成立一個地方友會社團，受全體會員之付託，以聯繫會員之間的情感和生活上之互助，以及促進各地方友會間互動為成立宗旨。</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="card">
				<a href="/group/clubs/4">
					<div class="card-image">
						<img class="cardImage1" src="{{asset('img/department/fuu.png')}}">
						<span class="card-title">服務性</span>
					</div>
				</a>
				<div class="card-content cardCon2">
					<p>他們服務校園的學生、舉辦宣導活動，以及走出校園組成服務隊，許多人平常做不到的事情，都是服務性社團最拿手的地方！</p>
				</div>
			</div>
		</div>
	</div>
@elseif($page === 4)
    <!--新增-->
    @permission('management')
    <div>
    	{!! Form::open(array('url'=>'/group/new', 'method'=>'post', 'files' => true))!!}
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label>選擇類別</label>
			<div class="input-field col s12">
			    <select name="cateValue" style="display: block;">
			      	<option value="" disabled selected>社團</option>
			      	<option value="1">學術性</option>
			      	<option value="2">康樂性</option>
			      	<option value="3">聯誼性</option>
			      	<option value="4">服務性</option>
			      	<option value="" disabled selected>系所</option>
			      	<option value="5">文學院</option>
			      	<option value="6">理學院</option>
			      	<option value="7">工學院</option>
			      	<option value="8">管理學院</option>
			      	<option value="9">資訊電機學院</option>
			      	<option value="10">地球科學學院</option>
			      	<option value="11">客家學院</option>
			      	<option value="12">生醫理工學院</option>
			    </select>
			</div>
			<div class="row">
			   	<div class="input-field col s12">
			     	<input name="clubName" id="name" type="text" class="validate">
			     	<label for="name">名稱</label>
			   	</div>
			</div>
			<div class="row">
        	  	<div class="input-field col s12">
        	    	<textarea name="clubContent" id="textarea1" class="materialize-textarea" length="600"></textarea>
        	   		<label for="textarea1">內容</label>
        	  	</div>
        	</div>
			<div class="file-field input-field">
      			<input class="file-path validate" type="text">
      			<div>
      			<input name="fileName[]" id="file" type="file" class="validate" multiple="multiple" accept="image/*" onchange="getFileName(this.value)">
        			<label id="fileName" for="file">選擇圖片</label>
      			</div>
   			</div>
			<div>
				<button type="submit" class="waves-effect waves-light btn-large grey lighten-2 butSelect">確認</button>
			</div>
		{!! Form::close()!!}
    </div>
    @endpermission
@elseif($page === 5)
    <!--顯示內容-->
	<div class="row">
		@foreach($list as $list)
		<div class="col s12 m6 l4">
			<a href="show/{{ $list->id }}">
				<div class="card">
					<div class="card-image">
						<img class="cardImage2" src="{{ asset('uploads/departments/'.$list->showPicture()) }}" style="max-height: 200px;">
						<span class="card-title">{{ $list->name }}</span>
					</div>
				</div>
			</a>
		</div>
		@endforeach
	</div>
@endif
</div>
@stop