<?php
$nombreArchivo = "clase2.txt";
$mensaje = "Texto en el fichero";

//Abrir un fichero 
$archivo = fopen($nombreArchivo, "a"); //W-write (no se sobreescribe) a-append (se coloca debajo de lo que ya esta escrito)
echo $archivo;
fwrite ($archivo, $mensaje);
fclose($archivo); //Cierra el fichero 

?>