@extends('layout')

@section('title', 'QAQ')

@section('css')
<style>
.category {
    min-width: 85px;
    padding: 0;
    background-size: 100% auto;
    background-repeat: no-repeat;
}

.collection {
    overflow: unset;
}

#category-menu .collection a {
    color: #000;
    background-color: #fff;
    border: 1px solid #fff;
    font-size: 1.1em;
}

#category-menu .collection a.active {
    color: #fff;
    background-color: #0D47A1;
    border: 1px solid #0D47A1;
    position: relative;
}

#category-menu .collection a.active:after {
  content: '';
  position: absolute;
  top: 50%;
  left: 100%;
  margin-top: -22.5px;
  width: 0; height: 0;
  border-left: 16px solid #2196F3;
  border-top: 22.5px solid transparent;
  border-bottom: 22.5px solid transparent;
}

#category-menu .collection a:hover {
    border: 1px solid #2196F3;
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

.puzzle-life {
    background-image: url('/img/qa/puzzle_life.png');
}
.puzzle-gov {
    background-image: url('/img/qa/puzzle_gov.png');
}
.puzzle-student {
    background-image: url('/img/qa/puzzle_student.png');
}
.puzzle-game {
    background-image: url('/img/qa/puzzle_game.png');
}

.top-btn {
    background-color: #2196f3;
}

.top-btn:hover {
    background-color: #4AA7F2;
}

.container {
    background-color: #fff !important;
}
@media only screen and (max-width: 600px) {
    .ignore {
        display: none;
    }
}
</style>
@stop

@section('js')
<!--<script src=''></script> -->
@stop

@section('content')
<div class="row">
    <div id="category-menu" class="col s12 l3">
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
        <a href="{{url('qa/create?type=qa')}}" class="waves-effect waves-light btn top-btn">
            <i class="material-icons left">message</i>我要發問
        </a>
        <a href="{{url('qa/create?type=report')}}" class="waves-effect waves-light btn top-btn">
            <i class="material-icons left">report_problem</i>問題回報
        </a>
        @permission('management')
            <a href="{{url('qa/edit/'.$answer->id)}}" class="waves-effect waves-light btn top-btn">
                <i class="material-icons left">description</i>編輯此Q&amp;A
            </a>
        @endpermission
        <table>
            <thead>
                <tr>
                    <td data-sort="string" class="shrink">類別</td>
                    <td data-sort="string" class="shrink ignore">日期</td>
                    <td data-sort="string" class="expand">標題</td>
                    <td data-sort="int" class="shrink ignore">觀看次數</td>
                </tr>
            </thead>
            <tbody>
                <tr class="modal-trigger answer" href="#show{{$answer->id}}" data-id="{{$answer->id}}">
                    <td class="category {{$category_class[$answer->category]}}"></td>
                    <td class="shrink ignore">{{ date('m-d', strtotime($answer->created_at)) }}</td>
                    <td class="expand">{{ $answer->title }}</td>
                    <td class="shrink ignore center-align view{{$answer->id}}">{{ $answer->views }}</td>
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
