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
				<li class="tab col s6"><a class='active' href="#ann-tab">公告</a></li>
				<li class="tab col s6"><a  href="#cal-tab">行事曆</a></li>
			</ul>
		</div>
		<div id="ann-tab" class="col s12">
			<div class='row'>
				<a id='ann-new-trigger' class='btn' href='#ann-new'><i class="material-icons left">chat_bubble_outline</i>新增公告</a>
				<div id="ann-new" class="modal">
					<form action='ann/new' method='POST'>
						<div class="modal-content">
							<h4>新增公告</h4>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row">
								<div class="input-field col s12">
									<input id="title" type="text" name='title' class="validate" required>
									<label for="title">標題</label>
								</div>
								<div class="input-field col s12">
									<input id="url" type="url" name='url' class="validate">
									<label for="url">文章頁面連結(對於類別為Q&amp;A)</label>
								</div>
								<div class="input-field col s12">
									<textarea id="content" class="materialize-textarea" name='content'></textarea>
									<label for="content">公告事項內容(對於類別為公告)</label>
								</div>
								<p>
									<input class='with-gap' name="category" type="radio" id="cat1" value="1" selected/>
									<label for="cat1">公告</label>
								</p>
								<p>
									<input class="with-gap" name="category" type="radio" value="2" id="cat2"/>
									<label for="cat2">Q&amp;A</label>
								</p>
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
						<div class="col s1">類別</div>
						<div class="col s2">標題</div>
						<div class="col s2">連結</div>
						<div class="col s4">文章內容</div>
						<div class="col s3">操作選項</div>
					</div>
					@foreach ($announcements as $ann)
					<div class='row'>
						<div class='col s1 ann-cat-col' id='ann-cat-{{ $ann->id }}'>
							@if($ann->category == 1)
								<span class='ann-tag-type1'>公告</span>
							@else
								<span class='ann-tag-type2'>Q&amp;A</span>
							@endif
						</div>
						<div class='col s2 ann-title-col' id='ann-title-{{ $ann->id }}'>{{ $ann->title }}</div>
						<div class='col s2 ann-url-col' id='ann-url-{{$ann->id}}'>&nbsp;{{ $ann->url }}</div>
						<div class='col s4 ann-content-col' id='ann-content-{{$ann->id}}'>&nbsp;{{$ann->content }}</div>
						<div class='col s3'>
							<a class='btn update-ann-trigger' data-id='{{ $ann->id }}' href='#ann-update-modal'>編輯</a>
							<a href="{{url('ann/delete/'.$ann->id)}}" class="waves-effect waves-light btn">刪除</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<!-- edit announcement modal -->
			<div id="ann-update-modal" class="modal">
				<form id='ann-update-form' action='ann/update/' method='POST'>
					<div class="modal-content">
						<h4>更新公告</h4>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row">
							<div class="input-field col s12">
								<input id="ann-update-title" type="text" name='title' class="validate" required>
								<label for="ann-update-title">標題</label>
							</div>
							<div class="input-field col s12">
								<input id="ann-update-url" type="text" name='url'>
								<label for="ann-update-url">文章頁面連結(對於類別為Q&amp;A)</label>
							</div>
							<div class="input-field col s12">
								<textarea id="ann-update-content" class="materialize-textarea" name='content'></textarea>
								<label for="ann-update-content">公告事項內容(對於類別為公告)</label>
							</div>
							<p>
								<input class='with-gap' name="category" type="radio" id="ann-update-cat1" value="1"/>
								<label for="ann-update-cat1">必讀</label>
							</p>
							<p>
								<input class="with-gap" name="category" type="radio" value="2" id="ann-update-cat2"/>
								<label for="ann-update-cat2">Q&amp;A</label>
							</p>
						</div>
					</div>
					<div class="modal-footer">
						<button type='submit' class="waves-effect waves-green btn">更新</button>
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">關閉</a>
					</div>
				</form>
			</div> <!-- edit announcement modal -->
		</div>
		<div id="cal-tab" class="col s12">
			<div class='row'>
				<a id='cal-new-trigger' class='btn' href='#cal-new'><i class="material-icons left">chat_bubble_outline</i>新增行事曆</a>
				<div id="cal-new" class="modal">
					<form action='cal/new' method='POST'>
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
					@foreach ($calenders as $cal)
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
				<form id='cal-update-form' action='cal/update/' method='POST'>
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
		</div>
	</div>
@stop
