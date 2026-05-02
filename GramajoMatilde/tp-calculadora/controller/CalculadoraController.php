<?php

class CalculadoraController {

    public function procesar() {
        $resultado = null;
        $error = null;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
            $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
            $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';

            if ($operacion == 'division' && $num2 == 0) {
                $error = "No se puede dividir por cero.";
            } 
            else {
                switch ($operacion) {
                    case 'suma':
                        require_once 'models/Suma.php';
                        $calc = new Suma();
                        $resultado = $calc->calcular($num1, $num2);
                        break;

                    case 'resta':
                        require_once 'models/Resta.php';
                        $calc = new Resta();
                        $resultado = $calc->calcular($num1, $num2);
                        break;

                    case 'multiplicacion':
                        require_once 'models/Multiplicacion.php';
                        $calc = new Multiplicacion();
                        $resultado = $calc->calcular($num1, $num2);
                        break;

                    case 'division':
                        require_once 'models/Division.php';
                        $calc = new Division();
                        $resultado = $calc->calcular($num1, $num2);
                        break;
                    
                    default:
                        $error = "Operación no válida.";
                        break;
                }
            }
        }

        require_once 'view/view_calculadora.php';
    }
}