<?php

$nombre = $_POST["nombre"];

$horas = (float) $_POST["horas"];

$pago = (float) $_POST["pago"];

$salario = $horas * $pago;

echo "Nombre del empleado: " . $nombre;

echo "<br><br>";

echo "Salario total: $" . $salario;

?>