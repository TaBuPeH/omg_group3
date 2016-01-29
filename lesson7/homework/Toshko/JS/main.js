function checkSum()
{
	var num = prompt("Enter a number between 100 and 999!");

	if( num < 100 || num > 999 )
	{
		alert("I said between 100 and 999!!!");
	}
	else
	{
		var a = Math.floor(num/100);
		var b = Math.floor(num/10%10);
		var c = Math.floor(num%10);
		var sum = a + b + c;

		if(sum == 13)
		{
			alert("Yes!")
		}
		else
		{
			alert("No!")
		}
	}
}