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
tbody>tr:hover {
    background-color: #f2f2f2;
}
td.shrink {
    white-space: nowrap;
}
td.expand {
    width: 99%;
}
.modal-content > p {
    word-wrap: break-word;
}
</style>
@stop

@section('js')
<!--<script src=''></script> -->
<script src='{{asset("js/qa.js")}}'></script>
@stop

@section('content')
<div class="row">
    <div class="col s3">
        <div class="collection">
            <a href="/qa" class="collection-item {{$category == -1 ? 'active' : ''}}">
                全部<span class="badge">{{$all_count}}</span>
            </a>
            <a href="/qa/life" class="collection-item {{$category == 0 ? 'active' : ''}}">
                中大生活<span class="badge">{{$counts[0]}}</span>
            </a>
            <a href="/qa/gov" class="collection-item {{$category == 1 ? 'active' : ''}}">
                行政<span class="badge">{{$counts[1]}}</span>
            </a>
            <a href="/qa/student" class="collection-item {{$category == 2 ? 'active' : ''}}">
                學務<span class="badge">{{$counts[2]}}</span>
            </a>
            <a href="/qa/game" class="collection-item {{$category == 3 ? 'active' : ''}}">
                小遊戲<span class="badge">{{$counts[3]}}</span>
            </a>
        </div> 
    </div>
    <div class="col s9">
        <a href="{{url('qa/create?type=qa')}}" class="waves-effect waves-light btn">
            <i class="material-icons left">message</i>我要發問
        </a>
        <a href="{{url('qa/create?type=report')}}" class="waves-effect waves-light btn">
            <i class="material-icons left">report_problem</i>問題回報
        </a>
        @foreach ($answers as $answer)
        <div id="show{{$answer->id}}" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>{{ $answer->title }}</h4>
                <p>{!! nl2br(e($answer->content)) !!}</p>
            </div>
            <div class="modal-footer">
                <button class="modal-action modal-close waves-effect waves-light btn-flat">關閉</button>
                <a class="waves-effect waves-light btn-flat" href="{{action('QaController@edit', $answer->id)}}">編輯</a>
                <a class="waves-effect waves-light btn-flat red" href="{{action('QaController@destroy', $answer->id)}}">刪除</a>
            </div>
        </div>
        @endforeach
        @if ($top_answers != null)
        <div class="card-panel">
            <h4>熱門Q&amp;A</h4>
            <table>
                <thead>
                    <tr>
                        <td data-sort="string" class="shrink">類別</td>
                        <td data-sort="string" class="shrink">日期</td>
                        <td data-sort="string" class="expand">標題</td>
                        <td data-sort="int" class="shrink">觀看次數</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($top_answers as $top_answer)
                        <tr class="modal-trigger answer" href="#show{{$top_answer->id}}" data-id="{{$top_answer->id}}">
                            <td class="shrink"><span class="category">{{$categoryString[$top_answer->category]}}</span></td>
                            <td class="shrink">{{ date('m-d', strtotime($top_answer->created_at)) }}</td>
                            <td class="expand">{{ $top_answer->title }}</td>
                            <td class="shrink center-align view{{$top_answer->id}}">{{ $top_answer->views }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
        <div>
            @if ($top_answers != null)
            <h4>全部Q&amp;A</h4>
            @endif
            <table>
                <thead>
                    <tr>
                        <td data-sort="string" class="shrink">類別</td>
                        <td data-sort="string" class="shrink">日期</td>
                        <td data-sort="string" class="expand">標題</td>
                        <td data-sort="int" class="shrink">觀看次數</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($answers as $answer)
                        <tr class="modal-trigger answer" href="#show{{$answer->id}}" data-id="{{$answer->id}}">
                            <td class="shrink"><span class="category">{{$categoryString[$answer->category]}}</span></td>
                            <td class="shrink">{{ date('m-d', strtotime($answer->created_at)) }}</td>
                            <td class="expand">{{ $answer->title }}</td>
                            <td class="shrink center-align view{{$answer->id}}">{{ $answer->views }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="center-align">
            @include('pagination.default', ['paginator' => $answers])
        </div>
    </div>
</div>
@stop
