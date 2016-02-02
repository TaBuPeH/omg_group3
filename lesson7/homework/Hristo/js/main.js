

function toto()
{
    var iztegleni = Array();

    while(iztegleni.length < 5)
    {


        var number = Math.round(Math.random()*42) + 1;

        if(iztegleni.indexOf(number) == -1)
        {
            iztegleni[iztegleni.length] = number;
        }

    }

    console.log(iztegleni)

}

function toto2()
{
    var iztegleni = Array();

    while(iztegleni.length < 6)
    {

        var number = Math.round(Math.random()*46) + 1;
        var flag = false;

        for( var i=iztegleni.length-1 ; i>=0 ; i--) {

            if( number==iztegleni[i]) {
                flag = true;
            }
        }

        if(flag==false){
            iztegleni[iztegleni.length]=number;
        }

    }

    console.log(iztegleni)

}

function number() {


    var number = Math.round(Math.random()*900)+100;

    if ( Math.floor(number/100)+ Math.floor(number/10%10)+ Math.floor(number%10)  == 13)   {
            alert("Yes");
    }
    else {alert('No');}

    console.log(number);
}