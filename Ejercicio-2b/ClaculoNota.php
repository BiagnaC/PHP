<?php
//--Calculo de Notas:
//--Defina una lista con la notas de 5 examenes de un alumno
//
//

$listaNota=[7.5, 8.0, 6.5, 9.0, 7.0];
$maximo= max($listaNota);
print"<p>La nota mas alta es: $maximo</p>";

$minimo= min($listaNota);
print"<p>La nota mas baja es: $minimo</p>";

$sumaNota=count($listaNota);
$suma=array_sum($listaNota);
$promedio=$suma/$sumaNota;
print"El promedio de todas las notas es: <h1>$promedio</h1>";
?>


