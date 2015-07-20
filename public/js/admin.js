$(document).ready(function(){
	$('#ann-new-trigger').leanModal();
	$(".update-ann-trigger").leanModal();
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
});
