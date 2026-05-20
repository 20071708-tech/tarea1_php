<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

if($numero1 < $numero2)
{
    echo "El número menor es: " . $numero1;
}
else
{
    if($numero2 < $numero1)
    {
        echo "El número menor es: " . $numero2;
    }
    else
    {
        echo "Los números son iguales";
    }
}

?>
