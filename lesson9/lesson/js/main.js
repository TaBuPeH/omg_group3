$(document).ready( function(){
	
	$('#noBoss').mouseover(function(){
		
		var newX = Math.random()*80+"%";
		var newY = Math.random()*80+"%";
		
		$(this).css( {left: newX, top: newY } );
		
	});
	
	
	$('#yesBoss').click(function(){  
		
		alert('YES BOSS!');
		
	});
} );






//
//
//
//document.addEventListener("DOMContentLoaded", function(event) { 
//			
//	
//
//	var ourButton = document.getElementById("noBoss");
//	
//	ourButton.addEventListener( "mouseover" , function(){
//		
//					// 0-79.9999999 %
//		var newX = Math.random()*80+"%";
//		var newY = Math.random()*80+"%";
//		
//		ourButton.style.left = newX;
//		ourButton.style.top = newY;
//		
//		
//		
//	} );
//	
//		
//	var ourButton2 = document.getElementById("yesBoss");
//	
//	ourButton2.addEventListener("click",  function(){
//		
//		alert('YES BOSS!');
//		
//	} );
//	
//	
//});
