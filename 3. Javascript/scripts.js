		var clickedTime;
		var createdTime;
		var reactionTime;
		var highScore = 999;
	
		// Generate random color
		function getRandomColor() {
    		var letters = '0123456789ABCDEF'.split('');
		    var color = '#';
    		for (var i = 0; i < 6; i++ ) {
        		color += letters[Math.floor(Math.random() * 16)];
    		}
    		return color;
		}
			
		// Periodically show the box
		function periodicallyShowBox() {
			var time = Math.random() * 5000;
		
			setTimeout(function() {
			
				if(Math.random() > 0.5) {
					document.getElementById("box").style.borderRadius = "100px";
				}
				else {
					document.getElementById("box").style.borderRadius = "0px";
				}
				
				var top = Math.random() * 300;
				var left = Math.random() * 500;
				
				document.getElementById("box").style.top = top + "px";
				document.getElementById("box").style.left = left + "px";

				document.getElementById("box").style.backgroundColor = getRandomColor();
				document.getElementById("box").style.display = "block";
				
				createdTime = Date.now();
			}, time)
		}
		
		// Keep track of the high score
		function recordHighScore(reactionTime) {
			if(reactionTime < highScore) {
				highScore = reactionTime;
				document.getElementById("highScore").style.color = "red";
			}

			document.getElementById("highScore").innerHTML = highScore + " seconds";
		}
	
		// Initialize with the periodic timer enabled
		periodicallyShowBox();
		
		// Handler for when the box is clicked
		document.getElementById("box").onclick = function() {
			this.style.display = "none";
			
			clickedTime = Date.now();
			reactionTime = (clickedTime - createdTime)/1000;
			
			document.getElementById("time").innerHTML = reactionTime + " seconds";
			document.getElementById("highScore").style.color = "black";
			recordHighScore(reactionTime);
			
			periodicallyShowBox();
		}