<?php
    $titulo = "Resultado";
    include_once '../View/layout/header.php'; 
?>
    <div class="container mt-4">
        <div class="card shadow border-dark mx-auto" style="max-width: 600px;">
            <div class="card-body text-center">
                <h3 class="card-title text-muted">
                    Resultado de operar <?php echo $n1; ?> y <?php echo $n2; ?>:
                </h3>
                <hr>
                
                <h1 class="display-3 text-primary">
                    <?php echo $resultado; ?>
                </h1>
                
                <div class="mt-4">
                    <a href="../index.php" class="btn btn-dark">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>
<?php include_once '../View/layout/footer.php'; ?>