<?php
$titulo = "Vista Resultado";

include_once 'layout/header.php';
?>
<div class="d-flex justify-content-center align-items-center vh-100">

    <div class="card">
        <a href="../index.php" class="btn">
            <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/icons/arrow-left.svg" width="16">
            Volver
        </a>
        <p class="card-title">
            <?php
            echo "El Resultado de " . $operacion . " entre " . $numero1 . " y " . $numero2 . " es:";
            ?>
        </p>
        <div class="card-body">
            <div class="mb-3">
                <h1><?php echo $resultado; ?></h1>
            </div>
        </div>
    </div>
</div>
<?php include_once 'layout/footer.php'; ?>