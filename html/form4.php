<?php

//strlen para que cuente la longitud del nombre 
if ($_REQUEST['nombre'] == ""){
    print "<p>NO he escrito ningun nombre </p>";
}else{
    print "Su contraseña es " . $_REQUEST['pass']. "</p>";
    echo "longitud del nombre " . strlen($_REQUEST["nombre"]);
}
?>