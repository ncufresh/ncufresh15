$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true // Displays dropdown below the button
    }
  );

$("#university").click(function(){
	window.location.href = '/document/university';
});
$("#graduate").click(function(){
	window.location.href = '/document/graduate';
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