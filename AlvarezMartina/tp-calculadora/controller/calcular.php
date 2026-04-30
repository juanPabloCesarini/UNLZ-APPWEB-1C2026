<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

if (($num1) === "" || ($num2) === "") {
    $error = "Los campos no pueden estar vacios";
    require_once "../views/error.php";
    exit;
}

if (!is_numeric($num1) || !is_numeric($num2)) {
    $error = "ERROR: Solo se pueden ingresar numeros";
    require_once "../views/error.php";
    exit;
}

switch ($operacion) {
    case 'suma':
        require_once "suma.php";
        break;
    case 'resta':
        require_once "resta.php";
        break;
    case 'multiplicacion':
        require_once "multiplicacion.php";
        break;
    case 'division':
        if ($num2 == 0) {
            $error = "ERROR: No se puede dividir por 0";
            require_once "../views/error.php";
            exit;
        } else {
            require_once "division.php";
        }
        break;
}