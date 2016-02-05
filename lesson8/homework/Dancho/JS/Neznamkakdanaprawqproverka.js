var i = 1;
var number;


document.addEventListener("DOMContentLoaded", function(event) { 

	var pickNumbers = document.getElementById('pick');
	var resetNumbers = document.getElementById('reset');

	pickNumbers.addEventListener('click', function(){
		number = Math.floor(Math.random()*49+1);


		if ( i >6 ) 
		{
			i = 1;
			resetNum();
		};
		
		


		document.getElementById('text'+i).innerHTML = number;
		i++;

	});

	resetNumbers.addEventListener('click', function(){
		
		i = 1;
		resetNum();
	});
});

function resetNum()
{
	for(var i=1;i<=6;i++)
	{
		document.getElementById('text'+i).innerHTML = null;
	}
	
}

