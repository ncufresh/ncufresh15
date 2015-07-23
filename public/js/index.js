var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1;
var yyyy = today.getFullYear();

if(dd < 10)
	dd='0'+dd;
if (mm < 10)
	mm='0'+mm;
today = yyyy+"-"+mm+"-"+dd;
$(document).ready(function(){
	$('.slider').slider({full_width: true, height: 390});
	$.ajax({
		url: "cal/get?date="+today,
		type: "GET",
		success: function(data){
			var all = JSON.parse(data);
		},
		error: function(xhr,status,error){
			console.log("Error");
		}
	});
});
