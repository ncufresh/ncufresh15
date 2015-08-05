var c;
$(document).ready(function(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	c = [new Fish("c0"),new Fish("c1"),new Fish("c2"),new Fish("c3")];
	c[0].setBound(10, 10, 80, 80);
	c[1].setBound(10, 10, 80, 80);
	c[2].setBound(10, 10, 80, 80);
	c[3].setBound(10, 10, 80, 80);
	c[0].setTimer();
	c[1].setTimer();
	c[2].setTimer();
	c[3].setTimer();
	$(".button-collapse").sideNav();
	for (i = 0; i < 4; ++i){
		c[i] = new Fish("c"+i);
		(function(i) {
			$.ajax({
				url: "/creature/info/"+ i,
				type: "GET",
				success: function(data){
					console.log(data);
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
						}else{
							c[i].setSize(300, 150);
						}
					}
				}
			});
		})(i);
	}
});
