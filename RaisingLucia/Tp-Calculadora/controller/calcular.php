<?php

$numero1 = $_POST['val1'];
$numero2 = $_POST['val2'];
$type = $_POST['type'];

if ($numero1 === "" || $numero2 === "") {
    $resultado = "Debe ingresar ambos números";
    require_once("../view/vista_resultado.php");
    return;
}

if (!is_numeric($numero1) || !is_numeric($numero2)) {
    $resultado = "Solo se permiten números";
    require_once("../view/vista_resultado.php");
    return;
}

switch ($type) {

    case "suma":
        require_once("../model/suma.php");
        break;

    case "resta":
        require_once("../model/resta.php");
        break;

    case "division":
        require_once("../model/division.php");
        break;

    case "multiplicacion":
        require_once("../model/multiplicacion.php");
        break;

    default:
        $resultado = "Seleccione una operación válida";
        require_once("../view/vista_resultado.php");
        return;
}

require_once("../view/vista_resultado.php");

?>