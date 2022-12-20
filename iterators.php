<?php

for($i=0; $i<9; $i++){
    echo $i;
};
echo"<br>";

$a = array ("uno", "dos", "tres", "cuatro");
foreach($a as $numbers){
    echo "algo $numbers <br>";
}

$i = 0;
while ($i < 3) {
    $i++;
echo "$i<br>";
}


$i2=0;
do{
    $i2++;
echo "$i2";
}while($i2<8);

?>