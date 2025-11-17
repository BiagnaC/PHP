<?php

$nombre_archivo = "Mostrar_contenido.txt";
// Obtener contenido del archivo por cadena

$contenido = file_get_contents($nombre_archivo);
echo "El contenido es: " . $contenido;

?>