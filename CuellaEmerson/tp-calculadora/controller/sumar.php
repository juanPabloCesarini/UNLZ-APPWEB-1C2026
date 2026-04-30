<?php

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$opera= $_POST['operacion'];

$resultado = $numero1+$numero2;

require_once '../view/vista_resultado.php';

?>