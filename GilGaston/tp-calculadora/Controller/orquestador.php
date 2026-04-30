<?php
$operacion = $_POST['operacion'];

switch ($operacion) {
    case "sumar":
        require_once 'sumar.php';
        break;

    case "restar":
        require_once 'restar.php';
        break;

    case "multiplicar":
        require_once 'multiplicar.php';
        break;
    
    case "dividir":
        require_once 'dividir.php';
        break;
}

?>