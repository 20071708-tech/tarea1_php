<?php

$compra = (float) $_POST["compra"];

if($compra >= 100)
{
    $descuento = $compra * 0.10;

    $total = $compra - $descuento;

    echo "Descuento aplicado: $" . $descuento;

    echo "<br><br>";

    echo "Total a pagar: $" . $total;
}
else
{
    echo "No aplica descuento";

    echo "<br><br>";

    echo "Total a pagar: $" . $compra;
}

?>