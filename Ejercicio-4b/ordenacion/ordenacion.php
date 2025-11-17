<?php
    //No me funciona 

    $numeros= [5,2,8,1,9];
    $maximo= max($numeros);
    print"<p> $maximo</p>";  //muestra 9

    $minimo= min($numeros);
    print"<p>$minimo</p>";  //muestra 1

    $suma= array_sum($numeros);
    print"<p>$suma</P>"; // muestra 25

    $numeros= [3,1,2];
    sort($numeros);
    // Ahora: [1,2,3]

    $numeros= [3,1,2];
    rsort($numeros);
    // Ahora: [3,2,1]
?>