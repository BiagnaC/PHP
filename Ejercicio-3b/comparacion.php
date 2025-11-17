<?php
// $$ (and) || (OR) !(NOT) "f5 para actualizar la pagina"

$diaMes = rand(1,31);
echo $diaMes. "<br>";

if($diaMes < 7){
    echo 'Estamos a primeros de mes';
}if($diaMes >= 7 && $diaMes <= 23){
    echo 'Es Mediado de mes';
}if($diaMes > 23){
    echo 'Es final de mes ';
}

?>