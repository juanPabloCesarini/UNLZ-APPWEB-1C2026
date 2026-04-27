<?php require_once("./view/header.php"); ?>

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center mb-4">Calculadora PHP</h2>

        <form action="/RaisingLucia/Tp-Calculadora/controller/calcular.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Primer número</label>
                <input type="number" name="val1" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Segundo número</label>
                <input type="number" name="val2" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Operación</label>
                <select name="type" class="form-select" required>
                    <option value="">Seleccionar</option>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="division">División</option>
                    <option value="multiplicacion">Multiplicación</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Calcular
            </button>

        </form>
    </div>
</div>

<?php require_once("./view/footer.php"); ?>