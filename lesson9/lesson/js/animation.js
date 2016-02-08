$(document).ready(function(){
	
	// set the script to not be animating
	var isAnimating = false;
	
	// add an onClick handler on all images
	$('.gallery img').click(function(){
		
		// if the site is not currently animating
		if(isAnimating == false)
		{
			
			// set animating to true
			isAnimating = true;
			
			// move the visible element off the screen
			$(this).animate( {left:"-100%"} , 1000, function(){ 
				// move the element to the right of others
				$(this).css( {left: "100%", display:"none"} );
				// set animation is done
				isAnimating = false;
				
			} );
			// detect next element to move
			var elementToAnimate = $(this).next();
			// if next element is not existing
			if(elementToAnimate.length == 0)
			{
				// get first element
				elementToAnimate = $('.gallery img:first-of-type');
			}
			// show the first element to be displayed
			elementToAnimate.css({display: "block"});
			// fly the element to be flown - inside
			elementToAnimate.animate({left:"0%"}, 1000);
		}
		
		
	});
	
	
	
	// on click on any circle
	$('.circle').click(function(){
		
		// if the site is not currently animating
		if(isAnimating == false)
		{
			if( $('.gallery img:visible').index()  !=  $(this).index())
			{
				// tell the site we are animating
				isAnimating = true;
				// move the visible element off the screen
				$('.gallery img:visible').animate( {left:"-100%"} , 1000, function(){ 
					// move the element to the right of others
					$(this).css( {left: "100%", display:"none"} );
					// set animation is done
					isAnimating = false;
					
				} );
				
				// get the currently clicked element - its index 
				var currentNumber = $(this).index();
				// get the image corresponding to this index
				var nextImage = $('.gallery img').eq(currentNumber);
				// set the image to be visible
				nextImage.css('display','block');
				// animate the image to the proper place
				nextImage.animate({left:"0%"}, 1000);
			}
		}
		
		
	});
	
	
	function showNext()
	{
		$('.gallery img:visible').click();
	}
	
	setInterval(showNext,5000);
});