<?php

$operacion = $_POST['operacion'];

switch ($operacion) {
    case 'sumar':
        require_once 'sumar.php';
        break;

    case 'restar':
        require_once 'resta.php';
        break;

    case 'multiplicar':
        require_once 'multiplicacionf.php';
        break;

    case 'dividir':
        require_once 'divisionf.php';
        break;
}