<?php
//valor absoluto
$a=4.2*-1;
$b=3;
var_dump(abs($a));
echo"<br> <br>";
//redondear numero
var_dump(round($a));
echo"<br> <br>";
//escojer el valor mas alto i el mas bajo
var_dump(max($a,$b));
var_dump(min($a,$b));
echo"<br><br>";
//numero random
echo rand($a,$b) ;




?>