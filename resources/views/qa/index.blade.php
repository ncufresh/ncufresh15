@extends('layout')

@section('title', 'QAQ')

@section('css')
@stop

@section('js')
<!--<script src=''></script> -->
@stop

@section('content')
<div class="row">
    <div class="col s3">
        <div class="collection">
            <a href="#!" class="collection-item active">All<span class="badge">1</span></a>
            <a href="#!" class="collection-item">NCU Life<span class="badge">4</span></a>
            <a href="#!" class="collection-item">Administration</a>
            <a href="#!" class="collection-item">School<span class="badge">14</span></a>
            <a href="#!" class="collection-item">Games<span class="badge">14</span></a>
        </div> 
    </div>
    <div class="col s9">
        <ul class="collapsible" data-collapsible="expandable">
            <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>
    </div>
</div>
@stop
