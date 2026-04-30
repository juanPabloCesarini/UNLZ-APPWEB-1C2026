<?php
    $titulo = "Vista Resultado";
    include_once 'layout/header.php';
?>
    <div class="container bg-dark p-2 mt-2 rounded">
        <h4 class="card-title text-center text-white m-3"><?php echo "El Resultado de " . $operacion . " " . $numero1 . " y " . $numero2 . " es:"; ?></h4>
        <div class="card-body text-center text-white m-3">
            <h1><?php echo $resultado; ?></h1>
        </div>
    </div>
<?php include_once 'layout/footer.php';?>