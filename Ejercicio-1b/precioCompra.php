<?php
//Calcula el precio de la compra
//Crea un programa que:
//--Defina el precio de un producto
//--Defina la cantidad de productos comprados
//--Calcule el precio total (precio x cantidad)
//--Aplique un descuento del 10%
//--Muestre el precio Final con un mensaje

$producto=100;
$cantidad=10;
$calculo=$producto * $cantidad;
$descuento = $calculo-($calculo * 0.1);
print"<p>precio final es: $descuento</p>";
?>