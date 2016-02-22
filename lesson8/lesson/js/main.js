document.addEventListener("DOMContentLoaded", function(event) { 
			
	var numberOfJumps = 0;

	var ourButton = document.getElementById("noBoss");
	
	ourButton.addEventListener( "mouseover" , function(){
		
		if(numberOfJumps < 3)
		{	
						// 0-79.9999999 %
			var newX = Math.random()*80+"%";
			var newY = Math.random()*80+"%";
			
			ourButton.style.left = newX;
			ourButton.style.top = newY;
			
			numberOfJumps++;
		}
		else
		{
			ourButton.removeEventListener( "mouseover");
		}	
		
	
		
	} );
	


		
	var ourButton2 = document.getElementById("yesBoss");
	
	ourButton.addEventListener("click", theBoss );
	ourButton2.addEventListener("click", theBoss );
	
	
	

	function theBoss(){
		alert('YES BOSS!');
	} 
	
	
	var a = 5;
	
	var a = function(){
		
		alert('s');
	};
	
	alert(a);
	a();
	
});





	
	