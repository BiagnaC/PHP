<?php
$lista_compra=["Pan", "Leche", "Huevos", "Fruta", "Queso"];
echo"<p>Primer producto: $lista_compra[0]</p>";
echo"<p>Último producto: $lista_compra[4]</p>";
echo"<p>Tercer producto: $lista_compra[2]</p>";

$cantidad = count($lista_compra);
echo"<p>Total de producto en la lista: $cantidad</p>";
?>