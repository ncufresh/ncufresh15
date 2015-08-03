    @foreach(array_chunk( $tryconnect->getCollection()->all() , 8 ) as $row )
        @foreach ($row as $try)
                    <div id="{{$try->id}}">
                        <div class="row">
                            <div class="col s2 m2 l2">{{$try->name}}</div>
                            <div class="col s6 m6 l6" style="word-break: break-all;">留言內容 {{$try->comment}}</div>
                            <div class="col s4 m4 l4" style="height: auto;">
                              <button type="submit" class="waves-effect waves-teal btn , delete" value="{{ $try->id }}" >      
                                    <i class="material-icons">delete</i>
                              </botton>                      
                            </div>
                        </div>
                    <br>
               </div>
        @endforeach
    @endforeach


     <div class="center-align">
    @include('pagination.comment', ['paginator' => $tryconnect])
       </div>
     <div class="row" style="margin-bottom: 0px;margin-top: 0px;">  </div>