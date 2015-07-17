@extends('layout')

@section('title', '新生必讀')

@section('css')
<!--link type="text/css" rel="stylesheet" href="{{ asset('css/document/document_layout.css') }}"  media="screen,projection"-->
@stop

@section('content')
<!--選單-->
<!-- Dropdown Trigger -->
  <a class='dropdown-button btn' data-beloworigin="true" href='document/1' data-activates='dd1'>大學部新生註冊須知</a>
  <ul id='dd1' class='dropdown-content'>
    <li><a href="document/1/1"><h5><ins><strong>學籍</strong></ins></h5></a>
      <div>
        <ul>
          <li><a href="document/1/1/1">學籍資料登錄 (全部學生，休學前已完成者仍須登入做資料確認)</a></li>
          <li><a href="document/1/1/2">學籍注意事項</a></li>
        </ul>
      </div>
    </li>
    <li><a href="document/1/2"><h5><ins><strong>繳費</strong></ins></h5></a>
      <div>
        <ul>
          <li><a href="document/1/2/1">繳費(全部學生)</a></li>
          <li><a href="document/1/2/2">退費標準 (繳費後申請 休、退學者)</a></li>
          <li><a href="document/1/2/3">境外生應加辦事項(境外生)</a></li>
          <li><a href="document/1/2/4">就學貸款(有需要者)</a></li>
          <li><a href="document/1/2/5">弱勢學生助學計畫(符合資格者)</a></li>
          <li><a href="document/1/2/6">學雜費專區</a></li>
        </ul>
      </div>
    </li>
    <li><a href="document/1/3"><h5><ins><strong>兵役</strong></ins></h5></a>
      <div>
        <ul>
          <li><a href="document/1/3">凡男生(含復學生)均應注意下列事項，以確保自身權益：</a></li>
          <li><a href="document/1/3">兵役資料繳交時程</a></li>
          <li><a href="document/1/3">大專校院役男申請二階段常備兵役軍事訓練須知</a></li>
          <li><a href="document/1/3">兵役資料表 (凡本國籍男生皆須填交)</a></li>
        </ul>
      </div>
    </li>
    <li><a href="14"><h5><ins><strong>住宿</strong></ins></h5></a>
      <div>
        <ul>
          <li><a href="141">住宿申請(有需要者)</a></li>
          <li><a href="142">住宿生活規範事項及宿舍設施使用規定</a></li>
        </ul>
      </div>
    </li>
    <li><a href="15"><h5><ins><strong>學生證</strong></ins></h5></a>
      <div>
        <ul>
          <li><a href="151">繳交學歷證件、身分證件 (大一新生)</a></li>
          <li><a href="152">領取學生證 (完成註冊程序者)</a></li>
        </ul>
      </div>
    </li>
    <li><a href="16"><h5><ins><strong>其他注意事項(大學部)</strong></ins></h5></a></li>
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" href="2" data-activates='dd2'>研究所新生須知</a>
  <ul id='dd2' class='dropdown-content'>
    <li><a href="21">學籍</a>
      <div>
        <ul>
          <li><a href="211">學籍資料登錄 (全部新生)</a></li>
          <li><a href="212">學籍注意事項</a></li>
        </ul>
      </div>
    </li>
    <li><a href="22">繳費</a>
      <div>
        <ul>
          <li><a href="221">繳費(全部學生)</a></li>
          <li><a href="222">退費標準 (繳費後申請 休、退學者)</a></li>
          <li><a href="223">境外生應加辦事項(境外生)</a></li>
          <li><a href="224">就學貸款(有需要者)</a></li>
          <li><a href="225">弱勢學生助學計畫(符合資格者)</a></li>
          <li><a href="226">學雜費專區</a></li>
        </ul>
      </div>
    </li>
    <li><a href="23">兵役</a>
      <div>
        <ul>
          <li><a href="231">兵役事宜(本國籍男生)</a></li>
          <li><a href="232">兵役資料繳交時程</a></li>
          <li><a href="233">大專校院役男申請二階段常備兵役軍事訓練須知</a></li>
          <li><a href="234">兵役資料表 (凡本國籍男生皆須填交)</a></li>
        </ul>
      </div>
    </li>
    <li><a href="24">住宿</a>
      <div>
        <ul>
          <li><a href="241">住宿申請(有需要者)</a></li>
          <li><a href="242">住宿生活規範事項及宿舍設施使用規定</a></li>
        </ul>
      </div>
    </li>
    <li><a href="25">學生證</a>
      <div>
        <ul>
          <li><a href="251"></a></li>
        </ul>
      </div>
    </li>
    <li><a href="26">其他注意事項(研究所)</a>
    </li>
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" href='3' data-activates='dd3'>輔導及活動專區</a>
  <ul id='dd3' class='dropdown-content'>
    <li><a href="31">大一新生周</a></li>
    <li><a href="32">大一周會</a></li>
    <li><a href="33">心理輔導</a></li>
    <li><a href="34">104學年度全校大一親師座談會</a></li>
    <li><a href="35">學生學習輔導機制</a></li>
    <li><a href="36">導師輔導</a></li>
    <li><a href="37">104年特殊教育服務</a></li>
    <li><a href="38">性別平等教育委員會網站</a></li>
    <li><a href="39">研究生新生座談 (全部新生)</a></li>
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" href='4' data-activates='dd4'>生活相關須知</a>
  <ul id='dd4' class='dropdown-content'>
    <li><a href="41">大一選課與共同必修</a></li>
    <li><a href="42">學生申訴評議委員會</a></li>
    <li><a href="43">圖書館</a></li>
    <li><a href="44">電算中心</a></li>
    <li><a href="45">宿舍服務中心</a></li>
    <li><a href="46">服務學習</a></li>
    <li><a href="47">智慧財產權</a></li>
    <li><a href="48">簽署啟用圖書館服務 (全部學生)</a></li>
    <li><a href="49">學生掛號郵件</a></li>
  </ul>
  <a class='dropdown-button btn' data-beloworigin="true" href='5' data-activates='dd5'>文件及下載專區</a>
  <ul id='dd5' class='dropdown-content'>
    <li><a href="51">104學年新生報到車輛通行證</a></li>
    <li><a href="52">104年大一新生入住交通管制圖及報到流程</a></li>
  </ul>

  <a class="waves-effect waves-light btn" href="document/ckeditor">新增</a>
  <a class="waves-effect waves-light btn">編輯</a>
  <a class="waves-effect waves-light btn">刪除</a>
@yield('text')
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
@stop