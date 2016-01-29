var iztegleni = Array();

var number = Math.floor(Math.random()*42) + 1;


while(iztegleni.length<6)
{

	var number = Math.floor(Math.random()*42) + 1;

	if(iztegleni.indexof(number) == 1)
	{

		iztegleni[iztegleni.length]= number;
		

	}

}
iztegleni.sort()