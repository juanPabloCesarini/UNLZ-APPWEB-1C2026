<?php
$title = "Error - Calculadora PHP";
include_once '../view/layout/header.php';
include_once '../view/view_calculadora.php';
?>

<div class="container-error">
    <h3><?php echo $result ?></h3>
</div>

<?php 
include_once '../view/layout/footer.php';
?>