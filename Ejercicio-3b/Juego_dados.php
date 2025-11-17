<?php // Juego del dado con las imagenes
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
$dado3 = rand(1, 6);
print " <p>";
print " <img src='img/$dado1.jpg' height=140>";
print " <img src='img/$dado2.jpg' height=140>";
print " <img src='img/$dado3.jpg' height=140>";
print " </p>";

?>