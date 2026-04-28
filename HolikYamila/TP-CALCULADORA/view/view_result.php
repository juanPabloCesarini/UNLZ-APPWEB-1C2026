<?php
$title = "Resultado - Calculadora PHP";
include_once '../view/layout/header.php';
?>

<div class="card">
    <div class="card-header">
        <h3>
           <?php echo "La " . $opMsg . " entre " . $num1 . " y " . $num2 . " es: " . $result?>
         </h3>
    </div>
</div>



<?php include_once '../view/layout/footer.php' ?>