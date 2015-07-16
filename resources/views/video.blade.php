@extends('layout')

@section('title', 'VIDEO')
@section('css')
<style type="text/css">
.center{
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
#doom {
    opacity: 0.7;
    filter: alpha(opacity=70); /* For IE8 and earlier */
}
#doom:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
.pic{
  border-radius:10%;
  border: 2px white;
}
</style>

@stop

@section('js')
<!--<script src=''></script> -->
<script>

function changeImageA() {
    var image = document.getElementById('ImageA');
    if (image.src.match("tJ8PE")) {
        image.src = "https://lh3.googleusercontent.com/0ae0qYlyAbkmtNnHNlLyvLGqpy0o4Pn-ry98NEDclmc=s400";
    } else {
        image.src = "https://lh3.googleusercontent.com/-JZqJp9JK4qRJ64XTV2JdTI6GpKyIDR7nmrc0htJ8PE=s400";
    }
}

function changeImageB() {
    var image = document.getElementById('ImageB');
    if (image.src.match("Dclmc")) {
        image.src = "https://lh3.googleusercontent.com/-JZqJp9JK4qRJ64XTV2JdTI6GpKyIDR7nmrc0htJ8PE=s400";
    } else {
        image.src = "https://lh3.googleusercontent.com/0ae0qYlyAbkmtNnHNlLyvLGqpy0o4Pn-ry98NEDclmc=s400";
    }
}

$(document).ready(function(){
  $("#send").click(function(){
    event.preventDefault();//preven default event from happens

    $.post("some.php",
    {
      name: $("#n").val(),
      comment: $("#c").val()
    },
    function(result){
      $("#0").prepend(result);
    });
  }); 
});
</script>

@stop

@section('content')

<!--最上面那條row(red accent-2)-->    
<div class="row">
<div class="col" style="width:15%;">
<h5 style="color:grey">首頁</h5>
</div>
<div class="col" >
<h5 style="color:grey">影音專區</h5>
</div>
<div class="row"></div>
<!--左邊-->
<div class="card-action">
<div class="row">
<h5 style="color:black;text-align:center;">影音專區</h5>  
</div>
<div class="col" style="width:46%">
<img  id="ImageA" onmouseover="changeImageA()" class="pic" src="https://lh3.googleusercontent.com/-JZqJp9JK4qRJ64XTV2JdTI6GpKyIDR7nmrc0htJ8PE=s400" align="right">
</div>
<div class="col s2 " style="width:8%">
<p>  </p>
</div>
<div class="col s5 " style="width:46%">
<img id="ImageB" onmouseover="changeImageB()" class="pic" src="https://lh3.googleusercontent.com/0ae0qYlyAbkmtNnHNlLyvLGqpy0o4Pn-ry98NEDclmc=s400" >
</div>
</div>





    </body>
  </html>






content yolo!!!!


@stop
