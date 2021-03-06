@extends('document.document_layout')

@section('document_js')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/document/editor.js') }}"></script>
@stop

@section('text')
@permission('management')
<br>
<div id="ckeditor">
	<label>分頁</label>
    <select id="mySelect" class="browser-default">
    	<option value="" disabled  {{isset($id)?'':'selected="selected"'}}>學士班新生註冊摘要</option>
        <option value="" disabled>重要日程</option>
        @foreach($cate_1 as $cate_1)
        <option value="{{ $cate_1->id }}" {{ isset($id) && $id==$cate_1->id?'selected="selected"':''}}>{{ $cate_1->title }}</option>
        @endforeach
    	<option value="" disabled>學籍</option>
    	@foreach($cate_2 as $cate_2)
    	<option value="{{ $cate_2->id }}" {{ isset($id) && $id==$cate_2->id?'selected="selected"':''}}>{{ $cate_2->title }}</option>
    	@endforeach
    	<option value="" disabled>繳費</option>
    	@foreach($cate_3 as $cate_3)
    	<option value="{{ $cate_3->id }}" {{ isset($id) && $id==$cate_3->id?'selected="selected"':''}}>{{ $cate_3->title }}</option>
    	@endforeach
    	<option value="" disabled>兵役</option>
    	@foreach($cate_4 as $cate_4)
    	<option value="{{ $cate_4->id }}" {{ isset($id) && $id==$cate_4->id?'selected="selected"':''}}>{{ $cate_4->title }}</option>
    	@endforeach
    	<option value="" disabled>住宿</option>
    	@foreach($cate_5 as $cate_5)
    	<option value="{{ $cate_5->id }}" {{ isset($id) && $id==$cate_5->id?'selected="selected"':''}}>{{ $cate_5->title }}</option>
    	@endforeach
    	<option value="" disabled>學生證</option>
    	@foreach($cate_6 as $cate_6)
    	<option value="{{ $cate_6->id }}" {{ isset($id) && $id==$cate_6->id?'selected="selected"':''}}>{{ $cate_6->title }}</option>
    	@endforeach
    	<option value="" disabled>其他注意事項</option>
    	@foreach($cate_7 as $cate_7)
    	<option value="{{ $cate_7->id }}" {{ isset($id) && $id==$cate_7->id?'selected="selected"':''}}>{{ $cate_7->title }}</option>
    	@endforeach

    	<option value="" disabled  >研究所新生註冊摘要</option>
        <option value="" disabled>重要日程</option>
        @foreach($cate_8 as $cate_8)
        <option value="{{ $cate_8->id }}" {{ isset($id) && $id==$cate_8->id?'selected="selected"':''}}>{{ $cate_8->title }}</option>
        @endforeach
    	<option value="" disabled>學籍</option>
    	@foreach($cate_9 as $cate_9)
    	<option value="{{ $cate_9->id }}" {{ isset($id) && $id==$cate_9->id?'selected="selected"':''}}>{{ $cate_9->title }}</option>
    	@endforeach
    	<option value="" disabled>繳費</option>
    	@foreach($cate_10 as $cate_10)
    	<option value="{{ $cate_10->id }}" {{ isset($id) && $id==$cate_10->id?'selected="selected"':''}}>{{ $cate_10->title }}</option>
    	@endforeach
    	<option value="" disabled>兵役</option>
    	@foreach($cate_11 as $cate_11)
    	<option value="{{ $cate_11->id }}" {{ isset($id) && $id==$cate_11->id?'selected="selected"':''}}>{{ $cate_11->title }}</option>
    	@endforeach
    	<option value="" disabled>住宿</option>
    	@foreach($cate_12 as $cate_12)
    	<option value="{{ $cate_12->id }}" {{ isset($id) && $id==$cate_12->id?'selected="selected"':''}}>{{ $cate_12->title }}</option>
    	@endforeach
    	<option value="" disabled>學生證</option>
    	@foreach($cate_13 as $cate_13)
    	<option value="{{ $cate_13->id }}" {{ isset($id) && $id==$cate_13->id?'selected="selected"':''}}>{{ $cate_13->title }}</option>
    	@endforeach
    	<option value="" disabled>其他注意事項</option>
    	@foreach($cate_14 as $cate_14)
    	<option value="{{ $cate_14->id }}" {{ isset($id) && $id==$cate_14->id?'selected="selected"':''}}>{{ $cate_14->title }}</option>
    	@endforeach
    	<option value="" disabled>新生週</option>
    	@foreach($cate_15 as $cate_15)
    	<option value="{{ $cate_15->id }}" {{ isset($id) && $id==$cate_15->id?'selected="selected"':''}}>{{ $cate_15->title }}</option>
    	@endforeach

    	<option value="" disabled>輔導及活動專區</option>
    	@foreach($cate_16 as $cate_16)
    	<option value="{{ $cate_16->id }}" {{ isset($id) && $id==$cate_16->id?'selected="selected"':''}}>{{ $cate_16->title }}</option>
    	@endforeach

    	<option value="" disabled>學習及生活相關須知</option>
    	@foreach($cate_17 as $cate_17)
    	<option value="{{ $cate_17->id }}" {{ isset($id) && $id==$cate_17->id?'selected="selected"':''}}>{{ $cate_17->title }}</option>
    	@endforeach

    	@foreach($cate_18 as $cate_18)
    	<option value="{{ $cate_18->id }}" {{ isset($id) && $id==$cate_18->id?'selected="selected"':''}}>{{ $cate_18->title }}</option>
    	@endforeach

        @foreach($cate_19 as $cate_19)
        <option value="{{ $cate_19->id }}" {{ isset($id) && $id==$cate_19->id?'selected="selected"':''}}>{{ $cate_19->title }}</option>
        @endforeach
    </select>
    <br>
    <div class="row">
        <div class="input-field col s6">
            <input value="{{ isset($title)?$title:'' }}" id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">First Name</label>
        </div>
    </div>
    <br>
    <textarea name="editor1" id="editor1" rows="10" cols="80" >{{isset($content)?$content:''}}</textarea>
    <input type="button" value="完成" id="text_done">

</div>
<h5 id="title"></h5>
<div id="text"></div>
@endpermission
@stop
