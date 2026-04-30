<div class="calc-container">
        <form action="/UNLZ-APPWEB-1C2026/GomezPablo/tp-calculadora/controller/calcular.php" class="p-2 " method="post">
            <div class="w-100 d-flex gap-2 ">

                <div class="input-group">
                    <label for="val1">Primer número a operar</span>
                    <input type="text" id="val1" name="val1" class="form-control">
                </div>


                <div class="input-group d-flex flex-column">
                   <label for="val2">Segundo número a operar</span>

                    <input type="text" id="val2" name="val2" class="form-control">
                </div>
            </div>


            <div class="botones-container">
                <span class="text-desc">Seleccione un operador</span>
                <div class="d-flex mt-2 gap-2">
                    <input type="radio" class="d-none" name="type" value="suma" id="suma" autocomplete="off" checked>
                    <label class=" w-100 button" for="suma">+</label>

                    <input type="radio" class="d-none" name="type" value="resta" id="resta" autocomplete="off">
                    <label class=" w-100 button" for="resta">-</label>
                </div>

                <div class="d-flex my-2 gap-2">
                    <input type="radio" class="d-none" name="type" value="division" id="division" autocomplete="off">
                    <label class=" w-100 button" for="division">&#xf7</label>

                    <input type="radio" class="d-none" name="type" value="multiplicacion" id="multiplicacion" autocomplete="off">
                    <label class=" w-100 button" for="multiplicacion">*</label>
                </div>

                <div class="">
                    <button type="submit" class="btn w-100 button-send">=</button>
                </div>









            </div>


        </form>


    </div>