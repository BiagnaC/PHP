<?php
//trim elimina espacios delante y detras de un campo 
//strip_tags quita etiquetas HTML

if (trim(strip_tags($_REQUEST['nombre'])) == ""){
    print "<p>No ha escrito ningun nombre </p>";
}else{
    print " <p> Su nombre es: " .trim(strip_tags($_REQUEST['nombre'])). "</p>";
}
?>