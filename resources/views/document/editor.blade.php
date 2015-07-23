@extends('document\document_layout')

@section('title', '公告編輯')

@section('css')
<style type="text/css">
td {
	  border: 1px solid #989090;
}
</style>
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/document/document_layout.js') }}"></script>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/document/editor.js') }}"></script>
@stop

@section('text')
<br>
<div id="ckeditor">
	<label>分頁</label>
    <select id="mySelect" class="browser-default">
    	<option value="" disabled selected><ins><strong>大學部新生註冊須知</strong></ins></option>
    	<option value="" disabled selected>學籍</option>
    	@foreach($cate_1 as $cate_1)
    	<option value="{{ $cate_1->id }}">{{ $cate_1->title }}</option>
    	@endforeach
    	<option value="" disabled selected>繳費</option>
    	@foreach($cate_2 as $cate_2)
    	<option value="{{ $cate_2->id }}">{{ $cate_2->title }}</option>
    	@endforeach
    	<option value="" disabled selected>兵役</option>
    	@foreach($cate_3 as $cate_3)
    	<option value="{{ $cate_3->id }}">{{ $cate_3->title }}</option>
    	@endforeach
    	<option value="" disabled selected>住宿</option>
    	@foreach($cate_4 as $cate_4)
    	<option value="{{ $cate_4->id }}">{{ $cate_4->title }}</option>
    	@endforeach
    	<option value="" disabled selected>學生證</option>
    	@foreach($cate_5 as $cate_5)
    	<option value="{{ $cate_5->id }}">{{ $cate_5->title }}</option>
    	@endforeach
    	<option value="" disabled selected>其他注意事項(大學部)</option>
    	@foreach($cate_6 as $cate_6)
    	<option value="{{ $cate_6->id }}">{{ $cate_6->title }}</option>
    	@endforeach

    	<option value="" disabled selected>研究所新生須知</option>
    	<option value="" disabled selected>學籍</option>
    	@foreach($cate_7 as $cate_7)
    	<option value="{{ $cate_7->id }}">{{ $cate_7->title }}</option>
    	@endforeach
    	<option value="" disabled selected>繳費</option>
    	@foreach($cate_8 as $cate_8)
    	<option value="{{ $cate_8->id }}">{{ $cate_8->title }}</option>
    	@endforeach
    	<option value="" disabled selected>兵役</option>
    	@foreach($cate_9 as $cate_9)
    	<option value="{{ $cate_9->id }}">{{ $cate_9->title }}</option>
    	@endforeach
    	<option value="" disabled selected>住宿</option>
    	@foreach($cate_10 as $cate_10)
    	<option value="{{ $cate_10->id }}">{{ $cate_10->title }}</option>
    	@endforeach
    	<option value="" disabled selected>學生證</option>
    	@foreach($cate_11 as $cate_11)
    	<option value="{{ $cate_11->id }}">{{ $cate_11->title }}</option>
    	@endforeach
    	<option value="" disabled selected>其他注意事項(研究所)</option>
    	@foreach($cate_12 as $cate_12)
    	<option value="{{ $cate_12->id }}">{{ $cate_12->title }}</option>
    	@endforeach
    	
    	<option value="" disabled selected>新生周</option>
    	@foreach($cate_13 as $cate_13)
    	<option value="{{ $cate_13->id }}">{{ $cate_13->title }}</option>
    	@endforeach

    	<option value="" disabled selected>輔導及活動專區</option>
    	@foreach($cate_14 as $cate_14)
    	<option value="{{ $cate_14->id }}">{{ $cate_14->title }}</option>
    	@endforeach

    	<option value="" disabled selected>生活相關須知</option>
    	@foreach($cate_15 as $cate_15)
    	<option value="{{ $cate_15->id }}">{{ $cate_15->title }}</option>
    	@endforeach

    	<option value="" disabled selected>文件及下載專區</option>
    	@foreach($cate_16 as $cate_16)
    	<option value="{{ $cate_16->id }}">{{ $cate_16->title }}</option>
    	@endforeach
    </select>
    <br>
    <textarea name="editor1" id="editor1" rows="10" cols="80" ></textarea>
    <input type="button" value="完成" id="text_done">

</div>
<div id="text"></div>
@stop

