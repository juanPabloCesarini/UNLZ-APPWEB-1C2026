<?php
//valido que no se divida por cero
if ($numero2 == 0) {
    $error = "No se puede dividir por cero.";
    require_once '../View/vista_error.php';
    exit();
}

// divido el primer número por el segundo
$resultado = $numero1 / $numero2;