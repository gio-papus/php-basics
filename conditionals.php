<?php
if(date("D")==="Mon"){
echo "today  monday";
}else{
    echo "not monday";
}

echo "<br><br>";

if(date("F")==="Octomber"){
    echo "today octomber";
}else{
    echo "today not octomber";
}

echo "<br><br>";

$date = date("i");

if($date <= 10){
    echo "the current minute is less than 10";
} else if ($date >= 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}
echo "<br><br>";
$dia = date("D");

switch($dia){
    case 'Mon':
    echo "Today is monday";
    break;
    case 'Tue':
    echo "Today is tuesday";
    break;
    case 'wed':
    echo "Today is wednesday";
    break;
    case 'thu':
    echo "Today is thusday";
    break;
    case 'fri':
    echo "Today is friday";
    break;
    case 'sat':
    echo "Today is satuday";
    break;
    case 'sun':
    echo "Today is sunday";
    break;}
    




?>