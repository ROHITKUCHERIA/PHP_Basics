<?php

/* Php Data Types 

1. :String  
2. :Integer
3. :Float
4. :Boolean
5. :Object
6. :Array
7. :Null

*/

// String - Sequence of characters
$name = "Rohit Kucheria";
$friend = "Manish";
echo "$name ka brother $friend";

echo "<br>";
// Integer - Non decimal number
$income = 455;
echo "$income";

echo "<br>";
// Float - Decimal Point number
$income = 344.5;
$salary=-456.6;
echo "My income $income and salary $salary";

echo "<br>";
//boolean - Can be either true or false
$x = true;
$is_friend = false;
echo $x;
echo "<br>";
//var_dump() function print actual variable data and it's type;
echo var_dump($is_friend);

//Object - Instances of classes
//Employee is a class ---> Rohit Kucheria can be one object
echo "<br>";

// Array -  Used to store multiple values in a single variable
$Array = array("Rohit","kucheria","Manish","Rajesh");
echo var_dump($Array);
echo "<br>";
echo var_dump($Array[0]);
echo "<br>";
echo var_dump($Array[1]);
echo "<br>";
echo var_dump($Array[2]);
echo "<br>";
echo $Array[3];
echo "<br>";
echo var_dump($Array[4]);

?>

