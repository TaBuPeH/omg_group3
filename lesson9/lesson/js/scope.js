

var a = 5;

var z =5;


function x()
{
    var a = 7;
	alert(a);
	
	alert (this.a);
	
	var z = function()
	{
	     var a = 9;
		alert(a);
	};
}

x();
z();
alert(a);


x.addEventListener("", m);

var m = function(){   };
//alert(a);

