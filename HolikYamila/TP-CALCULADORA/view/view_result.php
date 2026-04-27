<?php
$title = "Resultado - Calculadora PHP";
include_once './layout/header.php';
?>

<div class="card">
    <div class="card-header">
        <h3>
           <?php echo "Resultado de la operacion "
               . $num1 . " y " . $num2 . " es: " ?>
         </h3>
    </div>
</div>



<?php include_once './layout/footer.php' ?>