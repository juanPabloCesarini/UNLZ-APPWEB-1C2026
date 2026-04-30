<?php include __DIR__ . '/layout/header.php'; ?>

    <!--muestro el resultado de la operación-->
    <div class="card p-4 text-center shadow">
        <h2>Resultado</h2>

        <!--el$resultado viene calculada desde calcular.php-->
        <p class="fs-3"><?php echo $resultado; ?></p>

        <!--botón para volver al formulario -->
        <a href="../index.php" class="btn btn-primary">Volver</a>
    </div>

<?php include __DIR__ . '/layout/footer.php'; ?>