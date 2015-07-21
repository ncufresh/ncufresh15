@extends('layout')

@section('title', '新生必讀')

@section('css')
<!--link type="text/css" rel="stylesheet" href="{{ asset('css/document/document_layout.css') }}"  media="screen,projection"-->
@stop

@section('content')
<!--選單-->
<!-- Dropdown Trigger -->
  <a class='dropdown-button btn' data-beloworigin="true" href="" data-activates='dd1'>大學部新生註冊須知</a>
  <ul id='dd1' class='dropdown-content'>
    <li><a href=""><h5><ins><strong>學籍</strong></ins></h5></a>
      <div>
        <ul>
          @foreach($cat_1 as $cat_1)
          <li><a href="/document/{{$cat_1->page_id}}/{{$cat_1->page_id_2}}/{{$cat_1->id}}">{{$cat_1->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li><a href=""><h5><ins><strong>繳費</strong></ins></h5></a>
      <div>
        <ul>
          @foreach($cat_2 as $cat_2)
          <li><a href="/document/{{$cat_2->page_id}}/{{$cat_2->page_id_2}}/{{$cat_2->id}}">{{$cat_2->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li><a href=""><h5><ins><strong>兵役</strong></ins></h5></a>
      <div>
        <ul>
          @foreach($cat_3 as $cat_3)
          <li><a href="/document/{{$cat_3->page_id}}/{{$cat_3->page_id_2}}/{{$cat_3->id}}">{{$cat_3->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li><a href=""><h5><ins><strong>住宿</strong></ins></h5></a>
      <div>
        <ul>
          @foreach($cat_4 as $cat_4)
          <li><a href="/document/{{$cat_4->page_id}}/{{$cat_4->page_id_2}}/{{$cat_4->id}}">{{$cat_4->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li><a href=""><h5><ins><strong>學生證</strong></ins></h5></a>
      <div>
        <ul>
          @foreach($cat_5 as $cat_5)
          <li><a href="/document/{{$cat_5->page_id}}/{{$cat_5->page_id_2}}/{{$cat_5->id}}">{{$cat_5->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li><a href=""><h5><ins><strong>其他注意事項(大學部)</strong></ins></h5></a></li>
      <div>
        <ul>
          @foreach($cat_6 as $cat_6)
          <li><a href="/document/{{$cat_6->page_id}}/{{$cat_6->page_id_2}}/{{$cat_6->id}}">{{$cat_6->title}}</a></li>
          @endforeach
        </ul>
      </div>
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" href="" data-activates='dd2'>研究所新生須知</a>
  <ul id='dd2' class='dropdown-content'>
    <li><a href="">學籍</a>
      <div>
        <ul>
          @foreach($cat_7 as $cat_7)
          <li><a href="/document/{{$cat_7->page_id}}/{{$cat_7->page_id_2}}/{{$cat_7->id}}">{{$cat_7->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li><a href="">繳費</a>
      <div>
        <ul>
          @foreach($cat_8 as $cat_8)
          <li><a href="/document/{{$cat_8->page_id}}/{{$cat_8->page_id_2}}/{{$cat_8->id}}">{{$cat_8->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li><a href="">兵役</a>
      <div>
        <ul>
          @foreach($cat_9 as $cat_9)
          <li><a href="/document/{{$cat_9->page_id}}/{{$cat_9->page_id_2}}/{{$cat_9->id}}">{{$cat_9->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li><a href="">住宿</a>
      <div>
        <ul>
          @foreach($cat_10 as $cat_10)
          <li><a href="/document/{{$cat_10->page_id}}/{{$cat_10->page_id_2}}/{{$cat_10->id}}">{{$cat_10->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li><a href="">學生證</a>
      <div>
        <ul>
          @foreach($cat_11 as $cat_11)
          <li><a href="/document/{{$cat_11->page_id}}/{{$cat_11->page_id_2}}/{{$cat_11->id}}">{{$cat_11->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    <li><a href="">其他注意事項(研究所)</a>
      <div>
        <ul>
          @foreach($cat_12 as $cat_12)
          <li><a href="/document/{{$cat_12->page_id}}/{{$cat_12->page_id_2}}/{{$cat_12->id}}">{{$cat_12->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" href="" data-activates='dd3'>新生周</a>
  <ul id='dd3' class='dropdown-content'>
    @foreach($cat_13 as $cat_13)
    <li><a href="/document/{{$cat_13->page_id}}/{{$cat_13->page_id_2}}/{{$cat_13->id}}">{{$cat_13->title}}</a></li>
    @endforeach
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" href="" data-activates='dd3'>輔導及活動專區</a>
  <ul id='dd3' class='dropdown-content'>
    @foreach($cat_14 as $cat_14)
    <li><a href="/document/{{$cat_14->page_id}}/{{$cat_14->page_id_2}}/{{$cat_14->id}}">{{$cat_14->title}}</a></li>
    @endforeach
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" href="" data-activates='dd4'>生活相關須知</a>
  <ul id='dd4' class='dropdown-content'>
    @foreach($cat_15 as $cat_15)
    <li><a href="/document/{{$cat_15->page_id}}/{{$cat_15->page_id_2}}/{{$cat_15->id}}">{{$cat_15->title}}</a></li>
    @endforeach
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" href="" data-activates='dd5'>文件及下載專區</a>
  <ul id='dd5' class='dropdown-content'>
    @foreach($cat_16 as $cat_16)
    <li><a href="/document/{{$cat_16->page_id}}/{{$cat_16->page_id_2}}/{{$cat_16->id}}">{{$cat_16->title}}</a></li>
    @endforeach
  </ul>

  <a class="waves-effect waves-light btn" href="/document/ckeditor">編輯</a>
@yield('text')
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
@stop