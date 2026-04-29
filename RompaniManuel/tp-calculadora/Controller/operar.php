<?php

    $operacion = $_POST["pantalla"] ?? "";
    $resultado = "Error";

    // se valida que operacion se quiere realizar y se llama al archivo que ejecuta dicha operacion
    // str_contains($operacion, "+") valida que tenga el caracter pasado pro parametro
    // explode("+", $operacion); separa el array en dos partes, los dos numeros a operar
    if (str_contains($operacion, "+")) {
        $partes = explode("+", $operacion);
        require_once "sumar.php";

    } elseif (str_contains($operacion, "-")) {
        $partes = explode("-", $operacion);
        require_once "restar.php";

    } elseif (str_contains($operacion, "x")) {
        $partes = explode("x", $operacion);
        require_once "multiplicar.php";

    } elseif (str_contains($operacion, "÷")) {
        $partes = explode("÷", $operacion);
        require_once "dividir.php";
    }

    // se redirige al index pasando el resultado como parametro en la url, no lo hago con "require_once '../View/vista_resultado.php';" porque uso otra logica
    header("Location: ../index.php?resultado=" . urlencode($resultado));
    exit;

?>