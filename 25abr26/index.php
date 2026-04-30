<?php
    $titulo = "Clase 25-04-26 PHP";
    include_once 'View/layout/header.php';
?>

    <div class="container-fluid bg-dark m-3 p-3">
        <div class="text-center text-white p-2 m-3">
            <h1>Primer ejemplo SUMA</h1>
        </div>
        <div class="card shadow bg-secondary text-white text-center text-uppercase">
            <p class="card-title">Ingresá los numeros a sumar</p>
            <div class="card-body">
                <div class="mb-3">
                    <form action="Controller/sumar.php" method="post">

                        <label for="num1" class="form-label">Primer Número</label>
                        <input type="number" class="form-control" id="num1" name="num1">
                </div>
                <div class="mb-3">
                    <label for="num2" class="form-label">Segundo Número</label>
                    <input type="number" class="form-control" id="num2" name="num2">
                </div>
       <select class="form-select" aria-label="Default select example" name="operacion">
  <option selected>Elegir..</option>
  <option value="+">Sumar</option>
  <option value="-">Restar</option>
  <option value="*">Multiplicar</option>
</select>
                <button class="btn btn-block btn-primary" type="submit">Sumar</button>
                </form>
            </div>
        </div>
    </div>
<?php include_once 'View/layout/footer.php';?>