<?php
//Lista de correo
$archivo = 'correo.txt';
//Leer el contenido del archivo y mostrarlo

$contenido = file_get_contents($archivo);
echo "<pre>" . $contenido . "<pre>";
?>