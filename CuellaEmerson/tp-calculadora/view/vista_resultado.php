
<?php
$titulo = "Vista Resultado";
include_once 'header.php';

?>

<div class="container w-25 text-center mt-5 ">

    <div class="row bg-danger pt-3">
        <h3 class="card-title "><?php echo "El Resultado de " . $opera . " " . $numero1 . " y " . $numero2 . " es:"; ?></h3>
    <div class="card-body">
        <h1><?php echo $resultado; ?></h1>
    </div>
    </div>

    

</div>



<?php include_once 'footer.php'; ?>