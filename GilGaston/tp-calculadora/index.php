<?php
    $titulo = "Calculadora Gastón Gil";
    include_once 'View/layout/header.php';
?>

    <div class="container bg-dark p-2 mt-2 rounded">
        <div class="text-center text-white m-3">
            <h1>TP Calculadora de Gastón Gil</h1>
        </div>
        <div class="card shadow bg-secondary text-white text-center">
            <h4 class="card-title">Ingresá los numeros a calcular y luego seleccione la operación</h3>
            <div class="card-body">
                <form action="Controller/orquestador.php" method="post">
                    <div class="mb-3">
                        <label for="num1" class="form-label">Primer Número</label>
                        <input type="number" class="form-control" id="num1" name="num1">
                    </div>
                    <div class="mb-3">
                        <label for="num2" class="form-label">Segundo Número</label>
                        <input type="number" class="form-control" id="num2" name="num2">
                    </div>
                    <select class="form-select mt-2" aria-label="Default select example" name="operacion">
                        <option selected>Seleccione la operación</option>
                        <option value="sumar">Sumar</option>
                        <option value="restar">Restar</option>
                        <option value="multiplicar">Multiplicar</option>
                        <option value="dividir">Dividir</option>
                    </select>
                    <button class="btn btn-block btn-primary mt-2" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </div>
<?php include_once 'View/layout/footer.php';?>