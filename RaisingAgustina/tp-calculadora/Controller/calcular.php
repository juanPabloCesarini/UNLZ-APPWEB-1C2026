<?php

//recibo los datos enviados desde el formulario
$numero1 = $_POST['val1'];
$numero2 = $_POST['val2'];
$type    = $_POST['type'];

//guardo el resultado en una variable
$resultado = "";

//valido campos vacios
if ($numero1 === "" || $numero2 === "") {
    $error = "Debe ingresar los dos números antes de calcular.";
    require_once '../View/vista_error.php';
    exit();
}

// segun la operación llamo al archivo correspondiente
switch ($type) {

    case "suma":
        require_once('suma.php');
        break;

    case "resta":
        require_once('resta.php');
        break;

    case "multiplicacion":
        require_once('multiplicacion.php');
        break;

    case "division":
        require_once('division.php');
        break;
}

//muestro y cargo el resultado en la vista
require_once '../View/vista_resultado.php';