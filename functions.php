<?php
$a= 5;
$b=6;
echo "a=4";
echo"<br><br>";
echo "b=6";

echo"<br><br>";
function sum($a,$b){
    return $a+$b;
}
echo "10+4 =".sum(10,4);
echo"<br><br>";
function mult($a,$b){
    return $a*$b;
}
echo "10*4 =".mult(10,4);
echo"<br><br>";
function div($a,$b){
    return $a/$b;
}
echo "10/4 =".div(10,4);
echo"<br><br>";
function all($a,$b){
return $a*$b+"8"-$a/"2";
}
echo "a+b+8-a/2= ".all(10,4);


?>