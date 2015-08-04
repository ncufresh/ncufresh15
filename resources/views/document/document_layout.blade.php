@extends('layout')

@section('title', '新生必讀')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/document/document.css') }}"  media="screen,projection"/>
<style type="text/css">
#container {
  background: url('{{asset("img/document/puzzle.png")}}') right top no-repeat ,-ms-linear-gradient(left,rgba(245, 245, 245, 0.7),rgb(172, 216, 250));
  background: url('{{asset("img/document/puzzle.png")}}') right top no-repeat ,-webkit-linear-gradient(left,rgba(245, 245, 245, 0.7),rgb(172, 216, 250)); 
  background: url('{{asset("img/document/puzzle.png")}}') right top no-repeat ,-moz-linear-gradient(left,rgba(245, 245, 245, 0.7),rgb(172, 216, 250)); 
  background: url('{{asset("img/document/puzzle.png")}}') right top no-repeat ,-o-linear-gradient(left,rgba(245, 245, 245, 0.7),rgb(172, 216, 250)); 
  background-size: auto 100%;
}
</style>
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
@yield('document_js')
@stop

@section('content')
<!--選單-->
<div class="row">
  <div class="col l3 m12 s12">
      <ul class="collapsible" data-collapsible="expandable">
        <li class="list_1">
          <div class="collapsible-header">學士班新生註冊摘要</div>
          <div>
            <ul>
              <li><a class="list_2" href="/document/university/1">重要日程</a></li>
              <li><a class="list_2" href="/document/university/2">學籍</a></li>
              <li><a class="list_2" href="/document/university/3">繳費</a></li>
              <li><a class="list_2" href="/document/university/4">兵役</a></li>
              <li><a class="list_2" href="/document/university/5">住宿</a></li>
              <li><a class="list_2" href="/document/university/6">學生證</a></li>
              <li><a class="list_2" href="/document/university/7">其他注意事項</a></li>
            </ul>
          </div>
        </li>
        <li class="list_1">
          <div class="collapsible-header">研究所新生註冊摘要</div>
          <div>
            <ul>
              <li><a class="list_2" href="/document/graduate/1">重要日程</a></li>
              <li><a class="list_2" href="/document/graduate/2">學籍</a></li>
              <li><a class="list_2" href="/document/graduate/3">繳費</a></li>
              <li><a class="list_2" href="/document/graduate/4">兵役</a></li>
              <li><a class="list_2" href="/document/graduate/5">住宿</a></li>
              <li><a class="list_2" href="/document/graduate/6">學生證</a></li>
              <li><a class="list_2" href="/document/graduate/7">其他注意事項</a></li>
            </ul>
          </div>
        </li>
        <li class="list_1">
          <div class="collapsible-header"><a id="freshmen_week" class="link_1">新生週</a></div>
        </li>
        <li class="list_1">
          <div class="collapsible-header"><a id="activity" class="link_1">輔導及活動專區</a></div>
        </li>
        <li class="list_1">
          <div class="collapsible-header"><a id="daily" class="link_1">學習及生活相關須知</a></div>
        </li>
        <li class="list_1">
          <div class="collapsible-header"><a id="download" class="link_1">文件及下載專區</a></div>
        </li>
        <li class="list_1">
          <div class="collapsible-header"><a id="contact" class="link_1">聯絡我們</a></div>
        </li>
      </ul>
    @permission('management')
    <a class="waves-effect waves-light btn" href="/document/ckeditor">編輯</a>
    @endpermission
  </div>
  <div class="col l9 m12 s12">
    @yield('text')
  </div>
</div>

@stop

