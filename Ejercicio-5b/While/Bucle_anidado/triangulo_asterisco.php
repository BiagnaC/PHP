<?php

$alto=rand(1, 7);

print"<h1>Triángulo de asteriscos</h1>";
print"<p>Altura: $alto</p>";
for ($i = 1 ; $i <= $alto; $i++){
    for ($j = 1 ; $j <= $i; $j++){
        print " * ";
    }
    print "<br>";
}
?>