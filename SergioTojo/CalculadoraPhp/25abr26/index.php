<?php
$titulo = "Clase 25-04-26 PHP";
include_once 'View/layout/header.php';
?>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card">
        <h1>Calculadora</h1>
        <p class="card-title">Ingresá los numeros y elegí la operación</p>
        <div class="card-body">
            <div class="mb-3">
                <form action="Controller/calculadora.php" method="post">

                    <label for="num1" class="form-label">Primer Número</label>
                    <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Segundo Número</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <select class="form-select" aria-label="Default select example" name="operacion" required>
                <option selected value="">Elegir..</option>
                <option value="suma"name="suma">Sumar</option>
                <option value="resta"name="resta">Restar</option>
                <option value="multiplicacion"name="multiplicacion">Multiplicar</option>
                <option value="division"name="division">Dividir</option>
            </select><hr>
            <button class="btn btn-block btn-primary" type="submit">Realizar operación</button>
            </form>
        </div>
    </div>
</div>
<?php include_once 'View/layout/footer.php'; ?>