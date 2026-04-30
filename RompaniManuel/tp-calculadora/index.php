<?php
    $titulo = "Clase 25-04-26 PHP";

    // se utiliza para recibir el parametro por url
    $resultado = $_GET["resultado"] ?? "0";

    include_once 'View/layout/header.php';
?>
    <form action="Controller/operar.php" method="post">
        <div class="text-center calculadora">

            <div class="row">
                <div class="col">
                    <input id="pantalla" name="pantalla" class="pantalla w-100" readonly value="<?php echo $resultado; ?>"></input>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button class="boton-circulo boton-superior btn-calculadora" type="button" value="AC">AC</button>
                </div>

                <div class="col"></div>
                <div class="col"></div>

                <div class="col">
                    <button class="boton-circulo boton-superior btn-calculadora" type="button" value="÷">÷</button>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="7">7</button>
                </div>
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="8">8</button>
                </div>
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="9">9</button>
                </div>
                <div class="col">
                    <button class="boton-circulo boton-superior btn-calculadora" type="button" value="x">x</button>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="4">4</button>
                </div>
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="5">5</button>
                </div>
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="6">6</button>
                </div>
                <div class="col">
                    <button class="boton-circulo boton-superior btn-calculadora" type="button" value="-">-</button>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="1">1</button>
                </div>
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="2">2</button>
                </div>
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="3">3</button>
                </div>
                <div class="col">
                    <button class="boton-circulo boton-superior btn-calculadora" type="button" value="+">+</button>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="0">0</button>
                </div>
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value=".">.</button>
                </div>
                <div class="col">
                    <button class="boton-circulo btn-calculadora" type="button" value="BORRAR">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                            <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                            <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
                        </svg>
                    </button>
                </div>
            
                <div class="col">
                    <button class="boton-circulo boton-igual btn-calculadora" type="submit" value="=">=</button>
                </div>
            </div>

        </div>
    </form>
<?php include_once 'View/layout/footer.php';?>