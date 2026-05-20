<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

if ($numero2 == 0)
{
    echo "<h2>No se puede dividir entre cero</h2>";
}
else
{
    $division = $numero1 / $numero2;

    echo "<h2>El resultado de la división es: $division</h2>";
}

?>