<?php

$alto=rand(5,10);
$ancho=rand(5,10);

print"<h1>Cuadrado Vacío</h1>";
print"<p>alto: $alto - ancho: $ancho</p>";
print "<pre>";

for ($i = 1; $i <= $alto; $i++){
    for ($j = 1; $j <= $ancho; $j++){
        if ($i == 1 || $i == $alto || $j ==1 || $j ==$ancho){
            print "*";
        }else{
            print " " ; //Espacio Normal
        }  
    }
    print "<br>";
}
print "</pre>" ;//para poder dibujar los espacios
?>
