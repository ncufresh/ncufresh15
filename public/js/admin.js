$(document).ready(function(){
	$('#ann-new-trigger').leanModal({
		ready: function(){
			$("#ann-new").css("top","5%");
		}
	});
	$('#qa-new-trigger').leanModal();
	$('#cal-new-trigger').leanModal({
		ready: function(){
			$("#cal-new").css("top", "5%");
		}
	});
	$(".update-ann-trigger").leanModal({
		ready: function(){
			$("#ann-update-modal").css("top","5%");
		}
	});
	$(".update-qa-trigger").leanModal();
	$(".update-cal-trigger").leanModal({
		ready: function(){
			$("#cal-update-modal").css("top","5%");
		}
	});

	$("#ann-date, #ann-update-date, #cal-date, #cal-update-date").pickadate({
		selectMonths: true,
		format: 'yyyy-mm-dd'
	});
	$(".update-ann-trigger").click(function(){
		var ann_id = $(this).data("id");
		var title = $("#ann-title-"+ann_id).text();
		var date = $("#ann-showat-"+ann_id).text();
		var content = $("#ann-content-"+ann_id).text();
		$("#ann-update-title").val(title);
		$("#ann-update-date").val(date);
		$("#ann-update-content").val(content);
		document.getElementById("ann-update-form").action = document.getElementById("ann-update-form").action + ann_id;
	});
	$(".update-qa-trigger").click(function(){
		var qa_id = $(this).data("id");
		var title = $("#qa-title-"+qa_id).text();
		var url = $("#qa-url-"+qa_id).text();
		$("#qa-update-title").val(title);
		$("#qa-update-url").val(url);
		document.getElementById("qa-update-form").action = document.getElementById("qa-update-form").action + qa_id;
	});

	$(".update-cal-trigger").click(function(){
		var cal_id = $(this).data("id");
		var title = $("#cal-title-"+cal_id).text();
		var content = $("#cal-content-"+cal_id).text();
		var date = $("#cal-date-"+cal_id).text();
		$("#cal-update-title").val(title);
		$("#cal-update-content").html(content);
		$("#cal-update-date").val(date);
		document.getElementById("cal-update-form").action = document.getElementById("cal-update-form").action + cal_id;
	});
});

$("#ann-link").click(function(){
	window.location.href = "/admin/announcement";
});
$("#qa-link").click(function(){
	window.location.href = "/admin/qa";
});
$("#calender-link").click(function(){
	window.location.href = "/admin/calender";
});
