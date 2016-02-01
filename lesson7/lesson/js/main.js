
/*
 * Integer - 1 , 4, 6 ,19 , -9
 * Double / Float  - 3.14, 2.54
 * String - "text"
 * Char - "a"; // virtually not existent
 * boolean - True/False
 * */
var a;

a="5";
b=5;
c=5.0;

console.log(a);
console.log(b);
console.log(c);

// if you add (+) string with anything else you get a string 
// mathematical expressions are evaluated left to right

console.log(b+c+a);

var d = parseFloat(a); // d = 5.0 - float type
var e = parseInt(a); // 

var f = parseFloat('123.45qw234asd213');
var g = parseInt('123.60qw234asd213');



var apple = 5;
var pear = 6;
var watermellon = 1;

apple = apple - 1;
pear = pear - 1;
watermellon = watermellon - 1;

var fruit = Array();

fruit['apple'] = 5;
fruit['pear'] = 6;
fruit['wm'] = 1;





var numbers = Array();

numbers[0] = 5;
numbers[1] = 6;
numbers[2] = 7;


for(i in fruit)
{
	fruit[i] = fruit[i]-1;
}


function sum(x,y)
{
	var z = x + y;
	return z;
}


var c1 = 1;
var c2 = 5;


var c3 = sum(c1,c2); // sum(1,5);

var c3 = sum(6,8);











var a;

var b;

a = 5;

b = 7;

c = a+b; // c = 5 + 7;



var iztegleni = Array();

var number = parseInt(Math.random()*49) + 1;  // 0-48
											  // 1-49


// How to properly draw a random number in javascript
// do this 6/42
// sort the array ascending
// do this with For and reverse checking - 2 for cycle within eachother

// докато имаме по малко от 6 елемента в масива
while(iztegleni.length < 6)      // iztegleni.length = 0;
{								 // iztegleni.length = 1;
								 // iztegleni.length = 2;
	// изтегли произволно число от 1-49
	var number = parseInt(Math.random()*49) + 1; // 44
												 // 9
												 // 44
												 // 44
												 // 35
	// провери дали indeOf изтегленото число съществува в масива
	if(iztegleni.indexOf(number) == -1)   // indexOf(44) = 0;
	{
		// ако не съществува (връща -1)
		
		iztegleni[iztegleni.length] = number;
		// iztegleni[0] = 44;
		// iztegleni[1] = 9;
		// iztegleni[2] = 35;
		
	}

}



/*
 * 
 * 
 * Спортен тотализатор 6 / 49
 * 
 * 
 * 
 * 
 */





















