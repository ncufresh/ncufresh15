@if (Auth::check() && Auth::user()->can('management') )

            @foreach(array_chunk( $tryconnect->getCollection()->all() , 7 ) as $row )
                @foreach ($row as $try)
                            <div id="{{$try->id}}">
                                <div class="row">
                                    <div class="col s2 m2 l2">{{$try->name}}</div>
                                    <div class="col s6 m6 l6" style="word-break: break-all;">留言內容 {{$try->comment}}</div>
                                    <div class="col s4 m4 l4" style="height: auto;">
                                      <button type="submit" class="waves-effect waves-teal btn , delete" value="{{ $try->id }}" style="position: absolute;
            display: inline-block;
            padding: 1% 4%;
            margin: 0em;
            text-align: center;
            line-height: normal;
            right: 0%;">      
                                            <i class="material-icons">delete</i>
                                      </botton>                      
                                    </div>
                                </div><!--end row-->
                                <br>
                            </div><!--end div id-->
                        @endforeach
                    @endforeach
                            <div class="center-align">
                            @include('pagination.comment', ['paginator' => $tryconnect])
                            </div>
@elseif (Auth::check())
            @foreach(array_chunk( $tryconnect->getCollection()->all() , 7 ) as $row )
                @foreach ($row as $try)
                            <div id="{{$try->id}}">
                                <div class="row">
                                    <div class="col s4 m3 l3">{{$try->name}}</div>
                                    <div class="col s8 m9 l9" style="word-break: break-all;">留言內容 {{$try->comment}}</div>
                                </div><!--end row-->
                                <br>

                            </div><!--end div id-->
                        @endforeach
                    @endforeach
                            <div class="center-align">
                            @include('pagination.comment', ['paginator' => $tryconnect])
                            </div>
@else
 
            @foreach(array_chunk( $tryconnect->getCollection()->all() , 7 ) as $row )
                @foreach ($row as $try)
                            <div id="{{$try->id}}">
                                <div class="row">
                                    <div class="col s4 m3 l3">{{$try->name}}</div>
                                    <div class="col s8 m9 l9" style="word-break: break-all;">留言內容 {{$try->comment}}</div>
                                </div><!--end row-->
                                <br>

                            </div><!--end div id-->
                @endforeach
            @endforeach
                            <div class="center-align">
                            @include('pagination.comment', ['paginator' => $tryconnect])
                            </div>
@endif
