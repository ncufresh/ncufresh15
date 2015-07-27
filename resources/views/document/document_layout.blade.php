@extends('layout')

@section('title', '新生必讀')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/document/document_layout.css') }}"  media="screen,projection"/>
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
@stop

@section('content')
<!--選單-->
<div class="row">
  <div class="col m3 s12">
      <ul class="collapsible" data-collapsible="expandable">
        <li class="list_1">
          <div class="collapsible-header">大學部新生註冊須知</div>
          <div>
            <ul>
              <li class="list_2"><a href="/document/university/1">重要日程</a></li>
              <li class="list_2"><a href="/document/university/2">學籍</a></li>
              <li class="list_2"><a href="/document/university/3">繳費</a></li>
              <li class="list_2"><a href="/document/university/4">兵役</a></li>
              <li class="list_2"><a href="/document/university/5">住宿</a></li>
              <li class="list_2"><a href="/document/university/6">學生證</a></li>
              <li class="list_2"><a href="/document/university/7">其他注意事項(大學部)</a></li>
            </ul>
          </div>
        </li>
        <li class="list_1">
          <div class="collapsible-header">研究所新生須知</div>
          <div>
            <ul>
              <li class="list_2"><a href="/document/graduate/1">重要日程</a></li>
              <li class="list_2"><a href="/document/graduate/2">學籍</a></li>
              <li class="list_2"><a href="/document/graduate/3">繳費</a></li>
              <li class="list_2"><a href="/document/graduate/4">兵役</a></li>
              <li class="list_2"><a href="/document/graduate/5">住宿</a></li>
              <li class="list_2"><a href="/document/graduate/6">學生證</a></li>
              <li class="list_2"><a href="/document/graduate/7">其他注意事項(研究所)</a></li>
            </ul>
          </div>
        </li>
        <li class="list_1">
          <div class="collapsible-header"><a id="freshmen_week">新生周</a></div>
        </li>
        <li class="list_1">
          <div class="collapsible-header"><a id="activity">輔導及活動專區</a></div>
        </li>
        <li class="list_1">
          <div class="collapsible-header"><a id="daily">生活相關須知</a></div>
        </li>
        <li class="list_1">
          <div class="collapsible-header"><a id="download">文件及下載專區</a></div>
        </li>
        <li class="list_1">
          <div class="collapsible-header"><a id="contact">聯絡我們</a></div>
        </li>
      </ul>
    <a class="waves-effect waves-light btn" href="/document/ckeditor">編輯</a>
  </div>
  <div class="col m9 s12">
    @yield('text')
  </div>
</div>

@stop

