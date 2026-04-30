<?php include 'View/layout/header.php'; ?>

    <!--formulario de la calculadora-->
    <form action="Controller/calcular.php" method="POST" class="card p-4 shadow">

        <!--primer número-->
        <input type="number" name="val1" class="form-control mb-3" placeholder="Número 1">

        <!--el segundo-->
        <input type="number" name="val2" class="form-control mb-3" placeholder="Número 2">

        <!--operación-->
        <select name="type" class="form-select mb-3">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicacion">Multiplicar</option>
            <option value="division">Dividir</option>
        </select>

        <button type="submit" class="btn btn-primary">Calcular</button>

    </form>

<?php include 'View/layout/footer.php'; ?>