@foreach(array_chunk( $tryconnect->getCollection()->all() , 8 ) as $row )
    @foreach ($row as $try)
                  <div id="{{$try->id}}"> 
                   <div class="col s2">{{$try->name}}</div>
                   <div class="col s7">留言內容 {{$try->comment}}</div>
                   <div class="col s2">
                    <form>
                      <button type="submit" class="waves-effect waves-teal btn , delete" value="{{ $try->id }}" style="width:8px;height:25px;margin-left:-10px">
                        <i class="material-icons" style="margin-left:-8px;line-height: normal;">delete</i>
                      </botton>
                    </form>
                   </div>
                  </div>
<div class="row" style="margin-bottom: 15px;margin-top: 0px;">  </div>
    @endforeach
@endforeach
<div class="center-align">
  @include('pagination.comment', ['paginator' => $tryconnect])
</div>
<div class="row" style="margin-bottom: 0px;margin-top: 0px;">  </div>
