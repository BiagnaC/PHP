<?php
$nombreBuscado = $_POST['nombre'];
$archivo = 'correos.txt';
$file = fopen($archivo, 'r');
$encontrado = false; // si no esta en false
while (!feof ($file)){
    $linea = trim(fgets($file));
    if (!empty($linea)){
        //BUscar el patron "nombre:correo"
        $partes =explode(':', $linea);
        if(strcmp($nombreBuscado, $partes[0]) == 0){
            echo"Nombre: " . $partes[0] . "<br>";
            echo"Correo: " . $partes[1] . "<br>";
            $encontrado = true;
        }
    }
}
fclose($file);
if(!$encontrado){
    echo "No se encontro ningun correo para el nombre $nombreBuscado.";
}
?>