<?php
    $archivo = "datos.txt";

    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        echo "<h3>Contenido de datos.txt:</h3>";
        echo "<pre>$contenido</pre>";
    } else {
        echo "<p>El archivo 'datos.txt' no existe.</p>";
    }
?>
