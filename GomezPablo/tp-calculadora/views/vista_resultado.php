<?php
    $titulo = "Resultado";
    include_once '../views/layout/header.php';
?>
<h1 class="test">Calculadora en PHP</h1>

    <?php include_once '../views/layout/calculadora.php';?>

    <div class="card-result">
        <h3 class="card-result-title"><?php echo "El resultado de $typeMsg " . $numero1 . " con " . $numero2 . " es:"; ?></h3>
        <div class="card-result-body">
            <h1><?php echo $resultado; ?></h1>
        </div>
    </div>
<?php include_once '../views/layout/footer.php';?>