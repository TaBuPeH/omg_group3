var index;
$(document).ready(function(){

	$('.gallery img').each(function(){
		
		$('.circles').append('<div class="circle"></div>');
		
	});
	
	$('.circle').click(function(){

		if ($(':animated').length || $('.gallery img:visible').index()  ==  $(this).index()) 
		{
        	return false;
    	}

		if($(this).index() > $('.gallery img:visible').index())
		{
			$('.gallery img:visible').animate( {left:"-100%"} , 1000, function(){ 

				$(this).css( {left: "100%", display:"none"} );		
			});
					
			var currentNumber = $(this).index();
			var nextImage = $('.gallery img').eq(currentNumber);
			nextImage.css('display','block');
			nextImage.animate({left:"0%"}, 1000);
		}
		
		if($(this).index() < $('.gallery img:visible').index())
		{
			$('.gallery img:visible').animate( {left:"100%"} , 1000, function(){ 

				$(this).css( {left: "100%", display:"none"} );
			});
			var currentNumber = $(this).index();
			var nextImage = $('.gallery img').eq(currentNumber);
			nextImage.css('left','-100%');
			nextImage.css('display','block');
			nextImage.animate({left:"0%"}, 1000);
		}

	});

});
