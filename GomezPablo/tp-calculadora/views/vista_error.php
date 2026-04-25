<?php
$titulo = "Resultado";
include_once '../views/layout/header.php';
?>
<h1 class="test">Calculadora en PHP</h1>

<?php include_once '../views/layout/calculadora.php';?>

<div class="card-result-error">
    <h3 class="card-result-title-error"><?php echo $errorMsg ?></h3>
</div>
<?php include_once '../views/layout/footer.php'; ?>