<?php

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$opcion = $_POST['operacion'];

switch($opcion){

case "+":
    require_once 'suma.php';
    break;

case "-":
    require_once 'resta.php';
    break;
    
case "*":
    require_once 'multiplicar.php';
    break;
    
case "/":
    require_once 'dividir.php';
    break;
    
default:
$resultado = "Operacion invalida";    

}

require_once '../View/resultado.php';