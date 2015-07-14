@extends('layout')

@section('title', 'QAQ')

@section('css')
<style>
span.category {
    border-radius: 2px;
    background: #26A69A;
    color: #fff;
    padding: 5px;
}
.collection-item.active > .badge {
    color: #fff;
}
tbody>tr:hover, .solved {
    background-color: #f2f2f2;
}
td.shrink {
    white-space: nowrap;
}
td.expand {
    width: 99%;
}

.modal-footer > button {
    color: #fff;
}
</style>
@stop

@section('js')
<!--<script src=''></script> -->
<script src='{{asset("js/qa.js")}}'></script>
@stop

@section('content')
<div class="row">
    @foreach ($questions as $question)
    <div id="modal{{$question->id}}" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>{{ $question->title }}</h4>
            <p>{!! nl2br(e($question->content)) !!}</p>
        </div>
        <div class="modal-footer">
            <button class="modal-action modal-close waves-effect waves-light btn-flat red">關閉</button>
        </div>
    </div>
    @endforeach
    <table>
        <thead>
            <tr>
                <td class="shrink">類別</td>
                <td class="shrink">日期</td>
                <td class="expand">標題</td>
                <td class="shrink">檢視</td>
                <td class="shrink">狀態</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
                <tr class="{{$question->solved == true ? 'solved' : ''}}" id="row{{$question->id}}">
                    <td class="shrink"><span class="category">{{$categoryString[$question->category]}}</span></td>
                    <td class="shrink">{{ date('m-d', strtotime($question->created_at)) }}</td>
                    <td class="expand">{{ $question->title }}</td>
                    <td class="shrink">
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal{{$question->id}}">
                            <i class="small material-icons">visibility</i>
                        </a>
                    </td>
                    <td class="shrink center-align chk-mark">
                        <input type='checkbox' id="chk{{$question->id}}" {{$question->solved == true ? 'checked="checked"' : ''}}>
                        <label for="chk{{$question->id}}" data-id="{{$question->id}}" data-solved="{{!$question->solved}}">{{$solvedString[$question->solved]}}</label>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="center-align">
        @include('pagination.default', ['paginator' => $questions])
    </div>
</div>
@stop
