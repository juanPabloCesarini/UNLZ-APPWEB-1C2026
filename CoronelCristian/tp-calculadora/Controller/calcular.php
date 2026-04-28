<?php

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$operacion = $_POST["operacion"];

$resultado = "";

switch ($operacion) {
    case '+':
        $resultado = $numero1 + $numero2;
        break;
    case '-':
        $resultado = $numero1 - $numero2;
        break;    
    case '*':
        $resultado = $numero1 * $numero2;
        break;
    case '/':
        if ($numero2 == 0) {
        $resultado = "No es posible dividir por 0";
    } else {
        $resultado = $numero1 / $numero2;
    }
        break;    
}
   
    require_once '../View/vista_resultado.php';

?>
