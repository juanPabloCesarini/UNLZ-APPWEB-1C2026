<?php
require_once './capturar_datos.php';
$errorMsg ="";

function mostrarError($message){
$errorMsg = $message;
$result = $errorMsg;
require_once '../view/view_error.php';
die();
}

if($num1 == "" || $num2 == "") {
    mostrarError("Error: hay campos vacíos");

}else if(!is_numeric($num1) || !is_numeric($num2)) {
    mostrarError("Error: los campos deben ser numéricos");

}else{
$num1 = (double)$num1;
$num2 = (double)$num2;
}

if($opType == "dividir" && $num2 == 0){
    mostrarError("Error: no se puede dividir por cero");   
}else{
require_once 'calcular.php';
}

?>