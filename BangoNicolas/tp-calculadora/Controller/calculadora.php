<?php

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$operacion = $_POST['operacion'];
$opLetra = "";

switch ($operacion) {

    case "+":
        require_once('sumar.php');
        $opLetra = "suma";
        break;
    case "-":
        require_once('restar.php');
        $opLetra = "resta";
        break;
    case "*":
        require_once('multiplicar.php');
        $opLetra = "multiplicacion";
        break;
    case "/":
        if ($numero2 == 0) {
            $resultado = "Error. No se puede dividir por 0";
            $opLetra = "division";
        } else {
            require_once('dividir.php');
            $opLetra = "division";
        }
        break;
    default:
        $resultado = "Seleccione una opcion de operacion";
        break;
}
require_once '../View/vista_resultado.php';
