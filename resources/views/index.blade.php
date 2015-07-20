@extends('layout')

@section('title', 'NCU Fresh')
@section('css')
	<link type="text/css" rel="stylesheet" href="{{ asset('css/index.css') }}"  media="screen,projection"/>
@stop

@section('js')
	<script src='{{asset("js/index.js")}}'></script>
@stop

@section('content')
<div id='r1' class='row'>
	<div id='post-container' class="col s5">
		<div class="row">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s2"><a class="active" href="#test1">Tab1</a></li>
					<li class="tab col s2"><a  href="#test2">Tab2</a></li>
					<li class="tab col s2"><a href="#test3">Tab3</a></li>
				</ul>
			</div>
			<div id="test1" class="col s12 tab-content">
				<table class='bordered striped'>
					<tbody>
						<tr>
							<td ><span class='category cat1'>Alvin</span></td>
							<td>Eclair</td>
							<td>$0.87</td>
						</tr>
						<tr>
							<td ><span class='category cat2'>Alvin</span></td>
							<td>Eclair</td>
							<td>$0.87</td>
						</tr>
						<tr>
							<td ><span class='category cat2'>Alvin</span></td>
							<td>Eclair</td>
							<td>$0.87</td>
						</tr>
						<tr>
							<td ><span class='category cat1'>Alvin</span></td>
							<td>Eclair</td>
							<td>$0.87</td>
						</tr>
						<tr>
							<td ><span class='category cat1'>Alvin</span></td>
							<td>Eclair</td>
							<td>$0.87</td>
						</tr>
						<tr>
							<td ><span class='category cat2'>Alvin</span></td>
							<td>Eclair</td>
							<td>$0.87</td>
						</tr>
						<tr>
							<td ><span class='category cat2'>Alvin</span></td>
							<td>Eclair</td>
							<td>$0.87</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="test2" class="col s12 tab-content">Test 2</div>
			<div id="test3" class="col s12 tab-content">Test 3</div>
		</div>
	</div>
	<div id='slider-container'class="col s6">
		<div class="slider">
			<ul class="slides">
				<li>
					<img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
					<div class="caption center-align">
						<h3>This is our big Tagline!</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
				<li>
					<img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
					<div class="caption left-align">
						<h3>Left Aligned Caption</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
				<li>
					<img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
					<div class="caption right-align">
						<h3>Right Aligned Caption</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
				<li>
					<img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
					<div class="caption center-align">
						<h3>This is our big Tagline!</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div id='r2' class='row'>
	<div id='calender-container'>
		<div class="row">
			<div class="col s1 valign-wrapper arrow-container"><a class='waves-effect waves-light btn-flat valign'>&laquo;</a></div>
			<div class="col s10 valign-wrapper">
				<div id='event-container' class="row">
					<div id='event1' class='col s3 dick'></div>
					<div id='event2' class='col s3 dick'></div>
					<div id='event3' class='col s3 dick'></div>
					<div id='event4' class='col s3'></div>
				</div>
			</div>
			<div class="col s1 valign-wrapper"><span class='waves-effect waves-light btn-flat valign'>&raquo;</span></div>
		</div>
	</div>
</div>
@stop
