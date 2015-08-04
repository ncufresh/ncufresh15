$(document).ready(function(){
 $("#send").on("click", function(e) {
    //e.preventDefault();
    $.ajax({  //ajax
      url:"/video2/add", //including index.php!!!
      type: "POST",
      data: {comment: $("#SendComment").val() },   //inside {} is jquery.  val:   //name: is the thing that will be saved in POST

       success: function(msg) {
        console.log(msg);   //js, save data
        var id = msg.id;
        var str = '<div id="'+msg.id+'""> \
                      <div class="row">\
                        <div class="col s4 m3 l3">'+msg.name+'</div>\
                        <div class="col s8 m9 l9" style="word-break: break-all;">留言內容 '+msg.comment+'</div>\
                      </div>\
                      <br>\
                   </div>';
        $("#mCSB_2_container").prepend( $(str).hide().fadeIn(1000) );  //append: add in the back
        $("#SendComment").val('');

      }
    });
  });
});