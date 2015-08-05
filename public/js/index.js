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
	$(".event-box").leanModal({
		in_duration: 500,
		out_duration: 500,
	});
	$('.slider').slider({full_width: true, height: 390});
	updateCalender(today);
});

$("#arrow1").click(function(){
	var dom = document.getElementById("arrow1");
	if (dom.hasAttribute("target") && dom.getAttribute("target")!= "0000-00-00"){
		updateCalender(dom.getAttribute("target"));
	}
});

$("#arrow2").click(function(){
	var dom = document.getElementById("arrow2");
	if (dom.hasAttribute("target") && dom.getAttribute("target")!= "2016-12-31"){
		updateCalender(dom.getAttribute("target"));
	}
});

function updateCalender(date){
	$.ajax({
		url: "/cal/get?date="+date,
		type: "GET",
		success: function(data){
			for(i = 1; i <= 4; i++) {
				if(data[i+""]){
					if (i == 2){
						$("#arrow1").attr("target", data[i+""][0].previous_date);
						$("#arrow2").attr("target", data[i+""][0].next_date);
					}
					setCalenderBar(document.getElementById("e"+i), data[i+""]);
					setCalenderModal(document.getElementById("e"+i+"-content"), data[i+""]);
				} else {
					clearCalenderBar(i);
					clearCalenderModal(i);
				}
			}
		},
		error: function(xhr,status,error){
			console.log("Error");
		}
	});
}

function setCalenderBar(element, data){
	var date = new Date(data[0].event_date);
	$(element).text((date.getMonth()+1) + "/" + date.getDate() + " " + data[0].title);
	if(data.length > 1) {
		$(element).addClass("tag");
		$(element).attr("num", data.length)
	}else {
		$(element).removeClass("tag");
		$(element).attr("num", 0);
	}
}

function setCalenderModal(element, data){
	var content = "";
	for(j = 0; j < data.length; j++) {
		content += "<h4 class='cal-modal-title'>"+data[j].title+"</h4>\
					<h6 class='cal-modal-date'>"+data[j].event_date+"</h6>\
					<p class='cal-modal-content'>"+nl2br(data[j].content)+"</p>";
	}
	$(element).html(content);
}

function clearCalenderBar(i){
	$("#e"+i).text("");
	$("#e"+i).attr("num", "");
	$("#e"+i).removeClass("tag");
}

function clearCalenderModal(i){
	$("#e"+i+"-content").text("");
}

function nl2br( str ) {
	return str.replace(/([^>])\n/g, '$1<br/>\n');
}

