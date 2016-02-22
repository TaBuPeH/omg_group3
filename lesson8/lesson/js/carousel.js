document.addEventListener("DOMContentLoaded", function(event) { 
			
	var elements = document.querySelectorAll('.circle');
	
	for(i=0; i<elements.length;i++)
	{
		elements[i].addEventListener('click',function(){
			
			var newUrl = this.getAttribute('data-href');
			document.getElementById('mainImg').src = newUrl;
			
			clearTimeout(timeout);
			
		});
	}	
	
	
	
	var intervalVariable = setInterval(function(){
		
		alert('baf');
		
	} ,1000);
	
	
	var timeout = setTimeout( x ,4000);
	
	
	function x()
	{
		clearInterval(intervalVariable);
	}
});