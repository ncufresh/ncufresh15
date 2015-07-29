$(document).ready(function(){

    add();
});
function add()
{
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
                        <div class="col s2">'+msg.name+'</div>\
                        <div class="col s7">留言內容 '+msg.comment+'</div>\
                        <div class="col s2">\
                          <form>\
                            <button type="submit" id="delete" class="btn " style="width:10px;height:25px;margin-left:-10px">\
                              <i class="material-icons" style="margin-left:-8px;line-height: normal;">delete</i>\
                            </botton>\
                                <input type="hidden" name="username" value="'+msg.name+'"/>\
                                <input type="hidden" name="comment" value="'+msg.comment+'"/>\
                            <input type="hidden" name="id" value="'+msg.id+'">\
                          </form>\
                        </div>\
                    </div>\
                    <div class="row" style="margin-bottom: 15px;margin-top: 0px;"></div>';
        $("#mCSB_1_container").prepend( $(str).hide().fadeIn(1000) );  //append: add in the back
      }
    });
  });


}