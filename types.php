<?php
//Boolean
$a = true; // assign true to $a
$b = false; // assign false to $b

var_dump($a);
var_dump($b);
echo "<br><br>";
//Integers
// 128 in different notations
$a = 128; 			// decimal number
var_dump($a);

$a = -128; 			// a negative number
var_dump($a);

$a = 0x80; 			// hexadecimal number
var_dump($a);

$a = 0200; 			// octal number
var_dump($a);

$a = 0b10000000;	// binary number
var_dump($a);
echo "<br><br>";
//Float
$a = 2.56;
var_dump($a);


$a = 2.56e-5; // 2.56 multiplied by -5th power of 10 
var_dump($a);
echo "<br><br>";
//String
$str = 'This is a string';


var_dump($str);
echo "<br><br>";
//Array
$array = array('Apple', 'Banana', 'Orange', 'Mango');
var_dump($array);


echo "<br><br>";
//Null


// unsetting variables with null
$text = 'Hello World';
$text = null; // now $text does not hold any value

var_dump($text);

echo "<br><br>";
//Object
$objects = (object)["objeto1"=>"mobile","objecto2"=>"calculator"];
echo "comprate un:$objects->objeto1 <br>";
var_dump($objects);
echo"<br>"






?>