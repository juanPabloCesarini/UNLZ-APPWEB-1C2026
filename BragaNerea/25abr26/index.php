<?php
    $titulo = "Clase 25-04-26 PHP";
    include_once 'View/layout/header.php';
?>

            <h1 class="text-center mt-5 mb-4">Calculadora</h1>

        <div class="d-flex justify-content-center">

        <div class="card shadow-lg p-4" style="width: 500px; border-radius: 20px;">


            <p class="text-center mb-3">Ingresá los numeros de la operacion: </p>
            <div class="card-body">
                <div class="mb-3">
                   
                <form action="Controller/Calculadora.php" method="post">

                        <label for="num1" class="form-label">Numero 1</label>
                        <input type="number" class="form-control" id="num1" name="num1" step="any">
                </div>
               
                <div class="mb-3">
                    <label for="num2" class="form-label">Numero 2</label>
                    <input type="number" class="form-control" id="num2" name="num2" step="any">
                </div>
      
                <select class="form-select" aria-label="Default select example" name="operacion">
  <option value="">Elegir operacion: </option>
  <option value="+">Sumar ➕​</option>
  <option value="-">Restar ➖​</option>
  <option value="*">Multiplicar ✖️​</option>
  <option value="/">Dividir ➗​</option>

</select>
                <button class="btn btn-dark w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
<?php include_once 'View/layout/footer.php';?>