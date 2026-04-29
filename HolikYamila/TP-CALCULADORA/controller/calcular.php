<?php
require_once 'capturar_datos.php';
require_once 'validador.php';

$opMsg = ""; 

switch ($opType) {
    case "sumar" :
        $opMsg = "suma";
        require_once 'sumar.php';
        break;

        case "restar":
            $opMsg = "resta";
            require_once 'restar.php';
            break;

            case "dividir" :
                $opMsg = "división";
                require_once 'dividir.php';
            break;

            case "multiplicar" :
                $opMsg = "multiplicación";
                require_once 'multiplicar.php';
                break;

}

?>