<?php
print"<h2>Ejercicio 1: Suma y Media</h2>";
$numeros= [5,8,12,3,9,7,15,4,11,6];
$suma=0;

print "lista de números: ";
for ($i = 0 ; $i < count($numeros); $i++){
    print $numeros[$i]. "";
    $suma = $suma + $numeros[$i];
}
$media = $suma / count($numeros);
print "<br>Suma total: $suma";
print "<br>La media es : $media";

?>