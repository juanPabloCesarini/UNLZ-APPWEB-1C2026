<?php

    $numero1 = (float)$partes[0];
    $numero2 = (float)$partes[1];

    if ($numero2 == 0) {
        $resultado = "Error";
    } else {
        $resultado = $numero1 / $numero2;
    }

?>