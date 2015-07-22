$(document).ready(function(){
	$('#ann-new-trigger').leanModal();
	$('#cal-new-trigger').leanModal({
		ready: function(){
			$("#cal-new").css("top", "5%");
		}
	});
	$(".update-ann-trigger").leanModal();
	$(".update-cal-trigger").leanModal({
		ready: function(){
			console.log("Hello");
			$("#cal-update-modal").css("top","5%");
		}
	});
	$("#cal-date").pickadate({
		selectMonths: true,
		format: 'yyyy-mm-dd'
	});
	$("#cal-update-date").pickadate({
		selectMonths: true,
		format: 'yyyy-mm-dd'
	});
	$(".update-ann-trigger").click(function(){
		var ann_id = $(this).data("id");
		var title = $("#ann-title-"+ann_id).text();
		var url = $("#ann-url-"+ann_id).text();
		var category = $("#ann-cat-"+ann_id).text();
		$("#ann-update-title").val(title);
		$("#ann-update-url").val(url);
		if (category == "1"){
			document.getElementById("ann-update-cat1").checked = true;
		}else {
			document.getElementById("ann-update-cat2").checked = true;
		}
		document.getElementById("ann-update-form").action = document.getElementById("ann-update-form").action + ann_id;
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
