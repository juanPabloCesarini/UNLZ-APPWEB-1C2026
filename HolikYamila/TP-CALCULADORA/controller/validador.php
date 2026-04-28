<?php
require_once 'capturar_datos.php';

if($num1 == "" && $num2 == "") {
    echo "Error: los campos estan vacíos";
    return;    
}

if(!is_numeric($num1) || !is_numeric($num2)) {
    echo "Error: los campos deben ser numéricos";
    return;    
}

if($opType == "dividir" && ($num1 == 0 || $num2 == 0)){
    echo "Error: no se puede dividir por cero";
    return;
}

require_once 'calcular.php';

?>