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
td.shrink {
    white-space: nowrap;
}
td.expand {
    width: 99%;
}
#ans-content td {
    border:1px solid rgba(34, 36, 38, 0.1);
}
#ans-content strong {
    font-weight: bold;
}
</style>
@stop

@section('js')
<!--<script src=''></script> -->
@stop

@section('content')
<div class="row">
    <div class="col s12 l3">
        <div class="collection">
            <a href="/qa" class="collection-item">
                全部<span class="badge">{{$all_count}}</span>
            </a>
            <a href="/qa/category/life" class="collection-item">
                中大生活<span class="badge">{{$counts[0]}}</span>
            </a>
            <a href="/qa/category/gov" class="collection-item">
                行政<span class="badge">{{$counts[1]}}</span>
            </a>
            <a href="/qa/category/student" class="collection-item">
                學務<span class="badge">{{$counts[2]}}</span>
            </a>
            <a href="/qa/category/game" class="collection-item">
                小遊戲<span class="badge">{{$counts[3]}}</span>
            </a>
        </div> 
        @permission('management')
            <a href="{{url('qa/questions')}}" class="waves-effect waves-light btn grey darken-3" style="width:100%;">
                <i class="material-icons left">dashboard</i>後台管理
            </a>
        @endpermission
    </div>
    <div class="col s12 l9">
        <a href="{{url('qa/create?type=qa')}}" class="waves-effect waves-light btn">
            <i class="material-icons left">message</i>我要發問
        </a>
        <a href="{{url('qa/create?type=report')}}" class="waves-effect waves-light btn">
            <i class="material-icons left">report_problem</i>問題回報
        </a>
        @permission('management')
            <a href="{{url('qa/edit/'.$answer->id)}}" class="waves-effect waves-light btn">
                <i class="material-icons left">description</i>編輯此Q&amp;A
            </a>
        @endpermission
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
                <tr class="modal-trigger answer" href="#show{{$answer->id}}" data-id="{{$answer->id}}">
                    <td class="shrink"><span class="category">{{$categoryString[$answer->category]}}</span></td>
                    <td class="shrink">{{ date('m-d', strtotime($answer->created_at)) }}</td>
                    <td class="expand">{{ $answer->title }}</td>
                    <td class="shrink center-align view{{$answer->id}}">{{ $answer->views }}</td>
                </tr>
            </tbody>
        </table>
        <div id="ans-content">
            <p style="font-size:1.2em;">
                {!! $answer->content !!}
            </p>
        </div>
    </div>
</div>
@stop
