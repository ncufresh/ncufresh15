@extends('layout')

@section('title', 'Admin')

@section('css')
@stop

@section('js')
	<script src="{{ asset('js/admin.js') }}"></script>
@stop

@section('content')
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab col s6"><a class='active' href="#test1">公告</a></li>
				<li class="tab col s6"><a  href="#test2">行事曆</a></li>
			</ul>
		</div>
		<div id="test1" class="col s12">
			<div class='row'>
				<div class='col s10'>
					<h5>公告事項</h5>
				</div>
				<div class='col s2'>
					<a class='btn ann-new-trigger' href='#ann-new'>新增公告</a>
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
				</div>
				<table class='responsive-table'>
					<thead>
						<tr>
							<th data-field="id">Category</th>
							<th data-field="name">Title</th>
							<th data-field="price">Url</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($announcements as $ann)
						<tr>
							<td>{{ $ann->category }}</td>
							<td>{{ $ann->title }}</td>
							<td>{{ $ann->url }}</td>
							<td>
								<a  class='btn update-ann-trigger' href='#ann-update'>Edit</a>
								<div id="ann-update" class="modal">
									<form action='admin/ann/update/' method='POST'>
										<div class="modal-content">
											<h4>Update Announcement</h4>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<div class="row">
												<div class="input-field col s12">
													<input id="ann-update-title" type="text" name='title' class="validate" required>
													<label for="ann-update-title">公告標題</label>
												</div>
												<div class="input-field col s12">
													<input id="ann-update-url" type="url" name='url' class="validate" required>
													<label for="ann-update-url">文章連結</label>
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
											<button type='submit' class="waves-effect waves-green btn">Update</button>
											<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">關閉</a>
										</div>
									</form>
								</div>
							</td>
							<td><a href="{{url('admin/ann/delete/'.$ann->id)}}" class="waves-effect waves-light btn">Delete</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div id="test2" class="col s12">Calender</div>
	</div>
@stop
