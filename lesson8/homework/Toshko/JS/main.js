var index = 1;
var number

document.addEventListener("DOMContentLoaded", function(event) { 

	var pickNumbers = document.getElementById('pick');
	var resetNumbers = document.getElementById('reset');

	pickNumbers.addEventListener('click', function(){

		if ( index == 7 ) 
		{
			index = 1;
			reset();
		};

		number = Math.floor(Math.random()*49+1);
		checkForRepeat();

		document.getElementById('text_'+index+'').innerHTML = number;
		index++;

	});

	resetNumbers.addEventListener('click', function(){
		
		index = 1;
		reset();
	});
});

function reset()
{
	document.getElementById('text_1').innerHTML = null;
	document.getElementById('text_2').innerHTML = null;
	document.getElementById('text_3').innerHTML = null;
	document.getElementById('text_4').innerHTML = null;
	document.getElementById('text_5').innerHTML = null;
	document.getElementById('text_6').innerHTML = null;
}

function checkForRepeat()
{
	for (var i = 1; i < index; i++) 
		{
			var num = document.getElementById('text_'+i+'').innerHTML;

			if( number == num )
			{
				number = Math.floor(Math.random()*49+1);
				checkForRepeat();
			};
		};
}