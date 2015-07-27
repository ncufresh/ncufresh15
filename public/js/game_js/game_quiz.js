var canask = false; // check by _move.js&_main
var questionON = 0; // 0:close , 1:in , 2:result // -1:lock!
var select = 1; // four choices

var qadata;
function getquestion() {
    $.ajax({
        url: '/RandomQuestionAndAnswer',
        type: 'GET',
        async: false, // run ajax until it OK
        success: function(data) {
            qadata = data;
        }
    });
}
		
var question = function () {

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
			ctx.fillStyle = '#ff0000';
			ctx.font = "bold 25pt 微軟正黑體";
			ctx.textAlign = "left";
			ctx.textBaseline = "top";
			if (i%20==0 && i!=0) {
				breakline+=1;
			}
			ctx.fillText(splitquestion[i],20+(i%20)*between , adjustY + padding*breakline);
		}

		ctx.fillStyle = '#ffffff';
		ctx.font = '21px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText(qadata.questions.option1, canvas.width / 2, canvas.height - 180);

		ctx.fillStyle = '#ffffff';
		ctx.font = '21px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText(qadata.questions.option2, canvas.width / 2, canvas.height - 140);

		ctx.fillStyle = '#ffffff';
		ctx.font = '21px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText(qadata.questions.option3, canvas.width / 2, canvas.height - 100);	

		ctx.fillStyle = '#ffffff';
		ctx.font = '21px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText(qadata.questions.option4, canvas.width / 2, canvas.height - 60);

        switch (select){
            case 1:
            	ctx.beginPath();
            	ctx.strokeStyle="blue";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width/10,canvas.height - 182,canvas.width*8/10,32);
        		ctx.stroke();
                break;
            case 2:
            	ctx.beginPath();
            	ctx.strokeStyle="blue";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width/10,canvas.height - 142,canvas.width*8/10,32);
        		ctx.stroke();            
                break;
            case 3:
            	ctx.beginPath();
            	ctx.strokeStyle="blue";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width/10,canvas.height - 102,canvas.width*8/10,32);
        		ctx.stroke();            
                break;
            case 4:
            	ctx.beginPath();
            	ctx.strokeStyle="blue";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width/10,canvas.height - 62,canvas.width*8/10,32);
        		ctx.stroke();            
                break;
        }

	} else if (questionON==2) {
		ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
		ctx.fillRect(0, canvas.height/4, canvas.width, canvas.height*3/4);

		if (select==qadata.answer) {
			ctx.fillStyle = '#ff0000';
			ctx.font = "50px Bangers, Impact, Arial";
			ctx.textAlign = "center";
			ctx.textBaseline = "top";
			ctx.fillText("Smart!", canvas.width / 2, canvas.height / 2 + 120);
		}
		else{
			ctx.fillStyle = '#ff0000';
			ctx.font = "50px Bangers, Impact, Arial";
			ctx.textAlign = "center";
			ctx.textBaseline = "top";
			ctx.fillText("Idiot!", canvas.width / 2, canvas.height / 2 + 120);
		}
	}
	
	window.onkeydown = function(e) {
		// enter
		if(e.keyCode == 13 && canask && questionON==0){
			hero.canmove=false;
			getquestion();
			questionON=1;
			select=1;
		}
		else if(e.keyCode == 13 && questionON==1){
			questionON=2;
		}
		else if(e.keyCode == 13 && questionON==2){
			hero.canmove=true;
			questionON=0;
		}
		//
		if (e.keyCode == 38) { // up choice
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
		if (e.keyCode == 40) { // down choice
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