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
					<form action='admin/ann/new' method='POST'>
						<div class="modal-content">
							<h4>新增公告</h4>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row">
								<div class="input-field col s12">
									<input id="title" type="text" name='title' class="validate" required>
									<label for="title">公告標題</label>
								</div>
								<div class="input-field col s12">
									<input id="url" type="url" name='url' class="validate" required>
									<label for="url">文章連結</label>
								</div>
									<p>
										<input class='with-gap' name="category" type="radio" id="cat1" value="1" selected/>
										<label for="cat1">必讀</label>
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
					@foreach ($announcements as $ann)
					<div class='row'>
						<div class='col s1 ann-cat-col' id='ann-cat-{{ $ann->id }}'>
							@if($ann->category == 1)
								<span class='ann-tag-type1'>Q&amp;A</span>
							@else
								<span class='ann-tag-type2'>公告</span>
							@endif
						</div>
						<div class='col s4 ann-title-col' id='ann-title-{{ $ann->id }}'>{{ $ann->title }}</div>
						<div class='col s3 ann-url-col' id='ann-url-{{$ann->id}}'>{{ $ann->url }}</div>
						<div class='col s4'>
							<a class='btn update-ann-trigger' data-id='{{ $ann->id }}' href='#ann-update-modal'>編輯</a>
							<a href="{{url('admin/ann/delete/'.$ann->id)}}" class="waves-effect waves-light btn">刪除</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<!-- edit announcement modal -->
			<div id="ann-update-modal" class="modal">
				<form id='ann-update-form' action='admin/ann/update/' method='POST'>
					<div class="modal-content">
						<h4>更新公告</h4>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row">
							<div class="input-field col s12">
								<input id="ann-update-title" type="text" name='title' class="validate" required>
							</div>
							<div class="input-field col s12">
								<input id="ann-update-url" type="url" name='url' class="validate" required>
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
				<a id='cal-new-trigger' class='btn' href='#cal-new'><i class="material-icons left">chat_bubble_outline</i>新增Calender</a>
				<div id="cal-new" class="modal">
					<form action='admin/cal/new' method='POST'>
						<div class="modal-content">
							<h4>新增Calender</h4>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row">
								<div class="input-field col s12">
									<input id="cal-title" type="text" name='title' class="validate" required>
									<label for="cal-title">Caledner標題</label>
								</div>
								<div class="input-field col s12">
									<textarea id="cal-content" name='content' class="validate materialize-textarea" required></textarea>
									<label for="cal-content">Content</label>
								</div>
								<div class="input-field col s12">
									<input id='cal-date' name='date' type="date" required>
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
					@foreach ($calenders as $cal)
					<div class='row'>
						<div class='col s3 cal-title-col' id='cal-title-{{ $cal->id }}'>{{ $cal->title }}</div>
						<div class='col s4 cal-content-col' id='cal-content-{{$cal->id}}'>{{ $cal->content }}</div>
						<div class='col s2 cal-date-col' id='cal-date-{{$cal->id}}'>{{$cal->event_date}}</div>
						<div class='col s3'>
							<a class='btn update-cal-trigger' data-id='{{ $cal->id }}' href='#cal-update-modal'>編輯</a>
							<a href="{{url('admin/cal/delete/'.$cal->id)}}" class="waves-effect waves-light btn">刪除</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<!-- edit calender modal -->
			<div id="cal-update-modal" class="modal">
				<form id='cal-update-form' action='admin/cal/update/' method='POST'>
					<div class="modal-content">
						<h4>更新Calender</h4>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row">
							<div class="input-field col s12">
								<input id="cal-update-title" type="text" name='title' class="validate" required>
							</div>
							<div class="input-field col s12">
								<textarea id="cal-update-content" name='content' class="validate materialize-textarea" required></textarea>
							</div>
							<div class="input-field col s12">
								<input id='cal-update-date' name='date' type="date" class="datepicker validate" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type='submit' class="waves-effect waves-green btn">更新</button>
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">關閉</a>
					</div>
				</form>
			</div> <!-- edit calender modal -->
		</div>
	</div>
@stop
