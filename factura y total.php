<?php

$cliente = $_POST["cliente"];

$producto = $_POST["producto"];

$cantidad = (float) $_POST["cantidad"];

$precio = (float) $_POST["precio"];

$subtotal = $cantidad * $precio;

$total = $subtotal;

echo "<h2>FACTURA</h2>";

echo "Cliente: " . $cliente;

echo "<br><br>";

echo "Producto: " . $producto;

echo "<br><br>";

echo "Cantidad: " . $cantidad;

echo "<br><br>";

echo "Precio Unitario: $" . $precio;

echo "<br><br>";

echo "Subtotal: $" . $subtotal;

echo "<br><br>";

echo "Total a pagar: $" . $total;

?>
