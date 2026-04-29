<?php
$title = "Resultado - Calculadora PHP";
include_once '../view/layout/header.php';
?>

<?php
include_once 'view_calculadora.php';
?>


<div class="card">
    <div class="card-header">
        <h3>
           <?php echo $result?>
         </h3>
    </div>
</div>



<?php include_once '../view/layout/footer.php' ?>