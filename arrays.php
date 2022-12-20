<?php
$a=array("hol","ahvl","a");
print_r($a);
echo"<br>";
$num=[1,2,3];
print_r($num);
echo"<br>";
$gaming = array (
    array("Ps5",16,19),
    array("NSwtich",17,12),
    array("XboxScorpion",4,1),
    array("Wii",20,12)
  );

  echo $gaming[0][0].": In stock: ".$gaming[0][1].", sold: ".$gaming[0][2].".<br>";

  echo"<br>";
  $cars=array("Volvo","BMW","Toyota");
echo sizeof($cars);

echo"<br>";

$p = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($p, $b);
print_r( $c);
echo"<br>";

$fruits = array('apple', 'banana', 'avocado');
echo end($fruits);
echo"<br>";
$stack = array("orange", "banana");
array_push($stack, "apple", "avocado");
print_r($stack);

?>