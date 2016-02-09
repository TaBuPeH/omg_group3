$(document).ready(function(){
	$('.circle').click(function(){

		//check if animation is on or same button is clicked
		if ($(':animated').length || $('.gallery img:visible').index()  ==  $(this).index()) 
		{
        	return false;
    	}

    	//change color of clicked button
    	$('.circle').css('background-color', 'white');
		$(this).css('background-color', 'red');
   
   		//animation from left to right
		if($(this).index() > $('.gallery img:visible').index())
		{
			$('.gallery img:visible').animate( {left:"-100%"} , miliseconds, function(){ 

				$(this).css( {left: "100%", display:"none"} );		
			});
					
			var currentNumber = $(this).index();
			var nextImage = $('.gallery img').eq(currentNumber);
			nextImage.css('display','block');
			nextImage.animate({left:"0%"}, miliseconds);
		}

		//animation from right to left
		if($(this).index() < $('.gallery img:visible').index())
		{
			$('.gallery img:visible').animate( {left:"100%"} , miliseconds, function(){ 

				$(this).css( {left: "100%", display:"none"} );
			});
					
			var currentNumber = $(this).index();
			var nextImage = $('.gallery img').eq(currentNumber);
			nextImage.css('left','-100%');
			nextImage.css('display','block');
			nextImage.animate({left:"0%"}, miliseconds);
		}

		//reset slideshow timer
		clearInterval(interval);
		interval = setInterval(changePic, 5000);

	});
	
	//slideshow incterval
	var interval = setInterval(changePic, 5000);
});

var index;
var miliseconds = 1000;

//slideshow function
function changePic() {

	index = $('.gallery img:visible').index() + 1;
	if(index == 3) index = 0;

	var circle = $('.circle').eq(index);

	miliseconds = 2000;
	circle.click();
	miliseconds = 1000;
}	