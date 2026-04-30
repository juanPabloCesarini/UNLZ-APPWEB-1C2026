<?php
$title = "Resultado - Calculadora PHP";
include_once '../view/layout/header.php';
?>

<?php
include_once 'view_calculadora.php';
?>


<div id="card-result" class="row m-0 w-100 justify-content-center">
    <div id="card-success" class="col-9 col-md-6">
        <p class="p-3">
           <?php echo "El resultado de la " . $opMsg . " entre " . $num1 . " y " . $num2 . " es: " . $result?>
</p>
    </div>
</div>


<?php include_once '../view/layout/footer.php' ?>