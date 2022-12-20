<?php
print "Text";
echo "<br><br>";

$a="hola";
print $a;
echo "<br><br>";

$a.=" text";
echo $a;
echo "<br><br>";


$j= "Hola a todos";
echo str_replace("Hola","Adios",$j);
echo "<br><br>";


$v="Vamos a pacha";
echo str_ireplace("vamos","O no vamos",$v);
echo "<br><br>";
$const=" vivir";
echo str_repeat($const,10);
echo "<br><br>";


$o="a s d f g h f";
echo strlen($o);
echo "<br><br>";


echo strpos("hola a todos,i a todes","a");
echo "<br><br>";


echo strtoupper("Hello WORLD!");

echo "<br><br>";
echo strtolower("Hello WORLD.");

echo "<br><br>";
$rest = "como vas a salir";
echo substr("como vas a salir", 3, -3);



?>
