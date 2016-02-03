document.addEventListener("DOMContentLoaded", function(event) { 
			
	document.getElementById('firstImage').addEventListener("click",function(){
		
		document.getElementById('mainImg').src='img/galleryPic_1.jpg';
		
	});
	
	document.getElementById('secondImage').addEventListener("click",function(){
		
		document.getElementById('mainImg').src='img/galleryPic_2.jpg';
	});

	document.getElementById('thirdImage').addEventListener("click",function(){
		
		document.getElementById('mainImg').src='img/galleryPic_3.jpg';
	});
	
	
	
	setTimeout( closeMyWindow , 2000  );

	// 2000 msec = 2sec
	
	
	function closeMyWindow()
	{
		close(); 
	}
});