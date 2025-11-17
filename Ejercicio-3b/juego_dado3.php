<?php
// Crea un juego de dados en PHP llamado "Dados ASIR" donde deberás generar tres variables que representen
//  dados de 6 caras usando números aleatorios entre 1 y 6.Luego, implementa un sistema de condicionales 
// que evalúe las combinaciones obtenidas: 
// --si los tres dados son iguales muestra el mensaje "ASIR GANA" junto con el valor de los dados.
// --Si los dados forman una escalera perfecta (1-2-3 o 4-5-6 en cualquier orden)muestra "Escalera Perfecta". 
// Si solo dos dados son iguales muestra "Pareja" indicando el valor de la pareja 
// --y si ninguna de estas combinaciones se cumple muestra "Carta Alta" con el valor del dado más alto.



$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
$dado3 = rand(1, 6);

print " <h1>Dados ASIR </h1>";
print " <img src='img/$dado1.jpg' height=140>";
print " <img src='img/$dado2.jpg' height=140>";
print " <img src='img/$dado3.jpg' height=140>";

if ($dado1 == $dado2 && $dado1 == $dado3){
    print " <p> ASIR Gana : $dado1. </p>";
}elseif ($dado1 == 1 && $dado2 == 2  && $dado3 == 3){
    print " <p>Escalera perfecta : $dado1 - $dado2 - $dado3. </p>";
}elseif ($dado1 == 4 && $dado2 == 5 && $dado3 == 6){
    print "<p>Escalera Perfecta: $dado1 - $dado2 - $dado3. </p>";
}elseif ($dado1 == $dado2){
    print "<p> Has obtenido una pareja: $dado1 - $dado2 </p>"; 
}elseif($dado1 == $dado3){
    print "<p> Has obtenido una pareja: $dado1 - $dado3 </p>"; 
}elseif ($dado2 == $dado3){
    print "<p> Has obtenido una pareja: $dado2 - $dado3 </p>";   
}else{
    print "<p> La Carta Alta es :" . max($dado1, $dado2, $dado3)."</p>";
}
?>


