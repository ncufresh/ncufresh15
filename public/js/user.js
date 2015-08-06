var c;
var id;
$(document).ready(function(){
    
	id = $("#user_id").val();
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
	feed(0);
});
$("#c1").click(function(){
	feed(1);
});
$("#c2").click(function(){
	feed(2);
});
$("#c3").click(function(){
	feed(3);
});

function feed(objectID){
	if($("body").hasClass("food1")){
		$.ajax({
			url: "/creature/grow/"+objectID+"/"+id,
			type: "GET",
			success: function(data){
				if(data.result){
					Materialize.toast(data.msg, 4000);
					if (data.size == 0){
						c[objectID].setSize(200,100);
					} else if (data.size == 1){
						c[objectID].setSize(250, 125);
					} else{
						c[objectID].setSize(300, 150);
					}
				}else{
					Materialize.toast(data.msg, 4000);
				}
                if (typeof data.food != 'undefined') {
                    $('#growth_rem').html(data.food);
                }
			}
		});
	}else if($("body").hasClass("food2")){
		$.ajax({
			url: "/creature/level/"+objectID+"/"+id,
			type: "GET",
			success: function(data){
				if(data.result){
					Materialize.toast(data.msg, 4000);
					c[objectID].setImage("/img/gif/"+objectID+"-"+(data.level-1)+"-"+(data.color)+".gif");
				}else{
					Materialize.toast(data.msg, 4000);
				}
                if (typeof data.food != 'undefined') {
                    $('#level_rem').html(data.food);
                }
			}
		});
	}
}
function say(){
    a = [
        "挑戰過小遊戲了嗎？點我可以連結到小遊戲喔～",
        "想在小遊戲內更有效率的拿到寶物嗎？記得多多參考中央大學的相關資訊喔。",
        "知道自己的科系系館在校園的哪個角落嗎？快去校園導覽找找看吧！",
        "最近有什麼重要活動嗎？記得要密切注意喔！",
        "想知道中央大學有哪些社團嗎？快去「系所社團」一探究竟吧！",
        "如果遇到任何問題，請點選「問題回報」，會有專人為你解決喔。",
        "在「Q&A」找不到你想發問的問題嗎？點選「我要發問」，讓專家為你解惑吧哈哈！",
        "要從中央大學畢業可是有時數門檻的！快到小遊戲裡蒐集寶物達成目標，才能拿到時數喔。",
        "註冊過了嗎？點我註冊！",
        "快來陪我玩！點我到迷宮裡探險吧！",
        "點我可以到個人專區一探究竟喔～"
    ];  
    var i = parseInt(Math.random() * a.length);
    Materialize.toast("阿尼醬："+a[i], 5000);
    setTimeout(say, Math.random() * 10000 + 20000);
}
setTimeout(say, Math.random() * 10000 + 20000);
