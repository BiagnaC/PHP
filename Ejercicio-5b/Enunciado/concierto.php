<?php

//EJERCICIO: SISTEMA DE ACCESO A UN CONCIERTO
//Crea un programa PHP que simule el control de acceso a un concierto. 
//El programa debe: Generar cuatro variables aleatorias:
//-Edad: número entre 15 y 70 años
//-Ticket: número 0 o 1 (0 = sin ticket, 1 = con ticket)
//-Hora: número entre 16 y 24 (hora de llegada)
//-Acompañantes: número entre 0 y 3

//Mostrar todos los datos generados

//Aplicar las siguientes reglas de acceso:
//-ACCESO PERMITIDO si: Tiene ticket Y edad >= 18 Y hora <= 23
//-ACCESO CON RESTRICCIONES si: Tiene ticket Y (edad entre 16-17) Y hora <= 22
//-ACCESO DENEGADO si: No tiene ticket O edad < 16 O hora > 23
//-ACCESO VIP si: Tiene ticket Y edad >= 18 Y hora <= 21 Y acompañantes <= 1

//Mostrar mensajes específicos según cada caso

$edad = rand(15, 70);
$ticket = rand(0, 1);
$hora = rand(16, 24);
$acompañante = rand(0, 3);


print "<p>La edad es: $edad </p>";
print "<p>Los ticket son: $ticket </p>";
print "<p>La hora de llegada es: $hora</p>";
print "<p>El número de acompañante es: $acompañante</p>";


if ($ticket == 1 && $edad >= 18 && $hora <= 23){
    print " <p>¡Acceso Permitido! </p>";
   
}elseif($ticket ==1 && ($edad >= 16 || $edad <=17) && $hora <= 22){
    print " <p>¡Acceso con Restricciones! </p>";
  
}elseif($ticket == 0 && $edad <= 16 && $hora >= 23){
    print " <p>¡Acceso Denegado! </p>";
    
}elseif($ticket == 1 && $edad >= 18 && $hora >= 21 && $acompañante <= 1){
    print " <p>¡Acceso Vip! </p>";
    
}

?>