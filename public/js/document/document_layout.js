$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
        

$("#freshmen_week").click(function(){
	window.location.href = '/document/freshmen_week';
});
$("#activity").click(function(){
	window.location.href = '/document/activity';
});
$("#daily").click(function(){
	window.location.href = '/document/daily';
});
$("#download").click(function(){
	window.location.href = '/document/download';
});