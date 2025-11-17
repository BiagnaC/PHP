<?php
$numero=$_REQUEST['numero']; //$_REQUEST recoge palabras
//Hace las comprobaciones
$fichero= "uno.txt";
$conteo=0;
$fd = fopen($fichero, "r"); // Modo r, read
while (!feof($fd)){
    $linea = fgets($fd); // lee del fichro una linea 
    if (intval($linea) == intval($numero)){
        //intval convierte a entero
        $conteo++;
    }
}
print "El numero $numero aparece $conteo veces en el fichero $fichero";
fclose($fd);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Buscar número en archivo</title>
</head>
<body>

<h3>Comprobar número</h3>

<form action="contador_numero.php" method="post">
    Introduce un número:
    <input type="number" name="numero" required>
    <input type="submit" value="Buscar">
</form>
</body>
</html>

