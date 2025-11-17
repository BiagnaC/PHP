<?php
    $archivoContactos = "contacto.txt";
    $accion = $_REQUEST['accion'];

    $nombre = $_REQUEST['nombre'];
    $trabajo = $_REQUEST['trabajo'];
    $telefono = $_REQUEST['telefono'];
    $direccion = $_REQUEST['direccion'];
    $otras = $_REQUEST['otras'];

    $contacto = "contacto: $nombre, $trabajo, $telefono, $direccion, $otras" . PHP_EOL;

    if ($accion == "Guardar") {
        $archivo = fopen($archivoContactos, "a");
        if ($archivo) {
            fwrite($archivo, $contacto);
            fclose($archivo);
            echo "<p>El contacto se ha guardado correctamente.</p>";
        } else {
            echo "<p>Error al guardar el contacto.</p>";
        }

    } elseif ($accion == "Listar") {
        if (file_exists($archivoContactos)) {
            $contenido = file_get_contents($archivoContactos);
            echo "<h3>Lista de Contactos:</h3>";
            echo "<pre>$contenido</pre>";
        } else {
            echo "<p>No hay contactos guardados aún.</p>";
        }

    } elseif ($accion == "Buscar") {
        $nombreBuscar = $_REQUEST['nombre'];
        if (file_exists($archivoContactos)) {
            $encontrado = false;
            $archivo = fopen($archivoContactos, "r");
            echo "<h3>Resultado de la búsqueda:</h3>";
            while (($linea = fgets($archivo)) !== false) {
                if (stripos($linea, $nombreBuscar) !== false) {
                    echo "<pre>$linea</pre>";
                    $encontrado = true;
                }
            }
            fclose($archivo);
            if (!$encontrado) {
                echo "<p>No se encontró ningún contacto con el nombre \"$nombreBuscar\".</p>";
            }
        } else {
            echo "<p>No hay contactos guardados para buscar.</p>";
        }
    }
?>

<a href="Ejercicio4.html">Volver al formulario</a>
