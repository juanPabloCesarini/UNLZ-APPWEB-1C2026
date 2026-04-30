<?php
$titulo = "Calculadora";
include_once 'views/layout/header.php';
?>

<main>
    <div class="container">
        <div class="calculadora">

            <h1>Calculadora</h1>

            <form action="controller/calcular.php" method="post">

                <input type="number" name="num1" placeholder="Primer número">
                <input type="number" name="num2" placeholder="Segundo número">

                <br>

                <select name="operacion">
                    <option value="+">Sumar</option>
                    <option value="-">Restar</option>
                    <option value="*">Multiplicar</option>
                    <option value="/">Dividir</option>
                </select>

                <br><br>

                <button type="submit">Calcular</button>

            </form>

        </div>
    </div>
</main>

<?php include_once 'views/layout/footer.php'; ?>