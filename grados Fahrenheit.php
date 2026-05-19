<?php

$celsius = $_POST["celsius"];

$fahrenheit = ($celsius * 9/5) + 32;

echo "Grados Fahrenheit: " . $fahrenheit;

?>