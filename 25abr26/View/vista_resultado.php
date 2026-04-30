<?php
    $titulo = "Vista Resultado";
    include_once 'layout/header.php';
?>
    <div class="card shadow">
        <h3 class="card-title"><?php echo "El Resultado de sumar " . $numero1 . " y " . $numero2 . " es:"; ?></h3>
        <div class="card-body">
            <h1><?php echo $resultado; ?></h1>
        </div>
    </div>
<?php include_once 'layout/footer.php';?>