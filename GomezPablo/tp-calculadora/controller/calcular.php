<?php

$numero1 = $_POST['val1'];
$numero2 = $_POST['val2'];
$type = $_POST['type'];
$typeMsg = "";
$errorMsg = "";


if(strlen($numero1) == 0 || strlen($numero2) == 0){
    $errorMsg = "Debes ingresar al menos dos números";
    require_once('../views/vista_error.php');
    return;
}

if(!is_numeric($numero1) || !is_numeric($numero2)){
    $errorMsg = "Solo se permite el ingreso de números.";
    require_once('../views/vista_error.php');
    return;
}

switch ($type) {
    case "suma": 
        $typeMsg = "sumar";
        require_once('suma.php');
        break;
    case "resta": 
        $typeMsg = "restar";
         require_once('resta.php');
        break;
    case "division": 
        if($numero2 == 0 || $numero1 == 0 && $numero2 == 0){
            $errorMsg = "No se puede dividir por 0.";
            require_once('../views/vista_error.php');
            break;
            }
        $typeMsg = "dividir";
         require_once('division.php');
        break;
    case "multiplicacion":
        $typeMsg = "multiplicar";
        require_once('multiplicacion.php');
        break;
}

// require_once '../View/vista_resultado.php';

?>
