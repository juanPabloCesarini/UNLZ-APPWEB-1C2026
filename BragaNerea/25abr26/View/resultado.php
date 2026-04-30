<?php
$titulo = "Resultado";
include_once 'layout/header.php';
?>

<div class="container mt-4 d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow-lg text-center" style="width: 500px; border-radius: 20px;">

        <h4 class="mb-3">Resultado</h4>
        <div class="card-body">

            <h3>
                <?php echo "$numero1 $opcion $numero2"; ?>
            </h3>

    <div class="alert alert-success mt-3">
            <h1><?php echo $resultado; ?></h1>
        </div>


            <a href="../index.php" class="btn btn-primary mt-3">
                Volver
            </a>

        </div>
    </div>
</div>

<?php include_once 'layout/footer.php'; ?>