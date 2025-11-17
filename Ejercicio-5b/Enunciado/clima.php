<?php

//EJERCICIO: SISTEMA DE CLIMA ALEATORIO
//Crea un programa PHP que simule un sistema de clima para una ciudad. El programa debe:
//Generar tres variables con valores aleatorios:
//-Temperatura: número entre -25 y 50 grados
//-Humedad: número entre 0 y 100%
//-Lluvia: número entre 0 y 50 mm

//Mostrar los valores obtenidos

//Determinar y mostrar el estado del clima según estas condiciones:

//-Si la temperatura es menor a 0° → "¡ALERTA POR HELADA!"
//-Si la temperatura es mayor a 35° → "¡ALERTA POR CALOR EXTREMO!"
//-Si la humedad es mayor a 80% y lluvia es mayor a 20mm → "¡ALERTA POR TORMENTA!"
//-Si la lluvia es mayor a 30mm → "¡RIESGO DE INUNDACIÓN!"
//-Si ninguna alerta se activa → "Clima normal para la temporada"

$Temperatura = rand(-25, 50);
$Humedad = rand(0, 100);
$Lluvia = rand(0, 50);
$Alerta=false;

print "<p>La temperatura es $Temperatura º</p>";
print "<p>La Humedad es $Humedad %</p>";
print "<p>La lluvia es $Lluvia mm</p>";


if ($Temperatura <= 0){
    print " <p>¡ALERTA POR HELADA! </p>";
    $Alerta=true;
}elseif($Temperatura >= 35){
    print " <p>¡ALERTA POR CALOR EXTREMO! </p>";
    $Alerta=true;
}elseif($Humedad >= 80 && $Lluvia >= 20){
    print "<p>¡ALERTA POR TORMENTA !</p>";
    $Alerta=true;
}elseif($Lluvia >= 30){
    print "<p>¡RIESGO DE INUNDACIÓN!</p>";
    $Alerta=true;
}else{
    print "<p>¡Clima Normal para la Temperatura!</p>";
}

?>

