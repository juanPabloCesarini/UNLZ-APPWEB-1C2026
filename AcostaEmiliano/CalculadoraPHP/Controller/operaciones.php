<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$op = $_POST['operacion'];
$resultado = 0;

switch($op){
    case 'sumar':
        require_once 'sumar.php';
        break;
    case 'restar':
        require_once 'restar.php';
        break;
    case 'multiplicar':
        require_once 'multiplicar.php';
        break;
    case 'dividir':
        require_once 'dividir.php';
        break;
    default:
        $resultado = "No es una operación válida";
        break;
}

    require_once '../View/vista_resultado.php';
?>