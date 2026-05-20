<?php

$precio = (float) $_POST["precio"];

/* IVA del 13% */

$iva = $precio * 0.13;

$total = $precio + $iva;

echo "Precio del producto: $" . $precio;

echo "<br><br>";

echo "IVA: $" . $iva;

echo "<br><br>";

echo "Total con IVA incluido: $" . $total;

?>