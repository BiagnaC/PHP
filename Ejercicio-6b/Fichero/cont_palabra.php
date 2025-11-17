<?php

$nombre=$_REQUEST["nombre"]; //$_REQUEST recoge palabras
//Hace las comprobaciones
$fichero= "palabras_nombres.txt";

$esta=false; //verificar si el fichero existe antes de abrirlo

if (file_exists($fichero)){ 
    $fd = fopen($fichero, "r"); // Modo r, read
    while (!feof($fd)){
        $linea = fgets($fd); // lee del fichro una linea 
            if (($linea) != false){
            if(trim($linea) == trim($nombre)){
            //intval convierte a entero
            $esta = true;
        }
    }
}
fclose($fd);
}
if($esta == true){
    echo "Esta en el fichero";
}else{
    echo "NO !!!!!!";
}

?>