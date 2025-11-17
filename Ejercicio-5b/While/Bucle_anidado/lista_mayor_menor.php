<?php
// Hacer un programa que analice una lista de numeros y determine:
//El numero mayor de la lista
//El numero menor de la lista

print"<h2>Ejercicio 2: Mayor y Menor de lista </h2>";

$numeros= [5,8,12,3,9,7,15,4,11,6];
$mayor=$numeros[0];
$menor=$numeros[0];
$longitud=count($numeros);

print "<p>lista de números: $numeros </p> ";
for($i = 1; $i < $longitud; $i++){
    if ($numeros[$i] > $mayor){
        $mayor = $numeros[$i];
    }
    if ($numeros[$i] < $menor){
        $menor = $numeros[$i];
    }
}
print $numeros[$i]. " ";
print "<p>El numero mayor es $mayor</p>";
print "<p>El numero menor es $menor</p>";

?>


