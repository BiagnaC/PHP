<?php
$total = 0;
$numero = 5;

print "<h2>jugador1</h2>";
for ($i = 0; $i < $numero; $i++){
    $dado1 = rand(1,6);
    print "<img src='./img/$dado1.jpg' height='140'>";
    $total1 = $total1+$dado1;
}
print"<p>El total de punto obtenidos es <b>$total1</b>.</p>";

print "<h2>jugador2</h2>";
for ($i = 0; $i < $numero; $i++){
    $dado2 = rand(1,6);
    print "<img src='./img/$dado2.jpg' height='140'>";
    $total2 = $total2+$dado2;
}
print"<p>El total de punto obtenidos es <b>$total2</b>.</p>";

if($total1>$total2){
    print "El ganador es jugador1";
}else{
    print "El ganador es jugador2";
}
?>