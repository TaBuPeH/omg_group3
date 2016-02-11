$(document).ready( function(){
	var clickedElement;
	var prevImg,nextImg;
	var imgArray = new Array();
	
	$('.gallery img').click(function(){
		
		nextImg = $(this).next();
		if(nextImg.length == 0)
		{
			nextImg = $('.gallery img:first-of-type');
		}	
		
		prevImg = $(this).prev();
		if(prevImg.length == 0)
		{
			prevImg = $('.gallery img:last-of-type');
		}	
		
		
		
		if(nextImg.hasClass('active') || prevImg.hasClass('active'))
		{
			if(prevImg.hasClass('active'))
			{	
				moveFromRight($(this));
			}
			else
			{
				moveFromLeft($(this));
			}
		}
		
		
		
	});
	
	
	function moveFromRight(currentElement)
	{
		
		imgArray[0] = currentElement;
		imgArray[1] = nextImg;
		var x = nextImg.next();
		if(x.length == 0)
		{
			x = $('.gallery img:first-of-type');
		}
		imgArray[2] = x;
		imgArray[3] = $(".active");
		
		
		
		imgArray[0].animate({width: "50%", left: "25%", top:"40%"}, 500);
		imgArray[1].animate({width: "35%", left: "60%", top:"30%"}, 500);
		imgArray[2].animate({width: "30%", left: "35%", top:"10%"}, 500);
		imgArray[3].animate({width: "35%", left: "5%", top:"30%"}, 500, function(){
			
			imgArray[3].removeClass('active');
			imgArray[0].addClass('active');
		});
		
		setTimeout(function(){ 
		
			imgArray[0].css('z-index',1000);
			imgArray[1].css('z-index',900);
			imgArray[2].css('z-index',800);
			imgArray[3].css('z-index',900);
		} ,250);
	}
	
	
	function moveFromLeft(currentElement)
	{
		imgArray[0] = currentElement;
		imgArray[1] = prevImg;
		var x = prevImg.prev();
		if(x.length == 0)
		{
			x = $('.gallery img:last-of-type');
		}
		imgArray[2] = x;
		imgArray[3] = $(".active");
		
		
		
		imgArray[0].animate({width: "50%", left: "25%", top:"40%"}, 500);
		imgArray[1].animate({width: "35%", left: "5%", top:"30%"}, 500);
		imgArray[2].animate({width: "30%", left: "35%", top:"10%"}, 500);
		imgArray[3].animate({width: "35%", left: "60%", top:"30%"}, 500, function(){
			
			imgArray[3].removeClass('active');
			imgArray[0].addClass('active');
		});
		
		setTimeout(function(){ 
		
			imgArray[0].css('z-index',1000);
			imgArray[1].css('z-index',900);
			imgArray[2].css('z-index',800);
			imgArray[3].css('z-index',900);
		} ,250);
	}
	
} );