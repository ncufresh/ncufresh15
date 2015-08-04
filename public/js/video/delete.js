$(document).ready(function(){
	$(document).on("click", ".delete" , function(e) {
	    e.preventDefault();
	    $.ajax({  //ajax
	    url:"/video2/delete", //including index.php!!!
	    type: "POST",
	    data: {id: $(this).val() },   //inside {} is jquery.  val:   //name: is the thing that will be saved in POST

	    success: function(msg) {
	          console.log(msg);   //js, save data
	         $("#"+msg).hide(1000);  //append: add in the back
	          }
	     });
	});
});