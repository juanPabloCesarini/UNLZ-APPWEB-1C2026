<?php
$title = " Calculadora - PHP";
include_once './view/layout/header.php';
?>

<!-- Contenedor principal de la aplicación -->
<div class="container-app">

    <!-- Contenedor del formulario de entrada de números -->
    <div class="input-calculator-container">

        <!-- Formulario para ingresar los números a sumar -->
        <form action="./controller/validador.php" method="post">

            <input type="number" class="form-control" id="num1" name="num1" placeholder="Primer número">
            <input type="number" class="form-control" id="num2" name="num2" placeholder="Segundo número">

            <div class="button-container">
                <button class="btn btn-block btn-primary" type="submit" name="operacion" value="sumar">+</button>
                <button class="btn btn-block btn-primary" type="submit" name="operacion" value="restar">-</button>
                <button class="btn btn-block btn-primary" type="submit" name="operacion" value="dividir">/</button>
                <button class="btn btn-block btn-primary" type="submit" name="operacion" value="multiplicar">*</button>
            </div>

        </form>
    </div>
    
</div>




<? include_once './view/layout/footer.php' ?>