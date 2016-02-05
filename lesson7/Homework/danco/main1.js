var numbers =prompt("wuwedi chisla")
if(numbers<100 || numbers>999)
{
	confirm("Invalid input")
}
else
{
	var a=Math.floor(numbers/100);
	var b=Math.floor(numbers/10%10);
	var c=Math.floor(numbers%10);
	var sum=a+b+c;

	if(sum==13)
	{
		console.log("True that!")
	}
}