<?php
//Obtener los datos del formulario
$nombre = $_POST['nombre']; //nombre dentro del corchete es el name del formulario
$email = $_POST['email'];
//control de errores
//Comprobar que el archivo existe o crearlo si no existe

$archivo = 'correos.txt';
if (!file_exists($archivo)){
    fopen($archivo, 'w'); //crear el archivo vacio
}
// Abrir el archivo en modo escritura y agregar los datos
$file = fopen($archivo, 'a');
fwrite($file, "$nombre:$email" . PHP_EOL);
fclose($file);
echo "<br><a href='guardar_correo.html'> volver</a>";
?>