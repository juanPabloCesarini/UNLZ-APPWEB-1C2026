 <div id="calculator" class="row p-3 m-0 g-2 w-100 justify-content-center">
    <div class="col-9 col-md-6">
        <form action="\UNLZ-APPWEB-1C2026\HolikYamila\TP-CALCULADORA\controller\calcular.php" method="post">
            
        <div id="input-number" class="container g-2 p-3">
                <input type="number" class="form-control mb-2" id="num1" name="num1" placeholder="Ingrese primer número">
                <input type="number" class="form-control" id="num2" name="num2" placeholder="Ingrese segundo número">
            </div>


            <div id="button-container" class="row text-center g-1">                
                <div id="button-op-form" class="col-6"><button class="btn btn-block w-100" type="submit" name="operacion" value="sumar">+ <br> SUMAR</button></div>
                <div id="button-op-form" class="col-6"><button class="btn btn-block w-100" type="submit" name="operacion" value="restar">- <br> RESTAR</button></div>
                <div id="button-op-form" class="col-6"><button class="btn btn-block w-100" type="submit" name="operacion" value="dividir">/ <br> DIVIDIR</button></div>
                <div id="button-op-form" class="col-6"><button class="btn btn-block w-100" type="submit" name="operacion" value="multiplicar">* <br> MULTIPLICAR</button></div>
                </div>
            </div>

        </form>
        </div>
    </div>
    

<? include_once './view/layout/footer.php' ?>