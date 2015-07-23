var canask = false; // check by _move.js&_main
var questionON = 0; // 0:close , 1:in , 2:result
var select = 1; // three choices

var question = function () {

	if (questionON==1) {
		ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
		ctx.fillRect(0, canvas.height/2, canvas.width, canvas.height/2);

		ctx.fillStyle = '#ff0000';
		ctx.font = "50px Bangers, Impact, Arial";
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText("What is it?", canvas.width / 2, canvas.height / 2 );

		ctx.fillStyle = '#ffffff';
		ctx.font = '20px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText("A: Apple", canvas.width / 2, canvas.height / 2 +60);

		ctx.fillStyle = '#ffffff';
		ctx.font = '20px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText("B: Banana", canvas.width / 2, canvas.height / 2 +120);

		ctx.fillStyle = '#ffffff';
		ctx.font = '20px Arial';
		ctx.textAlign = "center";
		ctx.textBaseline = "top";
		ctx.fillText("C: Cherry", canvas.width / 2, canvas.height / 2 +180);	

        switch (select){
            case 1:
            	ctx.beginPath();
            	ctx.strokeStyle="blue";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width / 3,canvas.height / 2+60,200,30);
        		ctx.stroke();
                break;
            case 2:
            	ctx.beginPath();
            	ctx.strokeStyle="blue";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width / 3,canvas.height / 2+120,200,30);
        		ctx.stroke();            
                break;
            case 3:
            	ctx.beginPath();
            	ctx.strokeStyle="blue";
        		ctx.lineWidth=3;
        		ctx.rect(canvas.width / 3,canvas.height / 2+180,200,30);
        		ctx.stroke();            
                break;
        }

	} else if (questionON==2) {
		ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
		ctx.fillRect(0, canvas.height/2, canvas.width, canvas.height/2);

		if (select==3) {
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
	};
	
	window.onkeydown = function(e) {
		// enter
		if(e.keyCode == 13 && canask && questionON==0){
			hero.canmove=false;
			questionON=1;
			select=1;
			console.log("Enter");
		}
		else if(e.keyCode == 13 && questionON==1){
			questionON=2;
			console.log("Enter2");
		}
		else if(e.keyCode == 13 && questionON==2){
			hero.canmove=true;
			questionON=0;
			console.log("Enter3");
		}
		//
		if (e.keyCode == 38) { // up choice
			if (select==2) {
				select=1;
			}
			else if (select==3) {
				select=2;
			}
		}
		if (e.keyCode == 40) { // down choice
			if (select==1) {
				select=2;
			}
			else if (select==2) {
				select=3;
			}			
		}		
	}
}