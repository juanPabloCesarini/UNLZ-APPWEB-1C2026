<form method="POST" action="/UNLZ-APPWEB-1C2026/AlvarezMartina/tp-calculadora/controller/calcular.php">
    <input type="text" name="num1" placeholder="Escriba numero 1...">
    <input type="text" name="num2" placeholder="Escriba numero 2...">

    <div class="operaciones">
        <label>
            <input type="radio" name="operacion" value="suma" required>
            <span>+</span>
        </label>

        <label>
            <input type="radio" name="operacion" value="resta">
            <span>-</span>
        </label>

        <label>
            <input type="radio" name="operacion" value="multiplicacion">
            <span>*</span>
        </label>

        <label>
            <input type="radio" name="operacion" value="division">
            <span>/</span>
        </label>
    </div>

    <button type="submit">Calcular</button>
</form>

