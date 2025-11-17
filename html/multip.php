<?php
//tabla de multiplicar 

$numero = trim(strip_tags($_REQUEST ['numero']));

if(is_numeric($numero)){
    for ($i = 1; $i <= 10 ; $i++){
        echo $numero . "x" .$i. "=" .$numero*$i;
        echo "<br>";
    }
}else{
    echo "No es un numero ";
}

?>