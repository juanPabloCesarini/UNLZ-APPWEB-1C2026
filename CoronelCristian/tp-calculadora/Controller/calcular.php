<?php

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$operacion = $_POST["operacion"];

$resultado = "";

if ($operacion == "+" ) {
    $resultado = $numero1 + $numero2;
}

if ($operacion == "-" ) {
    $resultado = $numero1 - $numero2;
}

if ($operacion == "*" ) {
    $resultado = $numero1 * $numero2;
}

if ($operacion == "/" ) {
    $resultado = $numero1 / $numero2;
}
   
    require_once '../View/vista_resultado.php';

?>
