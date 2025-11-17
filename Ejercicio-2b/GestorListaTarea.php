<?php
//--Gestor de lista de tareas
//--Defina un array con 5 tareas pendientes: Estudiar PHP, Hacer la compra, Llamar al medico, Pasear al perro, Limpiar la casa
//--Muestre la lista completa de tareas, cada una en una linea diferente
//--Muestra en cada tarea hay en total en la lista
//--muestre la primera y ultima tarea de la lista
//--Muestre la tercera tarea de la lista




$lista=["Estudiar PHP", "Hacer la Compra", "Llamar al Medico", "Pasear al perro", "Limpiar la casa"];
$sumaLista=count($lista);
//foreach ($lista as $lista_biagna) {
    //print $lista_biagna . "<br>";
//}
print"<h1>La lista completa es: $sumalista</h1>";
print"<p>1-$lista[0]</p>";
print"<p>2-$lista[1]</p>";
print"<p>3-$lista[2]</p>";
print"<p>4-$lista[3]</p>";
print"<p>5-$lista[4]</p>";


$sumalista= array_sum($lista);
print"<h3>Hay un total de tarea: $sumaLista</h3>"; 
print"<p>La primera tarea es: $lista[0] y la Última tarea de la lista es: $lista[4]</p>";
print"<p>El tercer valor de la posición es: $lista[2]</p><br>";
?>