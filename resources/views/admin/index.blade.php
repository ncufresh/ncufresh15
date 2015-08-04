@extends('layout')

@section('title', 'Admin')

@section('css')
	<link rel="stylesheet" type="text/css" href='{{ asset("css/admin.css") }}'/>
@stop

@section('js')
	<script src="{{ asset('js/admin.js') }}"></script>
@stop

@section('content')
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab col s4"><a id="ann-link" class='{{$category==1? "active":""}}' href="{{url('admin/announcement')}}">公告</a></li>
				<li class="tab col s4"><a id="qa-link" class='{{$category==2? "active":""}}' href="{{url('admin/qa')}}">Q&A</a></li>
				<li class="tab col s4"><a id="calender-link" class='{{$category==3? "active":""}}' href="{{url('admin/calender')}}">行事曆</a></li>
			</ul>
		</div>
		@if ($category == 1)
		<div id="ann-tab" class="col s12">
			<div class='row'>
				<a id='ann-new-trigger' class='btn' href='#ann-new'>
					<i class="material-icons left">chat_bubble_outline</i>新增公告
				</a>
				<div id="ann-new" class="modal">
					<form action='/ann/new' method='POST'>
						<div class="modal-content">
							<h4>新增公告</h4>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row">
								<div class="input-field col s12">
									<input id="ann-title" type="text" name='title' class="validate" required>
									<label for="ann-title">標題</label>
								</div>
								<div class="input-field col s12">
									<textarea id="ann-content" class="materialize-textarea" name='content'></textarea>
									<label for="ann-content">公告事項內容</label>
								</div>
								<div class="input-field col s12">
									<input id='ann-date' name='date' type="date" class="datepicker validate" required>
									<label for'ann-date'>公告發布日期</label>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type='submit' class="waves-effect waves-green btn">新增</button>
							<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">關閉</a>
						</div>
					</form>
				</div>
				<div>
					<div class="row" style="color: #2bbbad;font-weight: 600; border-bottom: 3px solid #2bbbad; padding-bottom: 10px;">
						<div class="col s2">標題</div>
						<div class="col s4">文章內容</div>
						<div class="col s3">發佈日期</div>
						<div class="col s3">操作選項</div>
					</div>
					@foreach ($data as $ann)
					<div class='row'>
						<div class='col s2 ann-title-col' id='ann-title-{{ $ann->id }}'>{{ $ann->title }}</div>
						<div class='col s4 ann-content-col' id='ann-content-{{$ann->id}}'>&nbsp;{{$ann->content }}</div>
						<div class='col s3 ann-showat-col' id='ann-showat-{{$ann->id}}'>{{$ann->show_at}}</div>
						<div class='col s3'>
							<a class='btn update-ann-trigger' data-id='{{ $ann->id }}' href='#ann-update-modal'>編輯</a>
							<a href="{{url('ann/delete/'.$ann->id)}}" class="waves-effect waves-light btn">刪除</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div id="ann-update-modal" class="modal"><!-- edit announcement modal -->
				<form id='ann-update-form' action='/ann/update/' method='POST'>
					<div class="modal-content">
						<h4>更新公告</h4>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row">
							<div class="input-field col s12">
								<input id="ann-update-title" type="text" name='title' class="validate" required>
								<label for="ann-update-title">標題</label>
							</div>
							<div class="input-field col s12">
								<textarea id="ann-update-content" class="materialize-textarea" name='content'></textarea>
								<label for="ann-update-content">公告事項內容</label>
							</div>
							<div class="input-field col s12">
								<input id='ann-update-date' name='date' type="date" class="datepicker validate" required>
								<label for'ann-update-date'>New Show Date</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type='submit' class="waves-effect waves-green btn">更新</button>
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">關閉</a>
					</div>
				</form>
			</div> <!-- edit announcement modal -->
		</div> <!--Ann-tab-->
		@elseif($category == 2)
		<div id="qa-tab" class="col s12">
			<div class='row'>
				<a id='qa-new-trigger' class='btn' href='#qa-new'><i class="material-icons left">chat_bubble_outline</i>新增QA公告</a>
				<div id="qa-new" class="modal">
					<form action='/annqa/new' method='POST'>
						<div class="modal-content">
							<h4>新增QA公告</h4>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="input-field col s12">
								<input id="qa-title" type="text" name='title' class="validate" length="20" required>
								<label for="qa-title">QA公告標題</label>
							</div>
							<div class="input-field col s12">
								<input id="qa-url" type="url" name='url' class="validate" required>
								<label for="qa-url">QA公告連結網址</label>
							</div>
							<button type='submit' class="waves-effect waves-green btn">新增</button>
							<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">關閉</a>
						</div>
					</form>
				</div> <!-- qa new modal-->
				<div id='qas-container'>
					<div class="row" style="color: #2bbbad;font-weight: 600; border-bottom: 3px solid #2bbbad; padding-bottom: 10px;">
						<div class="col s4">標題</div>
						<div class="col s5">連結網址</div>
						<div class="col s3">操作選項</div>
					</div>
					@foreach ($data as $qa)
					<div class='row'>
						<div class='col s4 qa-title-col' id='qa-title-{{ $qa->id }}'>{{ $qa->title }}</div>
						<div class='col s5 qa-url-col' id='qa-url-{{$qa->id}}'>{{ $qa->url }}</div>
						<div class='col s3'>
							<a class='btn update-qa-trigger' data-id='{{ $qa->id }}' href='#qa-update-modal'>編輯</a>
							<a href="{{url('annqa/delete/'.$qa->id)}}" class="waves-effect waves-light btn">刪除</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<!-- edit calender modal -->
			<div id="qa-update-modal" class="modal">
				<form id='qa-update-form' action='/annqa/update/' method='POST'>
					<div class="modal-content">
						<h4>更新行事曆</h4>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="input-field col s12">
							<input id="qa-update-title" type="text" name='title' length="20" class="validate" required>
						</div>
						<div class="input-field col s12">
							<input id="qa-update-url" type="url" name='url' class="validate" required>
						</div>
						<button type='submit' class="waves-effect waves-green btn">更新</button>
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">關閉</a>
					</div>
				</form>
			</div> <!-- edit annqa modal -->
		</div><!--qa-tab-->
		@elseif($category == 3)
		<div id="cal-tab" class="col s12">
			<div class='row'>
				<a id='cal-new-trigger' class='btn' href='#cal-new'><i class="material-icons left">chat_bubble_outline</i>新增行事曆</a>
				<div id="cal-new" class="modal">
					<form action='/cal/new' method='POST'>
						<div class="modal-content">
							<h4>新增行事曆</h4>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="input-field col s12">
								<input id="cal-title" type="text" name='title' class="validate" length="20" required>
								<label for="cal-title">行事曆標題</label>
							</div>
							<div class="input-field col s12">
								<textarea id="cal-content" name='content' class="validate materialize-textarea" required></textarea>
								<label for="cal-content">事項內容</label>
							</div>
							<div class="input-field col s12">
								<input id='cal-date' name='date' type="date" required>
								<label for="cal-date">事件日期</label>
							</div>
							<button type='submit' class="waves-effect waves-green btn">新增</button>
							<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">關閉</a>
						</div>
					</form>
				</div>
				<div id='cals-container'>
					<div class="row" style="color: #2bbbad;font-weight: 600; border-bottom: 3px solid #2bbbad; padding-bottom: 10px;">
						<div class="col s3">標題</div>
						<div class="col s4">行事內容</div>
						<div class="col s2">事件日期</div>
						<div class="col s3">操作選項</div>
					</div>
					@foreach ($data as $cal)
					<div class='row'>
						<div class='col s3 cal-title-col' id='cal-title-{{ $cal->id }}'>{{ $cal->title }}</div>
						<div class='col s4 cal-content-col' id='cal-content-{{$cal->id}}'>{{ $cal->content }}</div>
						<div class='col s2 cal-date-col' id='cal-date-{{$cal->id}}'>{{$cal->event_date}}</div>
						<div class='col s3'>
							<a class='btn update-cal-trigger' data-id='{{ $cal->id }}' href='#cal-update-modal'>編輯</a>
							<a href="{{url('cal/delete/'.$cal->id)}}" class="waves-effect waves-light btn">刪除</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<!-- edit calender modal -->
			<div id="cal-update-modal" class="modal">
				<form id='cal-update-form' action='/cal/update/' method='POST'>
					<div class="modal-content">
						<h4>更新行事曆</h4>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="input-field col s12">
							<input id="cal-update-title" type="text" name='title' length="20" class="validate" required>
						</div>
						<div class="input-field col s12">
							<textarea id="cal-update-content" name='content' class="validate materialize-textarea" required></textarea>
						</div>
						<div class="input-field col s12">
							<input id='cal-update-date' name='date' type="date" class="datepicker validate" required>
						</div>
						<button type='submit' class="waves-effect waves-green btn">更新</button>
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">關閉</a>
					</div>
				</form>
			</div> <!-- edit calender modal -->
		</div><!--cal-tab-->
		@endif
	</div>
@stop
