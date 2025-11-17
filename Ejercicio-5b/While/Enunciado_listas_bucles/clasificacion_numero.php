<?php
// Escriba un programa que cuente cuantos numeros son 
//positivo (mayor que 0)
// negativo (menor que 0)
// ceros (iguales a 0)

print"<h2>Enunciado 1: Listas y bucles </h2>";

$numeros= [-5,8,-12,3,0,7,15,-4,11,6];

$positivo=0;
$negativo=0;
$ceros=0;
$longitud=count($numeros);

print "<p>lista de números: $numeros </p> ";
for($i = 1; $i <= $longitud; $i++){
    if ($numeros > 0){
        $positivo++;
    }
    else if ($numeros < 0){
        $negativo++;
    }else{
        $ceros++
    }
}
print $numeros[$i]. " ";
print "<p>El numero positivo es $positivo</p>";
print "<p>El numero negativo es $negativo</p>";
print "<p>Los numeros iguales a cero  $ceros</p>";

?>
