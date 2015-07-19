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
    cursor: pointer;
}
td.shrink {
    white-space: nowrap;
}
td.expand {
    width: 99%;
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
            <a href="/qa/category/life" class="collection-item {{$category == 0 ? 'active' : ''}}">
                中大生活<span class="badge">{{$counts[0]}}</span>
            </a>
            <a href="/qa/category/gov" class="collection-item {{$category == 1 ? 'active' : ''}}">
                行政<span class="badge">{{$counts[1]}}</span>
            </a>
            <a href="/qa/category/student" class="collection-item {{$category == 2 ? 'active' : ''}}">
                學務<span class="badge">{{$counts[2]}}</span>
            </a>
            <a href="/qa/category/game" class="collection-item {{$category == 3 ? 'active' : ''}}">
                小遊戲<span class="badge">{{$counts[3]}}</span>
            </a>
        </div> 
        @permission('management')
            <a href="{{url('qa/questions')}}" class="waves-effect waves-light btn grey darken-3" style="width:100%;">
                <i class="material-icons left">dashboard</i>後台管理
            </a>
        @endpermission
    </div>
    <div class="col s9">
        <a href="{{url('qa/create?type=qa')}}" class="waves-effect waves-light btn">
            <i class="material-icons left">message</i>我要發問
        </a>
        <a href="{{url('qa/create?type=report')}}" class="waves-effect waves-light btn">
            <i class="material-icons left">report_problem</i>問題回報
        </a>
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
                        <tr class="answer" onclick="document.location = '{{url('qa/'.$top_answer->id)}}';" data-id="{{$top_answer->id}}">
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
                        <tr class="answer" onclick="document.location = '/qa/{{$answer->id}}'" data-id="{{$answer->id}}">
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
