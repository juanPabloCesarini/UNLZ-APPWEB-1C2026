<?php
    $titulo = "Calculadora PHP";
    include_once 'View/layout/header.php';
?>

<div class="container py-5">
    <div class="text-center text-white p-2 m-3">
        <h1>Calculadora</h1>
    </div>
    <div class="card shadow bg-secondary text-white text-center text-uppercase mx-auto" style="max-width: 500px;">
        <p class="card-title mt-3">Ingresá los números y elegí la operación</p>
        <div class="card-body">
            
            <form action="Controller/operaciones.php" method="POST">
                
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="num1" class="form-label">Primer Número</label>
                        <input type="number" class="form-control" id="num1" name="num1" step="any" required>
                    </div>
                    <div class="col-6">
                        <label for="num2" class="form-label">Segundo Número</label>
                        <input type="number" class="form-control" id="num2" name="num2" step="any" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-6">
                        <button class="btn w-100 btn-primary" type="submit" name="operacion" value="sumar">Sumar</button>
                    </div>
                    <div class="col-6">
                        <button class="btn w-100 btn-danger" type="submit" name="operacion" value="restar">Restar</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <button class="btn w-100 btn-warning text-dark" type="submit" name="operacion" value="dividir">Dividir</button>
                    </div>
                    <div class="col-6">
                        <button class="btn w-100 btn-success" type="submit" name="operacion" value="multiplicar">Multiplicar</button>
                    </div>
                </div>
                
            </form>
            
        </div>
    </div>
</div>

<?php include_once 'View/layout/footer.php'; ?>