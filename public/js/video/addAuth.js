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
                        <div class="col s2 m2 l2">'+msg.name+'</div>\
                        <div class="col s6 m6 l6" style="word-break: break-all;">留言內容 '+msg.comment+'</div>\
                        <div class="col s4 m4 l4" style="height: auto;">\
                            <button type="submit" class="waves-effect waves-teal btn delete" value="'+msg.id+'"style="position: absolute;\
            display: inline-block;\
            padding: 1% 4%;\
            margin: 0em;\
            text-align: center;\
            line-height: normal;\
            right: 0%;">\
                              <i class="material-icons" style="line-height: normal;">delete</i>\
                            </botton>\
                        </div>\
                      </div>\
                      <br>\
                   </div>';
        $("#mCSB_2_container").prepend( $(str).hide().fadeIn(1000) );  //append: add in the back
        $("#SendComment").val('');

      }
    });
  });
});