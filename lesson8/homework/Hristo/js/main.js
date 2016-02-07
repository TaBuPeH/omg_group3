document.addEventListener("DOMContentLoaded", function(event) {


    var startButton = document.getElementById("newNumbers");

    startButton.addEventListener("click" , function() {

        var iztegleni = Array();

        while(iztegleni.length < 6)
        {
            var number = Math.round(Math.random()*46) + 1;

            if(iztegleni.indexOf(number) == -1)
            {
                iztegleni[iztegleni.length] = number;
                var id = "number" + iztegleni.length;
                document.getElementById(id).innerHTML = number ;
            }

        }

        console.log(iztegleni);

    });




    document.getElementById("reset").addEventListener("click", function() {

        for ( var i=0 ; i<6 ; i++){

            var id = "number" + (i+1);
            document.getElementById(id).innerHTML = null ;

        }

    });

});








