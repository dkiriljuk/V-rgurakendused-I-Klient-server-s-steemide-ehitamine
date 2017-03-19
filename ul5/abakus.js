window.onload=function(){
	function move(){
		if (this.style.cssFloat == 'left'){
			this.style.cssFloat = 'right';
		}
		else if (this.style.cssFloat == 'right'){
			this.style.cssFloat = 'left';
		}	
	}
	var ball=document.getElementsByClassName('bead');
	for (var i=0; i <ball.length; i++){
		var element = ball[i].style.id;
		if (element == "left") {
			ball[i].style.cssFloat = 'right';
		}
		else {
			ball[i].style.cssFloat = 'left';
		}
		ball[i].onclick = move;		
	}
}