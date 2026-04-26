<?php

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$operacion = $_POST['operacion'];

    switch ($operacion) {
        case 'suma':
            include 'sumar.php';
            break;
        case 'resta':
            include 'restar.php';
            break;
        case 'multiplicacion':
            include 'multiplicar.php';
            break;
        case 'division':
            if ($numero2 != 0) {
                include 'dividir.php';
                break;
            } 
            /*Para evitar que muestre el error por pantalla 
            (averigüé cómo se volvía al index)
            Informo con un cartel que no se puede didivir por 0 y 
            realizo un redireccionamiento al index*/
            echo "<script>alert('No se puede dividir por 0');
             window.location.href='../index.php';
             </script>";
            exit;
        default:
            $resultado = 'Operación no válida';
    }
require_once '../View/vista_resultado.php';
?>