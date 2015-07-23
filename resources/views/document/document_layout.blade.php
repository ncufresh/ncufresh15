@extends('layout')

@section('title', '新生必讀')

@section('css')
<!--link type="text/css" rel="stylesheet" href="{{ asset('css/document/document_layout.css') }}"  media="screen,projection"-->
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
@stop

@section('content')
<!--選單-->
<!-- Dropdown Trigger -->
  <a class='dropdown-button btn' data-beloworigin="true" data-activates='dd1' id="university">大學部新生註冊須知</a>
  <ul id='dd1' class='dropdown-content'>
    <li><a href="/document/university/1">學籍</a></li>
    <li><a href="/document/university/2">繳費</a></li>
    <li><a href="/document/university/3">兵役</a></li>
    <li><a href="/document/university/4">住宿</a></li>
    <li><a href="/document/university/5">學生證</a></li>
    <li><a href="/document/university/6">其他注意事項(大學部)</a></li>
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" href="/document/graduate" data-activates='dd2' id="graduate">研究所新生須知</a>
  <ul id='dd2' class='dropdown-content'>
    <li><a href="/document/graduate/1">學籍</a></li>
    <li><a href="/document/graduate/2">繳費</a></li>
    <li><a href="/document/graduate/3">兵役</a></li>
    <li><a href="/document/graduate/4">住宿</a></li>
    <li><a href="/document/graduate/5">學生證</a></li>
    <li><a href="/document/graduate/6">其他注意事項(研究所)</a></li>
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" id="freshmen_week">新生周</a>
  <a class='dropdown-button btn' data-beloworigin="true" id="activity">輔導及活動專區</a>
  <a class='dropdown-button btn' data-beloworigin="true" id="daily">生活相關須知</a>
  <a class='dropdown-button btn' data-beloworigin="true" id="download">文件及下載專區</a>

  <a class="waves-effect waves-light btn" href="/document/ckeditor">編輯</a>
@yield('text')
@stop

