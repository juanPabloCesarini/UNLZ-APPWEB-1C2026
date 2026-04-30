<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['operacion'];

if($num1 === "" || $num2 === ""){
    $errorMsg = "Hay campos vacíos";
    require_once '../views/error.php';
    exit;
}

if(!is_numeric($num1) || !is_numeric($num2)){
    $errorMsg = "Ingrese solo números";
    require_once '../views/error.php';
    exit;
}

switch($op){
    case "+":
        require_once 'sumar.php';
        exit;

    case "-":
        require_once 'restar.php';
        exit;

    case "*":
        require_once 'multiplicar.php';
        exit;

    case "/":
        if($num2 == 0){
            $errorMsg = "No se puede dividir por 0";
            require_once '../views/error.php';
            exit;
        }
        require_once 'dividir.php';
        exit;

    default:
        $errorMsg = "Operación inválida";
        require_once '../views/error.php';
        exit;
}