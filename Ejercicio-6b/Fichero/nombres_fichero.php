<?php
$nombreArchivo = "nombres.txt";
$archivo = fopen ($nombreArchivo, "w"); //muestra lo ultimo que ha guardado
//echo $archivo;
$nombres = array("luis", "Maria", "Carlos", "Paco", "Lucia");
for ($i= 0; $i<=count($nombres); $i++){
    fwrite($archivo,$nombres[i]. PHP_EOL); // End of Line
}
//foreach ($nombres as $n){
//fwrite ($archivo, $n . PHP_EOL);
//}
fclose($archivo);
echo "fichero creado...";

?>