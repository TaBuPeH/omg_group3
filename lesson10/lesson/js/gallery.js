$(document).ready(function(){
	
	
	$('.gallery img').click(function(){
		
		if(  !$(this).hasClass('active') )
		{
			
			var activeIndex = $('.gallery img.active').index();
			var ourIndex = $(this).index();
			
			if(activeIndex < ourIndex)
				{
					flyInFromRight(500);
				}
			else
				{
					flyInFromLeft(500);
				}
			
		}
		
	});
	
	
	
	function flyInFromRight(delay)
	{
		 var currentElement = $('.gallery img.active');
		 setTimeout(function(){ 
			 currentElement.removeClass('active'); 
			 currentElement.next().addClass('active'); 
		 },delay/2);
		 
		 currentElement.prev().animate({width:'15%',top:'35%',left: "-15%"});
		 currentElement.animate( {left: "0px", top: "15%", width: '35%'}, delay );
		 currentElement.next().animate( {left: "25%", top: "0", width: "50%"}, delay);
		 currentElement.next().next().animate( {left: "70%", top: "15%", width: "35%"}, delay);
	}
	
	function flyInFromLeft(delay)
	{
		 var currentElement = $('.gallery img.active');
		 setTimeout(function(){ 
			 currentElement.removeClass('active'); 
			 currentElement.prev().addClass('active'); 
		 },delay/2 - 50);
		 
		 currentElement.next().animate({width:'15%',top:'35%',left: "100%"});
		 currentElement.animate( {left: "70%", top: "15%", width: '35%'}, delay- 50 );
		 currentElement.prev().animate( {left: "25%", top: "0", width: "50%"}, delay- 50);
		 currentElement.prev().prev().animate( {left: "0%", top: "15%", width: "35%"}, delay- 50);
	}
	
	
	
	
    $( "#ourSlider" ).slider({
        min: 0,
        max: 7,
        value: 0,
        slide: function( event, ui ) {
        	 var currentElement = $('.gallery img.active').index();
        	 var currentPicture = ui.value;
        	 
        	 
        	 var numberOfElements= Math.abs(currentPicture - currentElement);
        	
        	 var delay = 500/numberOfElements; // 250msec
        	 
        	 if(currentElement<currentPicture)
        	 {	
        		 for(i=0; i<numberOfElements;i++)
	        	 { 
	        		 setTimeout(flyInFromRight,delay*i,delay);
	        	 }
        	 }
        	 else
             {
        		 for(i=0; i<numberOfElements;i++)
	        	 { 
	        		 setTimeout(flyInFromLeft,delay*i,delay);
	        	 }
        	 }
        }
      });
});