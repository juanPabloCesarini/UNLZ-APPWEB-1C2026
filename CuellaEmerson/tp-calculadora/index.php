
<?php
    $titulo = "Tp-Calculadora PHP";
    include_once 'view/header.php';
?>
<form action="controller/operacion.php" method="post">
<div class="container-fluid  mi-separacion  vh-100 colors">

        <div class="container w-50 colorc ">

            <fieldset disabled>
                <div class="row mt-3">
                    <div class="col">
                        <div class="m-3">
                            <input type="text" id="res" class="form-control" placeholder="mi idea era poner el resultado aca pero no pude">
                        </div>
                    </div>
                </div>
            </fieldset>


            
            <div class="row ">

                <!-- INPUTS -->
                <div class="col m-3">

                    <div class="form-text text-white fs-3">Ingresa los números a operar

                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Ingresa un número</label>
                        <input type="number" name="num1" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Ingresa otro número</label>
                        <input type="number" name="num2" class="form-control">
                    </div>

                </div>

                
                <div class="col">

                    <div class="h-100 d-flex flex-column justify-content-center">

                        <div class="row">

                            <div class="col d-flex justify-content-center align-items-center" style="height: 100px;">
                                <button name="operacion" value="sumar" class="btn btn-lg mi-boton btn-danger">Suma</button>
                            </div>

                            <div class="col d-flex justify-content-center align-items-center" style="height: 100px;">
                                <button name="operacion" value="restar" class="btn btn-lg mi-boton btn-danger">Resta</button>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col d-flex justify-content-center align-items-center" style="height: 100px;">
                                <button name="operacion" value="multiplicar" class="btn btn-lg mi-boton btn-danger">Multiplicación</button>
                            </div>

                            <div class="col d-flex justify-content-center align-items-center" style="height: 100px;">
                                <button name="operacion" value="dividir" class="btn btn-lg mi-boton btn-danger">División</button>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    </form>
    
<?php include_once 'View/footer.php';?>