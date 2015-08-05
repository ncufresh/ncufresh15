var canask = false; // check by _move.js&_main
var select = 1; // four choices
var questionON = 0;
//-1:lock, 0:close, 1:in, 2:result 

var threetimes = 0;

function init() {
    $.ajax({
        url: '/GameOver',
        type: 'GET',
        success: function(data) {
        }
    });
}
function setThreeTimes() {
    $.ajax({
        url: '/GemeOver',
        type: 'GET',
        success: function(data) {
        	console.log(data);
        }
    });
}
function deleteAll() {
    $.ajax({
        url: '/GamaOver',
        type: 'GET',
        success: function(data) {
        }
    });
}

var qadata;
function getquestion() {
    $.ajax({
        url: '/RandomQuestionAndAnswer',
        type: 'GET',
        async: false, // run ajax until it OK
        success: function(data) {
        	if (qadata==data) {
        		console.log("題目重複");
        		getquestion();
        	}
        	else{
        		qadata = data;
        	}
        }
    });
}


var question = function () {
	if (questionON==-1) {
		ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
		ctx.fillRect(0, canvas.height/3, canvas.width, canvas.height / 3);
	
		ctx.fillStyle = '#ffffff';
		ctx.font = '35px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText("鎖住了QQ", canvas.width / 2, canvas.height / 2-50);
	}
	if (questionON==1) {
		ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
		ctx.fillRect(0, canvas.height/4, canvas.width, canvas.height*3/4);


		var splitquestion = qadata.questions.question.split("");
		var adjustY = 150; // 文字欄位初始 Y
		var padding = 40; // 行距
		var breakline = 0; // 換第X行
		var between = 30; // 字距
		for(var i=0;i<splitquestion.length;i++)
		{
			ctx.fillStyle = "rgb(1, 199, 255)";
			ctx.font = "bold 25pt 微軟正黑體";
			ctx.textAlign = "left";
			ctx.textBaseline = "top";
			if (i%20==0 && i!=0) {
				breakline+=1;
			}
			ctx.fillText(splitquestion[i],20+(i%20)*between , adjustY + padding*breakline);
		}

		ctx.fillStyle = '#ffffff';
		//ctx.fillStyle = "rgb(255, 240, 0)";
		ctx.font = '21px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText(qadata.questions.option1, canvas.width / 2, canvas.height - 180+padding*0);

		ctx.fillStyle = '#ffffff';
		//ctx.fillStyle = "rgb(255, 240, 0)";
		ctx.font = '21px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText(qadata.questions.option2, canvas.width / 2, canvas.height - 180+padding*1);

		ctx.fillStyle = '#ffffff';
		//ctx.fillStyle = "rgb(255, 240, 0)";
		ctx.font = '21px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText(qadata.questions.option3, canvas.width / 2, canvas.height - 180+padding*2);

		ctx.fillStyle = '#ffffff';
		//ctx.fillStyle = "rgb(255, 240, 0)";
		ctx.font = '21px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText(qadata.questions.option4, canvas.width / 2, canvas.height - 180+padding*3);

        switch (select){
            case 1:
            	ctx.beginPath();
            	ctx.strokeStyle="rgb(255, 240, 0)";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width/10,canvas.height - 182,canvas.width*8/10,32);
        		ctx.stroke();
                break;
            case 2:
            	ctx.beginPath();
            	ctx.strokeStyle="rgb(255, 240, 0)";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width/10,canvas.height - 142,canvas.width*8/10,32);
        		ctx.stroke();            
                break;
            case 3:
            	ctx.beginPath();
            	ctx.strokeStyle="rgb(255, 240, 0)";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width/10,canvas.height - 102,canvas.width*8/10,32);
        		ctx.stroke();            
                break;
            case 4:
            	ctx.beginPath();
            	ctx.strokeStyle="rgb(255, 240, 0)";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width/10,canvas.height - 62,canvas.width*8/10,32);
        		ctx.stroke();            
                break;
        }

	} else if (questionON==2) {

		if (threetimes==3) {

			ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
			ctx.fillRect(0, canvas.height/3, canvas.width, canvas.height / 3);
	
			ctx.fillStyle = '#ffffff';
			ctx.font = '35px Arial';
			ctx.textAlign = "center";
			ctx.textBaseline = "top";
			ctx.fillText("恭喜獲得神秘道具<3", canvas.width / 2, canvas.height / 2-90);
			ctx.fillText("到個人專區看看吧~~", canvas.width / 2, canvas.height / 2-50);
			for (var i = 0; i < boxs.length; i++) {
				if (boxs[i].isme) {
					boxs[i].open=true;
				}
			}
		}
		else{
			ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
			ctx.fillRect(0, canvas.height/4, canvas.width, canvas.height*3/4);

			var splitquestion = qadata.questions.question.split("");
			var adjustY = 150; // 文字欄位初始 Y
			var padding = 40; // 行距
			var breakline = 0; // 換第X行
			var between = 30; // 字距
			for(var i=0;i<splitquestion.length;i++)
			{
				ctx.fillStyle = "rgb(1, 199, 255)";
				ctx.font = "bold 25pt 微軟正黑體";
				ctx.textAlign = "left";
				ctx.textBaseline = "top";
				if (i%20==0 && i!=0) {
					breakline+=1;
				}
				ctx.fillText(splitquestion[i],20+(i%20)*between , adjustY + padding*breakline);
			}
			switch (parseInt(qadata.answer,10)){
				case 1:
					ctx.fillStyle = "rgb(255, 240, 0)";
					ctx.font = '21px Arial';
					ctx.textAlign = "center";
					ctx.textBaseline = "top";
					ctx.fillText(qadata.questions.option1, canvas.width / 2, canvas.height - 180+padding*0);
					break;
				case 2:
					ctx.fillStyle = "rgb(255, 240, 0)";
					ctx.font = '21px Arial';
					ctx.textAlign = "center";
					ctx.textBaseline = "top";
					ctx.fillText(qadata.questions.option2, canvas.width / 2, canvas.height - 180+padding*1);
					break;
				case 3:
					ctx.fillStyle = "rgb(255, 240, 0)";
					ctx.font = '21px Arial';
					ctx.textAlign = "center";
					ctx.textBaseline = "top";
					ctx.fillText(qadata.questions.option3, canvas.width / 2, canvas.height - 180+padding*2);
					break;
				case 4:
					ctx.fillStyle = "rgb(255, 240, 0)";
					ctx.font = '21px Arial';
					ctx.textAlign = "center";
					ctx.textBaseline = "top";
					ctx.fillText(qadata.questions.option4, canvas.width / 2, canvas.height - 180+padding*3);
					break;
			}
			for (var i = 0; i < boxs.length; i++) {
				if (boxs[i].isme) {
					boxs[i].lock=true;
				}
			}
		}
	}
	window.onkeydown = function(e) {
		// enter
		if(e.keyCode == 13 && canask && questionON==0 ){
			for (var i = 0; i < boxs.length; i++) {
				if (boxs[i].isme && boxs[i].lock==false && boxs[i].open==false) {
					hero.canmove=false;
					getquestion();
					//deleteAll();
					init();
					questionON=1;
					select=1;
				} else if(boxs[i].isme && boxs[i].lock && boxs[i].open==false){
					hero.canmove=false;
					questionON=-1;
				}
			}
		}
		else if(e.keyCode == 13 && questionON==1){
			if (select!=qadata.answer) {
				questionON=2;
			} else if(select==qadata.answer){
				setThreeTimes();
				threetimes+=1;
				if (threetimes==3) {
					questionON=2;
				} else{
					getquestion();
				}
			}
		}
		else if(e.keyCode == 13 && questionON==2){
			hero.canmove=true;
			questionON=0;
			threetimes=0;
			deleteAll();
		}
		else if(e.keyCode == 13 && questionON==-1){
			hero.canmove=true;
			questionON=0;
			threetimes=0;
			deleteAll();
		}
		//
		if (e.keyCode == 38 && questionON==1) { // up choice
			if (select==2) {
				select=1;
			}
			else if (select==3) {
				select=2;
			}
			else if (select==4) {
				select=3;
			}
		}
		if (e.keyCode == 40 && questionON==1) { // down choice
			if (select==1) {
				select=2;
			}
			else if (select==2) {
				select=3;
			}
			else if (select==3) {
				select=4;
			}		
		}		
	}
}