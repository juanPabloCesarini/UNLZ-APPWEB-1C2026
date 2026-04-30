<?php include __DIR__ . '/layout/header.php'; ?>

<div class="alert alert-danger text-center">
    <h3>Error</h3>
    <!--muestra el mensaje según el error que ocurrió-->
    <p><?php echo $error; ?></p>

    <a href="../index.php" class="btn btn-danger">Volver</a>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>