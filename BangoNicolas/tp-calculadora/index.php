<?php
$titulo = "TP Calculadora";
include_once 'View/layout/header.php';
?>

<div class="container mt-5">
    <div class="text-center text-black p-2 m-3">
        <img src="imagen/calc.png" width="50">
        <h1>Calculadora</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow bg-secondary text-white text-center text-uppercase">
                <div class="card-body">
                    <p class="card-title">Ingresá los numeros</p>
                    <form action="Controller/calculadora.php" method="post">

                        <div class="mb-3">
                            <label for="num1" class="form-label">Primer Número</label>
                            <input type="number" class="form-control" id="num1" name="num1">
                        </div>

                        <div class="mb-3">
                            <label for="num2" class="form-label">Segundo Número</label>
                            <input type="number" class="form-control" id="num2" name="num2">
                        </div>

                        <label for="operacion" class="form-label">Selecciona que operacion hacer</label>
                        <select id="operacion" class="form-select" aria-label="Default select example" name="operacion">
                            <option value="">Elegir..</option>
                            <option value="+">Sumar</option>
                            <option value="-">Restar</option>
                            <option value="*">Multiplicar</option>
                            <option value="/">Dividir</option>
                        </select>

                     <button class="btn btn-block btn-primary" type="submit">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'View/layout/footer.php'; ?>