@extends('layout')

@section('title', '新生必讀')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/document/document_layout.css') }}"  media="screen,projection"/>
@stop

@section('content')
<ul id="main">
  <li class="main-list">
  	
    <a href="../announcement/">訊息公告
            <span class="fa fa-chevron-down"></span>
        </a>
    <ul id="announce">
      <li>
        <a href="../announcement/announce/?type_sort=1">系統停機</a>
      </li>
      <li>
        <a href="../announcement/announce/?type_sort=2">宿舍網路</a>
      </li>
      <li>
        <a href="../announcement/announce/?type_sort=3">訓練課程</a>
      </li>
      <li>
        <a href="../announcement/announce/?type_sort=4">資安訊息</a>
      </li>
      <li>
        <a href="../announcement/announce/?type_sort=5">行政公告</a>
      </li>
      <li>
        <a href="../announcement/announce/?type_sort=6">近期活動</a>
      </li>
      <li>
        <a href="../announcement/announce/?type_sort=7">徵才訊息</a>
      </li>
    </ul>
  </li>
  <li class="main-list">
    <a href="../introduction/">中心簡介
            <span class="fa fa-chevron-down"></span>
        </a>
    <ul id="intro">
      <li>
        <a href="../introduction/task/">歷史沿革</a>
      </li>
      <li>
        <a href="../introduction/deanship/">歷屆主管</a>
      </li>
      <li>
        <a href="../introduction/system/">組織架構</a>
      </li>
      <li>
        <a href="../introduction/member/">成員簡介</a>
      </li>
      <li>
        <a href="../introduction/plan/">任務說明</a>
      </li>
      <li>
        <a href="../introduction/resource/">軟硬體資源</a>
      </li>
      <li>
        <a href="../introduction/history/">大事紀</a>
      </li>
      <li>
        <a href="../introduction/structure/">網路架構</a>
      </li>
    </ul>
  </li>
  <li class="main-list">
    <a href="../faq/">常見問題
            <span class="fa fa-chevron-down"></span>
        </a>
    <ul id="faq">
      <li>
        <a href="../faq/account_service/">Email</a>
      </li>
      <li>
        <a href="../faq/account_service_portal/">Portal</a>
      </li>
      <li>
        <a href="../faq/ncuca/">授權軟體</a>
      </li>
      <li>
        <a href="../faq/dormnet/">宿舍網路</a>
      </li>
      <li>
        <a href="../faq/wireless/">無線網路</a>
      </li>
      <li>
        <a href="../faq/personal_website/">網頁空間</a>
      </li>
      <li>
        <a href="../faq/vpn/">VPN</a>
      </li>
      <li>
        <a href="../faq/graduate/">畢業生相關</a>
      </li>
      <li>
        <a href="../faq/staff/">教職員相關</a>
      </li>
    </ul>
  </li>
  <li class="main-list">
    <a href="../form/">表單下載</a>
  </li>
</ul>
<!--@yield('')-->
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
@stop