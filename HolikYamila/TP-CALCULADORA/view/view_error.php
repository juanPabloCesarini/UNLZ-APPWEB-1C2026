<?php
$title = "Error - Calculadora PHP";
include_once '../view/layout/header.php';
include_once '../view/view_calculadora.php';
?>

<div id="card-result" class="row m-0 w-100 justify-content-center">
    <div id="card-error" class="col-9 col-md-6">
        <p class="p-3">
           <?php echo $result?>
</p>
    </div>
</div>



<?php 
include_once '../view/layout/footer.php';
?>