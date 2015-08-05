var c;
var id;
$(document).ready(function(){
	$('#c0').dropdown({
		constrain_width: false, // Does not change width of dropdown to that of the activator
		hover: false, // Activate on hover
		belowOrigin: true // Displays dropdown below the button
	});
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	c = [new Fish("c0", "nenu"),
		new Fish("c1", ""),
		new Fish("c2", ""),
		new Fish("c3", "")
	];
	c[0].setBound(10, 10, 70, 60);
	c[0].x = 5;
	c[0].y = 10;
	c[1].setBound(10, 10, 80, 70);
	c[1].x = 69;
	c[1].y = 30;
	c[2].setBound(10, 10, 80, 70);
	c[2].x = 30;
	c[2].y = 60;
	c[3].setBound(10, 71, 70, 10);
	c[3].x = 30;
	c[3].y = 80;
	c[0].setTimer(7000);
	c[1].setTimer(8000);
	c[2].setTimer(5000);
	c[3].setTimer(10000);
	$(".button-collapse").sideNav();
	id = $("#user_id").val();
	for (i = 0; i < 4; ++i){
		c[i] = new Fish("c"+i);
		(function(i) {
			$.ajax({
				url: "/creature/info/"+i+"/"+id,
				type: "GET",
				success: function(data){
					c[i].color = data.color;
					c[i].level = data.level;
					c[i].size = data.size;
					if (data.level > 0){
						c[i].setSize(250, 125);
						c[i].setImage("/img/gif/"+i+"-"+(data.level-1)+"-"+(data.color)+".gif");
						if (data.size == 0){
							c[i].setSize(200,100);
						} else if (data.size == 1){
							c[i].setSize(250, 125);
						} else{
							c[i].setSize(300, 150);
						}
					}
				}
			});
		})(i);
	}
});
$("#c0").click(function(){
});
