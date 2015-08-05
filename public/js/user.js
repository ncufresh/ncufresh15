var c1, c2, c3, c4;
c1 = new Fish("c1");
$(document).ready(function(){
	$(".button-collapse").sideNav();
	for (i = 0; i < 3; i++){
		$.ajax({
			url: "/creature/info/"+ i,
			type: "GET",
			success: function(data){
				console.log(data);
			}
		});
	}
});
