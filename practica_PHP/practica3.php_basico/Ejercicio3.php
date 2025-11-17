<?php
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $matriculado = isset($_POST['matriculado']) ? 'está matriculado' : 'no está matriculado';
    $ensenanza = $_POST['ensenanza'];
    $mostrar = $_POST['mostrar'];

    $mensaje = "El alumno $nombre, con teléfono $telefono, $matriculado en $ensenanza.";

    if ($mostrar == "pantalla") {
        echo "<h3>Resultado:</h3>";
        echo "<p>$mensaje</p>";
    } elseif ($mostrar == "archivo") {
        $archivo = fopen("datos.txt", "a");
        if ($archivo) {
            fwrite($archivo, $mensaje . PHP_EOL);
            fclose($archivo);
            echo "<p>Los datos se han guardado correctamente en 'datos.txt'.</p>";
            echo "<a href='mostrardatos.php'>Mostrar archivo</a>";
        } else {
            echo "<p>Error al abrir el archivo.</p>";
        }
    }
?>