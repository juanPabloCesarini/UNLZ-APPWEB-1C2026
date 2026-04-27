<?php
$titulo = "Resultado";
include_once 'layout/header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card text-center p-3" style="background-color: #698b7085;">

                <h3 class="card-title"><?php echo "La " .$opLetra. " de los numeros " .$numero1. " y " .$numero2. " es:"; ?></h3>
                <div class="card-body">
                    <h1><?php echo $resultado; ?></h1>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include_once 'layout/footer.php'; ?>