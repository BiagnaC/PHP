<?php

//Ejercicio de examen de hace unos años

$alto=rand(5, 10);
$ancho=rand(5, 10);

print"<h1>Cuadrado</h1>";
for ($i = 1 ; $i <= $alto; $i++){
    for ($j = 1 ; $j <= $ancho; $j++){
        print " * ";
    }
    print "<br>";
}
?>