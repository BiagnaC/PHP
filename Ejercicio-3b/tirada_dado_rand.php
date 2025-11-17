<?php //refrescar con F5
print "<h1>Tirada de dado</h1>";
$dado = rand(1,6);
print "<p>Ha sacado un $dado.</p>";

if ($dado == 6){
    print "<p>¡Ha conseguido la máxima puntuación!</p>";
}else{
    print "<p>Tienes menos de 6</p>";
}
print "<p>¡Hasta la próxima!</p>";
?>