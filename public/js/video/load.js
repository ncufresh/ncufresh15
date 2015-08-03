$(document).ready(function(){

   $(document).on("click", ".pagination a" , function(e){
      e.preventDefault();      
      
      var page = $(this).attr('href').split('page=')[1];
      
      getComments(page);

      $(this).fadeOut(500);

    });
  function getComments(page){

    $.ajax({
      url:'/ajax/comment/?page='+page,
      success: function(msg){
        
        location.hash = page ;
        $(".load").append( $(msg).hide().fadeIn(2000) );
      }

    });

  }
});