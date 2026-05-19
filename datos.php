
<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

if($numero1 > $numero2)
{
    echo "El número mayor es: " . $numero1;
}
else if($numero2 > $numero1)
{
    echo "El número mayor es: " . $numero2;
}
else
{
    echo "Los dos números son iguales";
}

?>