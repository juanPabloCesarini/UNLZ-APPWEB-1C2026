<?php
    $titulo = "Vista Resultado";
    include_once 'layout/header.php';
?>
    <div class="card shadow">
        <h3 class="card-title"><?php 
        $operacionSelec = [ "+" => "Sumar", "-" => "Restar", "*" => "Multiplicar", "/" => "Dividir"];
        $nombreOperacion = $operacionSelec[$operacion];
        echo "El Resultado de ". $nombreOperacion . " " . $numero1 . " y " . $numero2 . " es:"; ?></h3>
       
        <div class="card-body">
            <h1><?php echo $resultado; ?></h1>
        </div>
    </div>
    
<?php include_once 'layout/footer.php';?>