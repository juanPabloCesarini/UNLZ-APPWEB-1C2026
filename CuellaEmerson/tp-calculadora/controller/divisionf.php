<?php

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$opera= $_POST['operacion'];

if ($numero2 == 0) {
    $resultado = "Error: no se puede dividir por 0 tas loco pa";
} else {
    $resultado = $numero1 / $numero2;
}

require_once '../view/vista_resultado.php';

?>